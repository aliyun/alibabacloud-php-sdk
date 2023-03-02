<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsResponseBody\pageResult;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsResponseBody\pageResult\projectList\tags;
use AlibabaCloud\Tea\Model;

class projectList extends Model
{
    /**
     * @description Indicates whether the Development role is disabled. Valid values:
     *
     *   false: enabled
     *   true: disabled
     *   Default value: false
     *
     * @example true
     *
     * @var bool
     */
    public $disableDevelopment;

    /**
     * @description Indicates whether the workspace is a default workspace. Valid values:
     *
     *   1: The workspace is a default workspace.
     *   0: The workspace is not a default workspace.
     *
     * @example 1
     *
     * @var int
     */
    public $isDefault;

    /**
     * @description The description of the workspace.
     *
     * @var string
     */
    public $projectDescription;

    /**
     * @description The ID of the workspace.
     *
     * @example 1212
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The identifier of the workspace.
     *
     * @example test
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @description The name of the workspace.
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The ID of the user used by the workspace owner.
     *
     * @example 122222
     *
     * @var string
     */
    public $projectOwnerBaseId;

    /**
     * @description The status of the workspace. Valid values:
     *
     *   0: AVAILABLE, which indicates that the workspace is running as expected.
     *   1: DELETED, which indicates that the workspace is deleted.
     *   2: INITIALIZING, which indicates that the workspace is being initialized.
     *   3: INIT_FAILED, which indicates that the workspace fails to be initialized.
     *   4: FORBIDDEN, which indicates that the workspace is manually disabled.
     *   5: DELETING, which indicates that the workspace is being deleted.
     *   6: DEL_FAILED, which indicates that the workspace fails to be deleted.
     *   7: FROZEN, which indicates that the workspace is frozen due to overdue payments.
     *   8: UPDATING, which indicates that the workspace is being updated. After you associate a compute engine with the workspace, the system initializes compute engine and updates the workspace.
     *   9: UPDATE_FAILED, which indicates that the workspace fails to be updated.
     *
     * @example 0
     *
     * @var int
     */
    public $projectStatus;

    /**
     * @description The status code of the workspace. Valid values:
     *
     *   AVAILABLE: 0, which indicates that the workspace is running as expected.
     *   DELETED: 1, which indicates that the workspace is deleted.
     *   INITIALIZING: 2, which indicates that the workspace is being initialized.
     *   INIT_FAILED: 3, which indicates that the workspace fails to be initialized.
     *   FORBIDDEN: 4, which indicates that the workspace is manually disabled.
     *   DELETING: 5, which indicates that the workspace is being deleted.
     *   DEL_FAILED: 6, which indicates that the workspace fails to be deleted.
     *   FROZEN: 7, which indicates that the workspace is frozen due to overdue payments.
     *   UPDATING: 8, which indicates that the workspace is being updated. After you associate a compute engine with the workspace, the system initializes compute engine and updates the workspace.
     *   UPDATE_FAILED: 9, which indicates that the workspace fails to be updated.
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $projectStatusCode;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmzbn7pti3zfa
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description Indicates whether the MaxCompute tables in the workspace are visible to the users within a tenant. Valid values:
     *
     *   0: invisible
     *   1: visible
     *
     * @example 1
     *
     * @var int
     */
    public $tablePrivacyMode;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description Indicates whether a proxy account is used to access the MaxCompute compute engine associated with the workspace.
     *
     * @example true
     *
     * @var bool
     */
    public $useProxyOdpsAccount;
    protected $_name = [
        'disableDevelopment'             => 'DisableDevelopment',
        'isDefault'                      => 'IsDefault',
        'projectDescription'             => 'ProjectDescription',
        'projectId'                      => 'ProjectId',
        'projectIdentifier'              => 'ProjectIdentifier',
        'projectName'                    => 'ProjectName',
        'projectOwnerBaseId'             => 'ProjectOwnerBaseId',
        'projectStatus'                  => 'ProjectStatus',
        'projectStatusCode'              => 'ProjectStatusCode',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'tablePrivacyMode'               => 'TablePrivacyMode',
        'tags'                           => 'Tags',
        'useProxyOdpsAccount'            => 'UseProxyOdpsAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableDevelopment) {
            $res['DisableDevelopment'] = $this->disableDevelopment;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->projectDescription) {
            $res['ProjectDescription'] = $this->projectDescription;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectOwnerBaseId) {
            $res['ProjectOwnerBaseId'] = $this->projectOwnerBaseId;
        }
        if (null !== $this->projectStatus) {
            $res['ProjectStatus'] = $this->projectStatus;
        }
        if (null !== $this->projectStatusCode) {
            $res['ProjectStatusCode'] = $this->projectStatusCode;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->tablePrivacyMode) {
            $res['TablePrivacyMode'] = $this->tablePrivacyMode;
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
        if (null !== $this->useProxyOdpsAccount) {
            $res['UseProxyOdpsAccount'] = $this->useProxyOdpsAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisableDevelopment'])) {
            $model->disableDevelopment = $map['DisableDevelopment'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['ProjectDescription'])) {
            $model->projectDescription = $map['ProjectDescription'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectOwnerBaseId'])) {
            $model->projectOwnerBaseId = $map['ProjectOwnerBaseId'];
        }
        if (isset($map['ProjectStatus'])) {
            $model->projectStatus = $map['ProjectStatus'];
        }
        if (isset($map['ProjectStatusCode'])) {
            $model->projectStatusCode = $map['ProjectStatusCode'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['TablePrivacyMode'])) {
            $model->tablePrivacyMode = $map['TablePrivacyMode'];
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
        if (isset($map['UseProxyOdpsAccount'])) {
            $model->useProxyOdpsAccount = $map['UseProxyOdpsAccount'];
        }

        return $model;
    }
}
