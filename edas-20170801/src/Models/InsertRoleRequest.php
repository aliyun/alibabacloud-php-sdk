<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertRoleRequest extends Model
{
    /**
     * @var string
     */
    public $actionData;

    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'actionData' => 'ActionData',
        'roleName'   => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionData) {
            $res['ActionData'] = $this->actionData;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionData'])) {
            $model->actionData = $map['ActionData'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
