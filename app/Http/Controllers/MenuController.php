<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allmenus = Menu::all();
        return view('menu.menuTreeview', compact('menus', 'allmenus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'table' => 'required'
        ]);
        $menu = new Menu();
        $menu->table = $request->table;
        $menu->parent_id = empty($request->parent_id) ? 0 : $request->parent_id;
        $menu->save();
        return back()->with('success', 'Menu added successfully');
    }

    public function show()
    {
        $menus=Menu::where('parent_id','=',0)->get();
        return view('menu.dynamicMenu',compact('menus'));
    }
}
