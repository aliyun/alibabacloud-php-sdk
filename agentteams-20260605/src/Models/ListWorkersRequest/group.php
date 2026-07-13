<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListWorkersRequest;

use AlibabaCloud\Dara\Model;

class group extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'name' => 'Name',
        'role' => 'Role',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
