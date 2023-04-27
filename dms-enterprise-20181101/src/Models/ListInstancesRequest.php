<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model
{
    /**
     * @description The alias of the database instance.
     *
     * @example MySQL
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The source of the database instance. Valid values:
     *
     *   **PUBLIC_OWN**: a self-managed database instance that is deployed on the Internet
     *   **RDS**: an ApsaraDB RDS instance
     *   **ECS_OWN**: a self-managed database that is deployed on an Elastic Compute Service (ECS) instance
     *   **VPC_IDC**: a self-managed database instance that is deployed in a data center connected over a virtual private cloud (VPC)
     *
     * @example product
     *
     * @var string
     */
    public $envType;

    /**
     * @description The timeout period for querying data in the database instance.
     *
     * @example RDS
     *
     * @var string
     */
    public $instanceSource;

    /**
     * @description The network type of the database instance. Valid values:
     *
     *   **CLASSIC**: classic network
     *   **VPC**: VPC
     *
     * @example NORMAL
     *
     * @var string
     */
    public $instanceState;

    /**
     * @description The status of the database instance.
     *
     * @example VPC
     *
     * @var string
     */
    public $netType;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) operation to obtain the tenant ID.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Indicates whether the lock-free schema change feature is enabled for the database instance.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The operation that you want to perform. Set the value to **ListInstances**.
     *
     * @example test
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The ID of the owner for the database instance.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dbType'         => 'DbType',
        'envType'        => 'EnvType',
        'instanceSource' => 'InstanceSource',
        'instanceState'  => 'InstanceState',
        'netType'        => 'NetType',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'searchKey'      => 'SearchKey',
        'tid'            => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->instanceSource) {
            $res['InstanceSource'] = $this->instanceSource;
        }
        if (null !== $this->instanceState) {
            $res['InstanceState'] = $this->instanceState;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['InstanceSource'])) {
            $model->instanceSource = $map['InstanceSource'];
        }
        if (isset($map['InstanceState'])) {
            $model->instanceState = $map['InstanceState'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
