<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class DescribeParentInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $authStatus;

    /**
     * @var int
     */
    public $checkStatus;

    /**
     * @var string
     */
    public $clusterStatus;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $memberAccount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $resourceType;

    /**
     * @var string
     */
    public $serviceRegionId;
    protected $_name = [
        'authStatus' => 'AuthStatus',
        'checkStatus' => 'CheckStatus',
        'clusterStatus' => 'ClusterStatus',
        'currentPage' => 'CurrentPage',
        'dbName' => 'DbName',
        'engineType' => 'EngineType',
        'instanceId' => 'InstanceId',
        'lang' => 'Lang',
        'memberAccount' => 'MemberAccount',
        'pageSize' => 'PageSize',
        'resourceType' => 'ResourceType',
        'serviceRegionId' => 'ServiceRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->memberAccount) {
            $res['MemberAccount'] = $this->memberAccount;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['MemberAccount'])) {
            $model->memberAccount = $map['MemberAccount'];
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
