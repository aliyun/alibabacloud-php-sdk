<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsResponseBody\stackGroups\autoDeployment;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupsResponseBody\stackGroups\tags;
use AlibabaCloud\Tea\Model;

class stackGroups extends Model
{
    /**
     * @description Indicates whether automatic deployment is enabled.
     *
     * Valid values:
     *
     *   true: Automatic deployment is enabled. If you add a member to the folder to which the stack group belongs after you enable automatic deployment, ROS automatically adds the stacks in the stack group to the specified region of the member. If you delete the member from the folder, ROS automatically deletes the stacks in the stack group from the specified region of the member.
     *   false: Automatic deployment is disabled. After you disable automatic deployment, the stacks remain unchanged when you change the member in the folder.
     *
     * @var autoDeployment
     */
    public $autoDeployment;

    /**
     * @description The state of the stack group on which the last successful drift detection was performed.
     *
     * Valid values:
     *
     *   DRIFTED: The stack group has drifted.
     *   NOT_CHECKED: No drift detection is performed on the stack group.
     *   IN_SYNC: No drifts are detected on the stack group.
     *
     * @example My Stack Group
     *
     * @var string
     */
    public $description;

    /**
     * @description The description of the stack group.
     *
     * @example 2020-02-27T07:47:47
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @description The information about automatic deployment settings.
     *
     * @example SELF_MANAGED
     *
     * @var string
     */
    public $permissionModel;

    /**
     * @description The permission model.
     *
     * Valid values:
     *
     *   SELF_MANAGED: self-managed permission model
     *   SERVICE_MANAGED: service-managed permission model
     *
     * >  For more information about the permission models of stack groups, see [Overview](~~154578~~).
     * @example rg-acfmzawhxxcj****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The name of the stack group.
     *
     * @example IN_SYNC
     *
     * @var string
     */
    public $stackGroupDriftStatus;

    /**
     * @description The state of the stack group.
     *
     * Valid values:
     *
     *   ACTIVE
     *   DELETED
     *
     * @example fd0ddef9-9540-4b42-a464-94f77835****
     *
     * @var string
     */
    public $stackGroupId;

    /**
     * @description The tags that are added to the stack group.
     *
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description The time when the last successful drift detection was performed on the stack group.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @description The key of the tag that is added to the stack group.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'autoDeployment'        => 'AutoDeployment',
        'description'           => 'Description',
        'driftDetectionTime'    => 'DriftDetectionTime',
        'permissionModel'       => 'PermissionModel',
        'resourceGroupId'       => 'ResourceGroupId',
        'stackGroupDriftStatus' => 'StackGroupDriftStatus',
        'stackGroupId'          => 'StackGroupId',
        'stackGroupName'        => 'StackGroupName',
        'status'                => 'Status',
        'tags'                  => 'Tags',
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

        return $model;
    }
}
