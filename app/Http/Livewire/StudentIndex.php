<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentIndex extends Component
{
    use WithPagination;
    public $nama;
    public $id_student;

    public function saveData()
    {
        if ($this->id_student) {
            $student = Student::where('id',$this->id_student)->first();
            $student->update([
                'nama' => $this->nama
            ]);
        }else{
            Student::create([
                'nama' => $this->nama
            ]);
        }

        $this->reset();
    }

    public function deleteData($id)
    {
        Student::where('id',$id)->delete();

    }

    public function editData($id)
    {
        $student = Student::where('id',$id)->first();
        $this->nama = $student->nama;
        $this->id_student = $student->id;

    }

    public function render()
    {
        $data['students'] = Student::paginate(5);
        return view('livewire.student-index',$data);
    }
}
