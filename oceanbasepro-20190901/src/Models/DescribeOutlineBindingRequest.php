<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeOutlineBindingRequest extends Model
{
    /**
     * @description The name of the database.
     *
     * @example testdb
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description - When the value is set to True, the throttling information in the database is queried based on the SQL ID.
     * - When the value is set to False, the bound index or execution plan in the database is queried based on the SQL ID.
     * @example false
     *
     * @var bool
     */
    public $isConcurrentLimit;

    /**
     * @description SQLID.
     *
     * @example 8D6E84****0B8FB1823D199E2CA1****
     *
     * @var string
     */
    public $SQLId;

    /**
     * @description The name of the tenant.
     * It must start with a letter or an underscore (_), and contain 2 to 20 characters, which can be uppercase letters, lowercase letters, digits, and underscores (_). It cannot be set to SYS.
     * @example pay_online
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The ID of the tenant.
     *
     * @example t2mr3oae0****
     *
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
