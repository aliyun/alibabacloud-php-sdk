<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeParentInstanceRequest extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $authStatus;

    /**
     * @example 3
     *
     * @var int
     */
    public $checkStatus;

    /**
     * @example Running
     *
     * @var string
     */
    public $clusterStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example db_test
     *
     * @var string
     */
    public $dbName;

    /**
     * @example MySQL
     *
     * @var string
     */
    public $engineType;

    /**
     * @example rm-azfxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example zh_cn
     *
     * @var string
     */
    public $lang;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 5
     *
     * @var int
     */
    public $resourceType;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $serviceRegionId;
    protected $_name = [
        'authStatus'      => 'AuthStatus',
        'checkStatus'     => 'CheckStatus',
        'clusterStatus'   => 'ClusterStatus',
        'currentPage'     => 'CurrentPage',
        'dbName'          => 'DbName',
        'engineType'      => 'EngineType',
        'instanceId'      => 'InstanceId',
        'lang'            => 'Lang',
        'pageSize'        => 'PageSize',
        'resourceType'    => 'ResourceType',
        'serviceRegionId' => 'ServiceRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authStatus) {
            $res['AuthStatus'] = $this->authStatus;
        }
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->clusterStatus) {
            $res['ClusterStatus'] = $this->clusterStatus;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParentInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthStatus'])) {
            $model->authStatus = $map['AuthStatus'];
        }
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['ClusterStatus'])) {
            $model->clusterStatus = $map['ClusterStatus'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }

        return $model;
    }
}
