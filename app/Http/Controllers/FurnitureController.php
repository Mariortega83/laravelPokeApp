<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller {

        public function index(Request $request) {
        return view('furniture.index', 
            [
                'lifurniture'   => 'active',
                'furnitures'    => Furniture::orderBy('model')->get(),
            ]);
    }

   
    public function create(Request $request) {
        return view('furniture.create', ['lifurniture' => 'active']);
    }

    
    public function store(Request $request) {
        $validated = $request->validate([
            'model'  => 'required|unique:furniture|max:50|min:2',
            'price' => 'required|numeric|gte:0|lte:99999.999',
        ]);
        $object = new Furniture($request->all());
        try {
            $result = $object->save();
            //$object = Furniture::create($request->all());
            return redirect('furniture')->with(['message' => 'The furniture has been created.']);
        } catch(\Exception $e) {
            //si no lo he guardado volver a la página anterior con sus datos para volver a rellenar el formulario y mensaje
            return back()->withInput()->withErrors(['message' => 'The furniture has not been created.']);
        }
    }

    
   /* public function show(Furniture $furniture) {
       return view('furniture.show', ['lifurniture' => 'active',
                                        'furniture' => $furniture]);
    }*/

    //inyección de dependencia
    public function show(Request $request, $id) {
       $furniture = Furniture::find($id);
       if($furniture === null){
            abort(404); 
       }
       return view('furniture.show', ['lifurniture' => 'active',
                                        'furniture' => $furniture]);
    }
    
    //laravel inyecta el objeto $furniture, en realidad le llega el $id
    public function edit(Request $request, Furniture $furniture) {
        return view('furniture.edit', ['lifurniture' => 'active',
                                         'furniture' => $furniture,]);
    }

    public function update(Request $request, Furniture $furniture) {
        //$request   -
        //$furniture -
        $validated = $request->validate([
            'model' =>'required|max:50|min:4|unique:furniture,model,' . $furniture->id,
            'price' => 'required|numeric|gte:0|lte:99999.999', //greater than equal, less than equal
        ]);
        try {
            $result = $furniture->update($request->all());
            //update furniture set model = :model, price = :price where id = :id
            //parameters: model -> $request -> model,price -> $request -> price,id -> $furniture->id
            //$product->fill($request->all());
            //$result = $product->save();
            return redirect('furniture')->with(['message' => 'The furniture has been updated.']);
        } catch(\Exception $e) {
            return back()->withInput()->withErrors(['message' => 'The furniture has not been updated.']);
        }
    }

    public function destroy(Request $request, Furniture $furniture) {
        try {
            $furniture->delete();
            return redirect('furniture')->with(['message' => 'The furniture has been deleted.']);
        } catch(\Exception $e) {
             return back()->withErrors(['message' => 'The furniture has not been deleted.']);
        }
    }
}
