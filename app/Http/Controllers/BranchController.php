<?php
 
namespace App\Http\Controllers;
use App\Branch;
use App\Pin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class BranchController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::all();
        return view('admin.branches.index')->with('branches',$branches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create(Request $request)
    {
      
       $PinList=Pin::all();

        return view('admin.branches.create')->with('PinList',$PinList);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
                'name' => 'required',
            ],[
                'name.required' => ' The Branch field is required.',
            ]);

       $this->validate($request,[
                'address' => 'required',
            ],[
                'address.required' => ' The Address field is required.',
            ]);

        $Branch=new Branch();
        $Branch->name=$request->input('name');
        $Branch->address=$request->input('address');

        $aoi = implode(',', $request->input('pin'));

        $Branch->pin=$aoi;
        $Branch->save();


        return back()->with('success','Branch created successfully!');
       
        

 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $Branch=Branch::find($id);
       $PinList=Pin::all();
       return view('admin.branches.edit_branch')->with('Branch',$Branch)->with('PinList',$PinList);
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
          $this->validate($request,[
                'name' => 'required',
            ],[
                'name.required' => ' The Branch field is required.',
            ]);

       $this->validate($request,[
                'address' => 'required',
            ],[
                'address.required' => ' The Address field is required.',
            ]);

         $Branch=Branch::find($id);

        $Branch->name=$request->input('name');
        $Branch->address=$request->input('address');

        // $aoi = implode(',', $request->input('pin'));

        // $Branch->pin=$aoi;
        $Branch->save();

        return redirect('admin/branches')->with('success','Branch Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $Branch=Branch::find($id);
       $Branch->delete();
       return redirect('admin/branches')->with('success','Branch Deleted Succesfully');
    }
}
 