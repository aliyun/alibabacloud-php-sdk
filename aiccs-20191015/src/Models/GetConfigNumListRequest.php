<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetConfigNumListRequest extends Model
{
    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 部门ID
     *
     * @var int
     */
    public $departmentId;

    /**
     * @description 账号名称
     *
     * @var string
     */
    public $accountName;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'departmentId' => 'DepartmentId',
        'accountName'  => 'AccountName',
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
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConfigNumListRequest
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        return $model;
    }
}
