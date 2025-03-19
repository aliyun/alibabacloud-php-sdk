<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetResourceGroupResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetResourceGroupResponseBody extends Model
{
    /**
     * @example cb2c7bde30b774e46a329c
     *
     * @var string
     */
    public $clusterID;

    /**
     * @example ECS
     *
     * @var string
     */
    public $computingResourceProvider;

    /**
     * @example 1612285282502324
     *
     * @var string
     */
    public $creatorID;

    /**
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @example 2023-06-22T00:00:00Z
     *
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @example 2023-06-22T00:00:00Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example TestResourceGroup
     *
     * @var string
     */
    public $name;

    /**
     * @example 18D5A1C6-14B8-545E-8408-0A7DDB4C6B5E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Ecs
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example Ready
     *
     * @var string
     */
    public $status;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportRDMA;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var UserVpc
     */
    public $userVpc;

    /**
     * @example 35201
     *
     * @var string
     */
    public $workspaceID;
    protected $_name = [
        'clusterID' => 'ClusterID',
        'computingResourceProvider' => 'ComputingResourceProvider',
        'creatorID' => 'CreatorID',
        'description' => 'Description',
        'gmtCreatedTime' => 'GmtCreatedTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'name' => 'Name',
        'requestId' => 'RequestId',
        'resourceType' => 'ResourceType',
        'status' => 'Status',
        'supportRDMA' => 'SupportRDMA',
        'tags' => 'Tags',
        'userVpc' => 'UserVpc',
        'workspaceID' => 'WorkspaceID',
    ];

    public function validate() {}

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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
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
