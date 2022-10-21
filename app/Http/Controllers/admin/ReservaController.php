public function index()
{
    $appointments = Appointment::all();
    return view('admin.appointments.index', compact('appointments'));
}