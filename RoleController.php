<?php
// start of main category

        public function viewRole(){
        $roles = Role::all();
        return view ('admin.role', ['roles' => $roles]);
    }

public function saveNewRole (Request $request)
{

    $validated = $request->validate([
        'name' => 'required|max:255',

    ]);

    try {

        $rol = Role::create([
            'role_name' => $request->name
        ]);
        if (!is_null($rol)){
            Session::flash('message','Successfully added a new role information');
        } else {
            throw new Exception('Unable to create a new role information');
        }

    } catch (Exception $e) {
        Session::flash('error', 'Something went wrong, please try again later.');
    }
    return redirect ('/view_role');
}

public function showNewFormRole()
{
    return view('admin.new-role');
}


public function deleteRole($id)
{
    $role = Role::find($id);
    $role->delete();

    Session::flash('message', 'Successfully removed role');
    return redirect('/view_role');
}

public function showEditFormRole($id)
{
        $role = Role::find($id);
        if (!is_null($role)){
            return view('admin.edit_role', compact('role'));
        }
        Session::flash('error', 'We cannot find the record you are searching for.');
        return redirect()->back();
}


public function saveRoleChanges(Request $request)
{

    $validated = $request->validate([
        'name' => 'required|max:255',

    ]);


try {
    $id = $request->id;
    $role = Role::find($id);
    $role->update([
        'role_name' => $request->name

    ]);

    Session::flash('message', 'Successfully updated role information!');
} catch (Exception $e) {
    Session::flash('error', 'Something went wrong, please try again later!');
}
    return redirect('/view_role');


}

// end of main category
?>