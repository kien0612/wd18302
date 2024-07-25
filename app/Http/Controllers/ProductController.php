<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    private $view;
    public function __construct() {
        $this->view = [];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $objPro = new Product();
        $this->view['listPro'] = $objPro->loadAllDataProductWithPager();
        // dd($this->view['listPro']);
        return view('product.index', $this->view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $objCate = new Category();
        $this->view['listCate'] = $objCate->loadAllDataCategory();
        // dd($this->view['listCate']);
        return view('product.create',$this->view);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
        $validate = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'price' => ['required', 'integer', 'min:1'],
                'quantity' => ['required', 'integer', 'min:1'],
                'image' => ['required', 'image', 'mimes:jpg,png,jpeg', 'max:2048'],
                'category_id' => ['required', 'exists:categories,id'],
            ],
            [
                'name.required' => "Trường name không được bỏ trống",
                'name.string' => "Trường name phải là chuỗi",
                'name.max' => "Trường name không được vượt quá 255 ký tự",
                
                'price.required' => "Trường price không được bỏ trống",
                'price.integer' => "Trường price phải là số nguyên",
                'price.min' => "Trường price phải lớn hơn hoặc bằng 1",
        
                'quantity.required' => "Trường quantity không được bỏ trống",
                'quantity.integer' => "Trường quantity phải là số nguyên",
                'quantity.min' => "Trường quantity phải lớn hơn hoặc bằng 1",
        
                'image.required' => "Trường image không được bỏ trống",
                'image.image' => "Trường image phải là một hình ảnh",
                'image.mimes' => "Trường image phải có định dạng jpg, png, hoặc jpeg",
                'image.max' => "Trường image không được vượt quá 2048KB",
        
                'category_id.required' => "Trường category_id không được bỏ trống",
                'category_id.exists' => "Trường category_id không hợp lệ",
            ]
        );
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
