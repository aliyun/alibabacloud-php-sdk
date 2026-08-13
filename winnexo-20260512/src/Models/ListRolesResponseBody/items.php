<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListRolesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $roleCode;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var bool
     */
    public $toggleable;
    protected $_name = [
        'description' => 'description',
        'roleCode' => 'roleCode',
        'roleName' => 'roleName',
        'toggleable' => 'toggleable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->roleCode) {
            $res['roleCode'] = $this->roleCode;
        }

        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
        }

        if (null !== $this->toggleable) {
            $res['toggleable'] = $this->toggleable;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['roleCode'])) {
            $model->roleCode = $map['roleCode'];
        }

        if (isset($map['roleName'])) {
            $model->roleName = $map['roleName'];
        }

        if (isset($map['toggleable'])) {
            $model->toggleable = $map['toggleable'];
        }

        return $model;
    }
}
