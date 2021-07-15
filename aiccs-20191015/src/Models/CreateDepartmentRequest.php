<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class CreateDepartmentRequest extends Model
{
    /**
     * @description 实例id
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 部门名称
     *
     * @var string
     */
    public $departmentName;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'departmentName' => 'DepartmentName',
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
        if (null !== $this->departmentName) {
            $res['DepartmentName'] = $this->departmentName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDepartmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DepartmentName'])) {
            $model->departmentName = $map['DepartmentName'];
        }

        return $model;
    }
}
