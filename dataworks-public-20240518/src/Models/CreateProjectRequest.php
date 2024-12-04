<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateProjectRequest\aliyunResourceTags;
use AlibabaCloud\Tea\Model;

class CreateProjectRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud resource group to which the workspace belongs. You can log on to the [Resource Management console](https://resourcemanager.console.aliyun.com/resource-groups) and go to the Resource Group page to query the ID.
     *
     * You can configure this parameter to specify an Alibaba Cloud resource group that you want to use to manage the workspace.
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
     * @description The description of the workspace.
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to enable the development environment. Valid values:
     *
     *   true : enables the development environment. In this case, the development environment is isolated from the production environment in the workspace.
     *   false: disables the development environment. In this case, only the production environment is used in the workspace.
     *
     * @example false
     *
     * @var bool
     */
    public $devEnvironmentEnabled;

    /**
     * @description Specifies whether to disable the Develop role. Valid values:
     *
     *   false (default)
     *   true
     *
     * @example true
     *
     * @var bool
     */
    public $devRoleDisabled;

    /**
     * @description The display name of the workspace.
     *
     * This parameter is required.
     * @var string
     */
    public $displayName;

    /**
     * @description The name of the workspace.
     *
     * This parameter is required.
     * @example sora_finance
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether to enable scheduling of Platform for AI (PAI) tasks. Valid values:
     *
     *   true: enables scheduling of PAI tasks. In this case, you can create a PAI node in a DataWorks workspace and configure scheduling properties for the node to implement periodic scheduling of PAI tasks.
     *   false: disables scheduling of PAI tasks.
     *
     * @example true
     *
     * @var bool
     */
    public $paiTaskEnabled;
    protected $_name = [
        'aliyunResourceGroupId' => 'AliyunResourceGroupId',
        'aliyunResourceTags'    => 'AliyunResourceTags',
        'description'           => 'Description',
        'devEnvironmentEnabled' => 'DevEnvironmentEnabled',
        'devRoleDisabled'       => 'DevRoleDisabled',
        'displayName'           => 'DisplayName',
        'name'                  => 'Name',
        'paiTaskEnabled'        => 'PaiTaskEnabled',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->paiTaskEnabled) {
            $res['PaiTaskEnabled'] = $this->paiTaskEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProjectRequest
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PaiTaskEnabled'])) {
            $model->paiTaskEnabled = $map['PaiTaskEnabled'];
        }

        return $model;
    }
}
