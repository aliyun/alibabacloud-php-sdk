<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetResourceGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterID;

    /**
     * @var string
     */
    public $computingResourceProvider;

    /**
     * @var string
     */
    public $creatorID;

    /**
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $supportRDMA;

    /**
     * @var UserVpc
     */
    public $userVpc;

    /**
     * @var string
     */
    public $workspaceID;
    protected $_name = [
        'clusterID'                 => 'ClusterID',
        'computingResourceProvider' => 'ComputingResourceProvider',
        'creatorID'                 => 'CreatorID',
        'gmtCreatedTime'            => 'GmtCreatedTime',
        'gmtModifiedTime'           => 'GmtModifiedTime',
        'name'                      => 'Name',
        'requestId'                 => 'RequestId',
        'resourceType'              => 'ResourceType',
        'status'                    => 'Status',
        'supportRDMA'               => 'SupportRDMA',
        'userVpc'                   => 'UserVpc',
        'workspaceID'               => 'WorkspaceID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterID) {
            $res['ClusterID'] = $this->clusterID;
        }
        if (null !== $this->computingResourceProvider) {
            $res['ComputingResourceProvider'] = $this->computingResourceProvider;
        }
        if (null !== $this->creatorID) {
            $res['CreatorID'] = $this->creatorID;
        }
        if (null !== $this->gmtCreatedTime) {
            $res['GmtCreatedTime'] = $this->gmtCreatedTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportRDMA) {
            $res['SupportRDMA'] = $this->supportRDMA;
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
        }
        if (null !== $this->workspaceID) {
            $res['WorkspaceID'] = $this->workspaceID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterID'])) {
            $model->clusterID = $map['ClusterID'];
        }
        if (isset($map['ComputingResourceProvider'])) {
            $model->computingResourceProvider = $map['ComputingResourceProvider'];
        }
        if (isset($map['CreatorID'])) {
            $model->creatorID = $map['CreatorID'];
        }
        if (isset($map['GmtCreatedTime'])) {
            $model->gmtCreatedTime = $map['GmtCreatedTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportRDMA'])) {
            $model->supportRDMA = $map['SupportRDMA'];
        }
        if (isset($map['UserVpc'])) {
            $model->userVpc = UserVpc::fromMap($map['UserVpc']);
        }
        if (isset($map['WorkspaceID'])) {
            $model->workspaceID = $map['WorkspaceID'];
        }

        return $model;
    }
}
