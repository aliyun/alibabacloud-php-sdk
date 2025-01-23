<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetResourceGroupResponseBody\tags;

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
    public $description;
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
     * @var tags[]
     */
    public $tags;
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
        'description'               => 'Description',
        'gmtCreatedTime'            => 'GmtCreatedTime',
        'gmtModifiedTime'           => 'GmtModifiedTime',
        'name'                      => 'Name',
        'requestId'                 => 'RequestId',
        'resourceType'              => 'ResourceType',
        'status'                    => 'Status',
        'supportRDMA'               => 'SupportRDMA',
        'tags'                      => 'Tags',
        'userVpc'                   => 'UserVpc',
        'workspaceID'               => 'WorkspaceID',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->userVpc) {
            $this->userVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toArray($noStream) : $this->userVpc;
        }

        if (null !== $this->workspaceID) {
            $res['WorkspaceID'] = $this->workspaceID;
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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
