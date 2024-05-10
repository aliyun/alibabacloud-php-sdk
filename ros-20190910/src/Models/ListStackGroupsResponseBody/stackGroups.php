<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsResponseBody\stackGroups\autoDeployment;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsResponseBody\stackGroups\tags;
use AlibabaCloud\Tea\Model;

class stackGroups extends Model
{
    /**
     * @description The information about automatic deployment settings.
     *
     * @var autoDeployment
     */
    public $autoDeployment;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the stack group.
     *
     * @example My Stack Group
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the most recent successful drift detection was performed on the stack group.
     *
     * @example 2020-02-27T07:47:47
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @description The permission model of the stack group.
     *
     * Valid values:
     *
     *   SELF_MANAGED
     *   SERVICE_MANAGED
     *
     * > For more information about the permission models of stack groups, see [Overview](https://help.aliyun.com/document_detail/154578.html).
     * @example SELF_MANAGED
     *
     * @var string
     */
    public $permissionModel;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmzawhxxcj****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The drift state of the stack group on which the most recent successful drift detection was performed.
     *
     * Valid values:
     *
     *   DRIFTED: The stack group has drifted.
     *   NOT_CHECKED: No drift detection is performed on the stack group.
     *   IN_SYNC: No drifts are detected on the stack group.
     *
     * @example IN_SYNC
     *
     * @var string
     */
    public $stackGroupDriftStatus;

    /**
     * @description The ID of the stack group.
     *
     * @example fd0ddef9-9540-4b42-a464-94f77835****
     *
     * @var string
     */
    public $stackGroupId;

    /**
     * @description The name of the stack group.
     *
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description The state of the stack group.
     *
     * Valid values:
     *
     *   ACTIVE
     *   DELETED
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags that are added to the stack group.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'autoDeployment'        => 'AutoDeployment',
        'createTime'            => 'CreateTime',
        'description'           => 'Description',
        'driftDetectionTime'    => 'DriftDetectionTime',
        'permissionModel'       => 'PermissionModel',
        'resourceGroupId'       => 'ResourceGroupId',
        'stackGroupDriftStatus' => 'StackGroupDriftStatus',
        'stackGroupId'          => 'StackGroupId',
        'stackGroupName'        => 'StackGroupName',
        'status'                => 'Status',
        'tags'                  => 'Tags',
        'updateTime'            => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoDeployment) {
            $res['AutoDeployment'] = null !== $this->autoDeployment ? $this->autoDeployment->toMap() : null;
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
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackGroups
     */
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
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
