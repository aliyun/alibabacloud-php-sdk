<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectsRequest\aliyunResourceTags;
use AlibabaCloud\Tea\Model;

class ListProjectsRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud resource group to which the workspaces belong. You can log on to the [Resource Management console](https://resourcemanager.console.aliyun.com/resource-groups) and go to the Resource Group page to query the ID.
     *
     * This parameter is used to query the information about workspaces that belong to a specific resource group.
     *
     * @example rg-acfmzbn7pti3zff
     *
     * @var string
     */
    public $aliyunResourceGroupId;

    /**
     * @description The tags.
     *
     * @var aliyunResourceTags[]
     */
    public $aliyunResourceTags;

    /**
     * @description Specifies whether the development environment is enabled. Valid values:
     *
     *   true: The development environment is enabled. In this case, the development environment is isolated from the production environment in a workspace.
     *   false: The development environment is disabled. In this case, only the production environment is used in a workspace.
     *
     * @example true
     *
     * @var bool
     */
    public $devEnvironmentEnabled;

    /**
     * @description Specifies whether the Develop role is disabled. Valid values:
     *
     *   false (default)
     *   true
     *
     * @example false
     *
     * @var bool
     */
    public $devRoleDisabled;

    /**
     * @description The IDs of the DataWorks workspaces.
     *
     * @var int[]
     */
    public $ids;

    /**
     * @description The names of the DataWorks workspaces.
     *
     * @var string[]
     */
    public $names;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether scheduling of Platform for AI (PAI) tasks is enabled. Valid values:
     *
     *   true: Scheduling of PAI tasks is enabled. In this case, you can create a PAI node in a DataWorks workspace and configure scheduling properties for the node to implement periodic scheduling of PAI tasks.
     *   false: Scheduling of PAI tasks is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $paiTaskEnabled;

    /**
     * @description The status of the workspaces. Valid values:
     *
     *   Available
     *   Initializing
     *   InitFailed
     *   Forbidden
     *   Deleting
     *   DeleteFailed
     *   Frozen
     *   Updating
     *   UpdateFailed
     *
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'aliyunResourceGroupId' => 'AliyunResourceGroupId',
        'aliyunResourceTags' => 'AliyunResourceTags',
        'devEnvironmentEnabled' => 'DevEnvironmentEnabled',
        'devRoleDisabled' => 'DevRoleDisabled',
        'ids' => 'Ids',
        'names' => 'Names',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'paiTaskEnabled' => 'PaiTaskEnabled',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunResourceGroupId) {
            $res['AliyunResourceGroupId'] = $this->aliyunResourceGroupId;
        }
        if (null !== $this->aliyunResourceTags) {
            $res['AliyunResourceTags'] = [];
            if (null !== $this->aliyunResourceTags && \is_array($this->aliyunResourceTags)) {
                $n = 0;
                foreach ($this->aliyunResourceTags as $item) {
                    $res['AliyunResourceTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->devEnvironmentEnabled) {
            $res['DevEnvironmentEnabled'] = $this->devEnvironmentEnabled;
        }
        if (null !== $this->devRoleDisabled) {
            $res['DevRoleDisabled'] = $this->devRoleDisabled;
        }
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->paiTaskEnabled) {
            $res['PaiTaskEnabled'] = $this->paiTaskEnabled;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunResourceGroupId'])) {
            $model->aliyunResourceGroupId = $map['AliyunResourceGroupId'];
        }
        if (isset($map['AliyunResourceTags'])) {
            if (!empty($map['AliyunResourceTags'])) {
                $model->aliyunResourceTags = [];
                $n = 0;
                foreach ($map['AliyunResourceTags'] as $item) {
                    $model->aliyunResourceTags[$n++] = null !== $item ? aliyunResourceTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DevEnvironmentEnabled'])) {
            $model->devEnvironmentEnabled = $map['DevEnvironmentEnabled'];
        }
        if (isset($map['DevRoleDisabled'])) {
            $model->devRoleDisabled = $map['DevRoleDisabled'];
        }
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = $map['Ids'];
            }
        }
        if (isset($map['Names'])) {
            if (!empty($map['Names'])) {
                $model->names = $map['Names'];
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PaiTaskEnabled'])) {
            $model->paiTaskEnabled = $map['PaiTaskEnabled'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
