<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeParentInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $auditStatus;
    /**
     * @var int
     */
    public $authStatus;
    /**
     * @var int
     */
    public $authTime;
    /**
     * @var string
     */
    public $clusterStatus;
    /**
     * @var string
     */
    public $connectNode;
    /**
     * @var string
     */
    public $dbNum;
    /**
     * @var string
     */
    public $engineType;
    /**
     * @var string
     */
    public $instanceDescription;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $instanceSize;
    /**
     * @var string
     */
    public $localName;
    /**
     * @var int
     */
    public $memberAccount;
    /**
     * @var string
     */
    public $parentId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceType;
    /**
     * @var string
     */
    public $supportConnectNodes;
    /**
     * @var string
     */
    public $tenantId;
    /**
     * @var string
     */
    public $tenantName;
    /**
     * @var string
     */
    public $unConnectDbCount;
    /**
     * @var string
     */
    public $unSupportOneClickAuthReason;
    protected $_name = [
        'auditStatus'                 => 'AuditStatus',
        'authStatus'                  => 'AuthStatus',
        'authTime'                    => 'AuthTime',
        'clusterStatus'               => 'ClusterStatus',
        'connectNode'                 => 'ConnectNode',
        'dbNum'                       => 'DbNum',
        'engineType'                  => 'EngineType',
        'instanceDescription'         => 'InstanceDescription',
        'instanceId'                  => 'InstanceId',
        'instanceSize'                => 'InstanceSize',
        'localName'                   => 'LocalName',
        'memberAccount'               => 'MemberAccount',
        'parentId'                    => 'ParentId',
        'regionId'                    => 'RegionId',
        'resourceType'                => 'ResourceType',
        'supportConnectNodes'         => 'SupportConnectNodes',
        'tenantId'                    => 'TenantId',
        'tenantName'                  => 'TenantName',
        'unConnectDbCount'            => 'UnConnectDbCount',
        'unSupportOneClickAuthReason' => 'UnSupportOneClickAuthReason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }

        if (null !== $this->authStatus) {
            $res['AuthStatus'] = $this->authStatus;
        }

        if (null !== $this->authTime) {
            $res['AuthTime'] = $this->authTime;
        }

        if (null !== $this->clusterStatus) {
            $res['ClusterStatus'] = $this->clusterStatus;
        }

        if (null !== $this->connectNode) {
            $res['ConnectNode'] = $this->connectNode;
        }

        if (null !== $this->dbNum) {
            $res['DbNum'] = $this->dbNum;
        }

        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceSize) {
            $res['InstanceSize'] = $this->instanceSize;
        }

        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }

        if (null !== $this->memberAccount) {
            $res['MemberAccount'] = $this->memberAccount;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->supportConnectNodes) {
            $res['SupportConnectNodes'] = $this->supportConnectNodes;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }

        if (null !== $this->unConnectDbCount) {
            $res['UnConnectDbCount'] = $this->unConnectDbCount;
        }

        if (null !== $this->unSupportOneClickAuthReason) {
            $res['UnSupportOneClickAuthReason'] = $this->unSupportOneClickAuthReason;
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
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }

        if (isset($map['AuthStatus'])) {
            $model->authStatus = $map['AuthStatus'];
        }

        if (isset($map['AuthTime'])) {
            $model->authTime = $map['AuthTime'];
        }

        if (isset($map['ClusterStatus'])) {
            $model->clusterStatus = $map['ClusterStatus'];
        }

        if (isset($map['ConnectNode'])) {
            $model->connectNode = $map['ConnectNode'];
        }

        if (isset($map['DbNum'])) {
            $model->dbNum = $map['DbNum'];
        }

        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceSize'])) {
            $model->instanceSize = $map['InstanceSize'];
        }

        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }

        if (isset($map['MemberAccount'])) {
            $model->memberAccount = $map['MemberAccount'];
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SupportConnectNodes'])) {
            $model->supportConnectNodes = $map['SupportConnectNodes'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }

        if (isset($map['UnConnectDbCount'])) {
            $model->unConnectDbCount = $map['UnConnectDbCount'];
        }

        if (isset($map['UnSupportOneClickAuthReason'])) {
            $model->unSupportOneClickAuthReason = $map['UnSupportOneClickAuthReason'];
        }

        return $model;
    }
}
