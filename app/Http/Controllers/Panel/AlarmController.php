<?php

namespace App\Http\Controllers\Panel;


use App\Http\Controllers\Controller;
use App\Models\Alarm;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Time;

class AlarmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $item = Alarm::all(); //select * from alarms;
        return view('panel.alarms.index')->withItems($item);
//        return view('panel.alarms.index')->with('items',$item);
//        return view('panel.alarms.index',pack('items'));
//        return view('panel.alarms.index',['items' => $item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
//        $times = Time::all();
        $times = [];
        return view('panel.alarms.create')->withTimes($times);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Alarm::create($request->all());
        return redirect()->route('panel.alarms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alarm  $alarm
     * @return \Illuminate\Http\Response
     */
    public function show(Alarm $alarm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alarm  $alarm
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Alarm $alarm)
    {
        return view('panel.alarms.edit')->withItem($alarm);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alarm  $alarm
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Alarm $alarm)
    {
        $alarm->update($request->all()); //update alarms f1=v1 , f2=v2 where id = 1;
        return redirect()->route('panel.alarms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alarm  $alarm
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Alarm $alarm)
    {
        $alarm->delete();
        return redirect()->route('panel.alarms.index');
    }
}
