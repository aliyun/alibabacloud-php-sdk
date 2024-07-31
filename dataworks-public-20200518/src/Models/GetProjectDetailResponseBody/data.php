<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectDetailResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectDetailResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The identifier of the shared resource group for Data Integration on which nodes are run.
     *
     * @example group_280749521****
     *
     * @var string
     */
    public $defaultDiResourceGroupIdentifier;

    /**
     * @description The development type of the workspace. The value is fixed to 4.
     *
     * @example 4
     *
     * @var int
     */
    public $developmentType;

    /**
     * @description Indicates whether the Develop role is disabled. Valid values:
     *
     *   **false** (default)
     *   **true**
     *
     * @example true
     *
     * @var bool
     */
    public $disableDevelopment;

    /**
     * @description The environments of workspaces in different modes. Workspaces in basic mode provide only the production environment. Workspaces in standard mode provide both the development environment and the production environment.
     *
     * @var string[]
     */
    public $envTypes;

    /**
     * @description The time when the workspace was created.
     *
     * @example Oct 10, 2019 3:42:53 PM
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the workspace was last modified.
     *
     * @example Dec 3, 2019 9:12:20 PM
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Indicates whether the download operation is allowed.
     *
     * @example 1
     *
     * @var int
     */
    public $isAllowDownload;

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
     * @example abc
     *
     * @var string
     */
    public $projectDescription;

    /**
     * @description The workspace ID.
     *
     * @example 27
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The unique identifier of the workspace.
     *
     * @example abc
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @description The mode of the workspace. The value 2 indicates that the workspace is in basic mode. The value 3 indicates that the workspace is in standard mode.
     *
     * @example 1
     *
     * @var int
     */
    public $projectMode;

    /**
     * @description The display name of the workspace.
     *
     * @example abc
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The ID of the Alibaba Cloud account used by the workspace owner.
     *
     * @example 18229311****
     *
     * @var string
     */
    public $projectOwnerBaseId;

    /**
     * @description Indicates whether the workspace protection feature is enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $protectedMode;

    /**
     * @description The type of the workspace. Valid values: private and swap.
     *
     * @example private
     *
     * @var string
     */
    public $residentArea;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmzbn7pti3zfa
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The default maximum number of automatic reruns that are allowed after an error occurs.
     *
     * @example 3
     *
     * @var int
     */
    public $schedulerMaxRetryTimes;

    /**
     * @description The interval between automatic reruns after an error occurs.
     *
     * @example 120000
     *
     * @var int
     */
    public $schedulerRetryInterval;

    /**
     * @description The status of the workspace.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description Indicates whether the MaxCompute tables in the workspace are visible to the users within a tenant. Valid values:
     *
     *   0: The MaxCompute tables in the workspace are not visible to the users within a tenant.
     *   1: The MaxCompute tables in the workspace are visible to the users within a tenant.
     *
     * @example 1
     *
     * @var int
     */
    public $tablePrivacyMode;

    /**
     * @description The tag information.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The tenant ID.
     *
     * @example 280749521950784
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description Indicates whether a proxy account is used to access the MaxCompute compute engine.
     *
     * @example true
     *
     * @var bool
     */
    public $useProxyOdpsAccount;
    protected $_name = [
        'defaultDiResourceGroupIdentifier' => 'DefaultDiResourceGroupIdentifier',
        'developmentType'                  => 'DevelopmentType',
        'disableDevelopment'               => 'DisableDevelopment',
        'envTypes'                         => 'EnvTypes',
        'gmtCreate'                        => 'GmtCreate',
        'gmtModified'                      => 'GmtModified',
        'isAllowDownload'                  => 'IsAllowDownload',
        'isDefault'                        => 'IsDefault',
        'projectDescription'               => 'ProjectDescription',
        'projectId'                        => 'ProjectId',
        'projectIdentifier'                => 'ProjectIdentifier',
        'projectMode'                      => 'ProjectMode',
        'projectName'                      => 'ProjectName',
        'projectOwnerBaseId'               => 'ProjectOwnerBaseId',
        'protectedMode'                    => 'ProtectedMode',
        'residentArea'                     => 'ResidentArea',
        'resourceManagerResourceGroupId'   => 'ResourceManagerResourceGroupId',
        'schedulerMaxRetryTimes'           => 'SchedulerMaxRetryTimes',
        'schedulerRetryInterval'           => 'SchedulerRetryInterval',
        'status'                           => 'Status',
        'tablePrivacyMode'                 => 'TablePrivacyMode',
        'tags'                             => 'Tags',
        'tenantId'                         => 'TenantId',
        'useProxyOdpsAccount'              => 'UseProxyOdpsAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultDiResourceGroupIdentifier) {
            $res['DefaultDiResourceGroupIdentifier'] = $this->defaultDiResourceGroupIdentifier;
        }
        if (null !== $this->developmentType) {
            $res['DevelopmentType'] = $this->developmentType;
        }
        if (null !== $this->disableDevelopment) {
            $res['DisableDevelopment'] = $this->disableDevelopment;
        }
        if (null !== $this->envTypes) {
            $res['EnvTypes'] = $this->envTypes;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->isAllowDownload) {
            $res['IsAllowDownload'] = $this->isAllowDownload;
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
        if (null !== $this->projectMode) {
            $res['ProjectMode'] = $this->projectMode;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectOwnerBaseId) {
            $res['ProjectOwnerBaseId'] = $this->projectOwnerBaseId;
        }
        if (null !== $this->protectedMode) {
            $res['ProtectedMode'] = $this->protectedMode;
        }
        if (null !== $this->residentArea) {
            $res['ResidentArea'] = $this->residentArea;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->schedulerMaxRetryTimes) {
            $res['SchedulerMaxRetryTimes'] = $this->schedulerMaxRetryTimes;
        }
        if (null !== $this->schedulerRetryInterval) {
            $res['SchedulerRetryInterval'] = $this->schedulerRetryInterval;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->useProxyOdpsAccount) {
            $res['UseProxyOdpsAccount'] = $this->useProxyOdpsAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultDiResourceGroupIdentifier'])) {
            $model->defaultDiResourceGroupIdentifier = $map['DefaultDiResourceGroupIdentifier'];
        }
        if (isset($map['DevelopmentType'])) {
            $model->developmentType = $map['DevelopmentType'];
        }
        if (isset($map['DisableDevelopment'])) {
            $model->disableDevelopment = $map['DisableDevelopment'];
        }
        if (isset($map['EnvTypes'])) {
            if (!empty($map['EnvTypes'])) {
                $model->envTypes = $map['EnvTypes'];
            }
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['IsAllowDownload'])) {
            $model->isAllowDownload = $map['IsAllowDownload'];
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
        if (isset($map['ProjectMode'])) {
            $model->projectMode = $map['ProjectMode'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectOwnerBaseId'])) {
            $model->projectOwnerBaseId = $map['ProjectOwnerBaseId'];
        }
        if (isset($map['ProtectedMode'])) {
            $model->protectedMode = $map['ProtectedMode'];
        }
        if (isset($map['ResidentArea'])) {
            $model->residentArea = $map['ResidentArea'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['SchedulerMaxRetryTimes'])) {
            $model->schedulerMaxRetryTimes = $map['SchedulerMaxRetryTimes'];
        }
        if (isset($map['SchedulerRetryInterval'])) {
            $model->schedulerRetryInterval = $map['SchedulerRetryInterval'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UseProxyOdpsAccount'])) {
            $model->useProxyOdpsAccount = $map['UseProxyOdpsAccount'];
        }

        return $model;
    }
}
