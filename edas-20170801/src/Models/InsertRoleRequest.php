<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertRoleRequest extends Model
{
    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $actionData;
    protected $_name = [
        'roleName'   => 'RoleName',
        'actionData' => 'ActionData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->actionData) {
            $res['ActionData'] = $this->actionData;
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
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['ActionData'])) {
            $model->actionData = $map['ActionData'];
        }

        return $model;
    }
}
