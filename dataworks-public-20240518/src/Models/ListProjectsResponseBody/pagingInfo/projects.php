<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectsResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectsResponseBody\pagingInfo\projects\aliyunResourceTags;
use AlibabaCloud\Tea\Model;

class projects extends Model
{
    /**
     * @description The ID of the Alibaba Cloud resource group to which the workspace belongs.
     *
     * @example rg-acfmzbn7pti3zfa
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
     * @description The description of the workspace.
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the development environment is enabled. Valid values:
     *
     *   true: The development environment is enabled. In this case, the development environment is isolated from the production environment in the workspace.
     *   false: The development environment is disabled. In this case, only the production environment is used in the workspace.
     *
     * @example true
     *
     * @var bool
     */
    public $devEnvironmentEnabled;

    /**
     * @description Indicates whether the Develop role is disabled. Valid values:
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
     * @description The display name of the workspace.
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The workspace ID.
     *
     * @example 123456
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the workspace.
     *
     * @example sora_finance
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the Alibaba Cloud account to which the workspace belongs.
     *
     * @example 123532153125
     *
     * @var string
     */
    public $owner;

    /**
     * @description Indicates whether scheduling of PAI tasks is enabled. Valid values:
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
     * @description The status of the workspace. Valid values:
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
        'aliyunResourceTags'    => 'AliyunResourceTags',
        'description'           => 'Description',
        'devEnvironmentEnabled' => 'DevEnvironmentEnabled',
        'devRoleDisabled'       => 'DevRoleDisabled',
        'displayName'           => 'DisplayName',
        'id'                    => 'Id',
        'name'                  => 'Name',
        'owner'                 => 'Owner',
        'paiTaskEnabled'        => 'PaiTaskEnabled',
        'status'                => 'Status',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->devEnvironmentEnabled) {
            $res['DevEnvironmentEnabled'] = $this->devEnvironmentEnabled;
        }
        if (null !== $this->devRoleDisabled) {
            $res['DevRoleDisabled'] = $this->devRoleDisabled;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
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
     * @return projects
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
                $n                         = 0;
                foreach ($map['AliyunResourceTags'] as $item) {
                    $model->aliyunResourceTags[$n++] = null !== $item ? aliyunResourceTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DevEnvironmentEnabled'])) {
            $model->devEnvironmentEnabled = $map['DevEnvironmentEnabled'];
        }
        if (isset($map['DevRoleDisabled'])) {
            $model->devRoleDisabled = $map['DevRoleDisabled'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
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
