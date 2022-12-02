<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeOutlineBindingRequest extends Model
{
    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isConcurrentLimit;

    /**
     * @var string
     */
    public $SQLId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'databaseName'      => 'DatabaseName',
        'instanceId'        => 'InstanceId',
        'isConcurrentLimit' => 'IsConcurrentLimit',
        'SQLId'             => 'SQLId',
        'tableName'         => 'TableName',
        'tenantId'          => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isConcurrentLimit) {
            $res['IsConcurrentLimit'] = $this->isConcurrentLimit;
        }
        if (null !== $this->SQLId) {
            $res['SQLId'] = $this->SQLId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOutlineBindingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsConcurrentLimit'])) {
            $model->isConcurrentLimit = $map['IsConcurrentLimit'];
        }
        if (isset($map['SQLId'])) {
            $model->SQLId = $map['SQLId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
