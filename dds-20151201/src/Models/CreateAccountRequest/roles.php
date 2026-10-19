<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\CreateAccountRequest;

use AlibabaCloud\Dara\Model;

class roles extends Model
{
    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'DBName' => 'DBName',
        'role' => 'Role',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
