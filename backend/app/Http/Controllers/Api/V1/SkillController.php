<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSkillRequest;
use App\Models\Skill;
class SkillController extends Controller
{
    public function index(){
        return response()->json('apply skill');
    }
    public function store(StoreSkillRequest $request){
        Skill::create($request->validated());
        return response()->json('Skill add successfully');


    }
    public function update(StoreSkillRequest $request,Skill $skill){
            $skill->update($request->validated());
            return response()->json('Skill updated');

    }

}
