<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class DeleteDepartmentRequest extends Model
{
    /**
     * @description 实例id
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 部门id
     *
     * @var int
     */
    public $departmentId;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'departmentId' => 'DepartmentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDepartmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }

        return $model;
    }
}
