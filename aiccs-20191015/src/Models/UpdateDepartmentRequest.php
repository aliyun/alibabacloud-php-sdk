<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class UpdateDepartmentRequest extends Model
{
    /**
     * @var int
     */
    public $departmentId;

    /**
     * @var string
     */
    public $departmentName;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'departmentId' => 'DepartmentId',
        'departmentName' => 'DepartmentName',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }

        if (null !== $this->departmentName) {
            $res['DepartmentName'] = $this->departmentName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }

        if (isset($map['DepartmentName'])) {
            $model->departmentName = $map['DepartmentName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
