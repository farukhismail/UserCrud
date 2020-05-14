<?php
namespace App\Services;
use App\User;

class UserService
{
    public function __construct(User $user)
    {
        $this->user = $user ;
    }

    public function all()
    {
        return $this->user->all();
    }

    public function create(Array $data)
    {
        return $this->user->create($data);
    }


    public function findOne($id)
    {
        return $this->user->find($id);
    }

    public function update(Array $attributes, $id)
    {
        $user = $this->findOne($id);
        return $user->update($attributes);
    }

    public function delete($id)
    {
        $user = $this->findOne($id);

        return $user->delete($id);
    }
}