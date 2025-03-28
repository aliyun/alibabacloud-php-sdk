<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsResponseBody\stackGroups\autoDeployment;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsResponseBody\stackGroups\tags;

class stackGroups extends Model
{
    /**
     * @var autoDeployment
     */
    public $autoDeployment;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @var string
     */
    public $permissionModel;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $stackGroupDriftStatus;

    /**
     * @var string
     */
    public $stackGroupId;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'autoDeployment' => 'AutoDeployment',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'driftDetectionTime' => 'DriftDetectionTime',
        'permissionModel' => 'PermissionModel',
        'resourceGroupId' => 'ResourceGroupId',
        'stackGroupDriftStatus' => 'StackGroupDriftStatus',
        'stackGroupId' => 'StackGroupId',
        'stackGroupName' => 'StackGroupName',
        'status' => 'Status',
        'tags' => 'Tags',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->autoDeployment) {
            $this->autoDeployment->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoDeployment) {
            $res['AutoDeployment'] = null !== $this->autoDeployment ? $this->autoDeployment->toArray($noStream) : $this->autoDeployment;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }

        if (null !== $this->permissionModel) {
            $res['PermissionModel'] = $this->permissionModel;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->stackGroupDriftStatus) {
            $res['StackGroupDriftStatus'] = $this->stackGroupDriftStatus;
        }

        if (null !== $this->stackGroupId) {
            $res['StackGroupId'] = $this->stackGroupId;
        }

        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AutoDeployment'])) {
            $model->autoDeployment = autoDeployment::fromMap($map['AutoDeployment']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }

        if (isset($map['PermissionModel'])) {
            $model->permissionModel = $map['PermissionModel'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['StackGroupDriftStatus'])) {
            $model->stackGroupDriftStatus = $map['StackGroupDriftStatus'];
        }

        if (isset($map['StackGroupId'])) {
            $model->stackGroupId = $map['StackGroupId'];
        }

        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
