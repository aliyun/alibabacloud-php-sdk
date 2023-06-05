<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the workspace is a default workspace. Valid values:
     *
     *   1: The workspace is a default workspace.
     *   0: The workspace is not a default workspace.
     *
     * @example 0
     *
     * @var string
     */
    public $appkey;

    /**
     * @description The time when the workspace was created. Example: Dec 3, 2019 9:12:20 PM.
     *
     * @example false
     *
     * @var bool
     */
    public $baseProject;

    /**
     * @example group_280749521****
     *
     * @var string
     */
    public $defaultDiResourceGroupIdentifier;

    /**
     * @description The unique identifier of the workspace.
     *
     * @example 0
     *
     * @var int
     */
    public $destination;

    /**
     * @description This parameter is deprecated.
     *
     * @example 0
     *
     * @var string
     */
    public $devStorageQuota;

    /**
     * @description The default maximum number of automatic reruns that are allowed after an error occurs.
     *
     * @example 4
     *
     * @var int
     */
    public $developmentType;

    /**
     * @description This parameter is deprecated.
     *
     * @example true
     *
     * @var bool
     */
    public $disableDevelopment;

    /**
     * @description The list of tags.
     *
     * The tags are added to resources in the workspace and used for authentication and cost allocation.
     * @var string[]
     */
    public $envTypes;

    /**
     * @description The environment of the workspace. Valid values: PROD and DEV.
     *
     *   The value PROD indicates the production environment. Workspaces in basic mode provide only the production environment.
     *   The value DEV indicates the development environment. Workspaces in standard mode provide both the development environment and the production environment.
     *
     * @example Oct 10, 2019 3:42:53 PM
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The description of the workspace.
     *
     * @example Dec 3, 2019 9:12:20 PM
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The time when the workspace was last modified. Example: Dec 3, 2019 9:12:20 PM.
     *
     * @example 1
     *
     * @var int
     */
    public $isAllowDownload;

    /**
     * @description The display name of the workspace.
     *
     * @example 1
     *
     * @var int
     */
    public $isDefault;

    /**
     * @description Indicates whether you are allowed to download the query result from DataStudio. Valid values:
     *
     *   1: You are allowed to download the query result from DataStudio.
     *   0: You are not allowed to download the query result from DataStudio.
     *
     * @example 1
     *
     * @var int
     */
    public $maxFlowNode;

    /**
     * @description The development type of the workspace. The value is fixed as 4. This parameter is deprecated.
     *
     * @example 1
     *
     * @var string
     */
    public $prodStorageQuota;

    /**
     * @description Indicates whether the MaxCompute tables in the workspace are visible to the users within a tenant. Valid values:
     *
     *   0: The MaxCompute tables are invisible to the users within a tenant.
     *   1: The MaxCompute tables are visible to the users within a tenant.
     *
     * @example abc
     *
     * @var string
     */
    public $projectDescription;

    /**
     * @description The mode of the workspace. Valid values:
     *
     *   2: The workspace is in basic mode.
     *   3: The workspace is in standard mode.
     *
     * @example 27
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The ID of the Alibaba Cloud account used by the workspace owner.
     *
     * @example abc
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @description This parameter is deprecated.
     *
     * @example 2
     *
     * @var int
     */
    public $projectMode;

    /**
     * @description Indicates whether the Development role is disabled. Valid values:
     *
     *   false: The Development role is enabled.
     *   true: The Development role is disabled.
     *
     * <!---->
     *
     *   Default value: false.
     *
     * @example abc
     *
     * @var string
     */
    public $projectName;

    /**
     * @description Indicates whether a proxy account is used to access the MaxCompute compute engine instance associated with the workspace.
     *
     * @example 18229311****
     *
     * @var string
     */
    public $projectOwnerBaseId;

    /**
     * @description This parameter is deprecated.
     *
     * @example 1
     *
     * @var int
     */
    public $protectedMode;

    /**
     * @example private
     *
     * @var string
     */
    public $residentArea;

    /**
     * @description The keys of the tags that are added to resources in the workspace. The tag keys must meet the following conditions:
     *
     *   The number of tag keys that can be added to resources ranges from 1 to 20.
     *   Each tag key can be a maximum of 128 characters in length.
     *   The tag keys cannot start with acs: or aliyun:.
     *   The tag keys cannot contain http:// or https://.
     *
     * @example rg-acfmzbn7pti3zfa
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The interval between automatic reruns after an error occurs. Unit: milliseconds. The maximum interval is 30 minutes. You must pay attention to the conversion between units.
     *
     * @example 3
     *
     * @var int
     */
    public $schedulerMaxRetryTimes;

    /**
     * @description This parameter is deprecated.
     *
     * @example 120000
     *
     * @var int
     */
    public $schedulerRetryInterval;

    /**
     * @description The ID of the workspace.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description Indicates whether the workspace protection feature is enabled. Valid values:
     *
     *   1: The workspace protection feature is enabled.
     *   0: The workspace protection feature is disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $tablePrivacyMode;

    /**
     * @description The values of the tags that are added to resources in the workspace. The tag values must meet the following conditions:
     *
     *   The number of tag values that can be added to resources ranges from 1 to 20.
     *   Each tag value can be a maximum of 128 characters in length.
     *   The tag values cannot start with acs:.
     *   The tag values cannot contain http:// or https://.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the resource group used in the workspace.
     *
     * @example 280749521
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description The ID of the tenant.
     *
     * @example true
     *
     * @var bool
     */
    public $useProxyOdpsAccount;
    protected $_name = [
        'appkey'                           => 'Appkey',
        'baseProject'                      => 'BaseProject',
        'defaultDiResourceGroupIdentifier' => 'DefaultDiResourceGroupIdentifier',
        'destination'                      => 'Destination',
        'devStorageQuota'                  => 'DevStorageQuota',
        'developmentType'                  => 'DevelopmentType',
        'disableDevelopment'               => 'DisableDevelopment',
        'envTypes'                         => 'EnvTypes',
        'gmtCreate'                        => 'GmtCreate',
        'gmtModified'                      => 'GmtModified',
        'isAllowDownload'                  => 'IsAllowDownload',
        'isDefault'                        => 'IsDefault',
        'maxFlowNode'                      => 'MaxFlowNode',
        'prodStorageQuota'                 => 'ProdStorageQuota',
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
        if (null !== $this->appkey) {
            $res['Appkey'] = $this->appkey;
        }
        if (null !== $this->baseProject) {
            $res['BaseProject'] = $this->baseProject;
        }
        if (null !== $this->defaultDiResourceGroupIdentifier) {
            $res['DefaultDiResourceGroupIdentifier'] = $this->defaultDiResourceGroupIdentifier;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->devStorageQuota) {
            $res['DevStorageQuota'] = $this->devStorageQuota;
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
        if (null !== $this->maxFlowNode) {
            $res['MaxFlowNode'] = $this->maxFlowNode;
        }
        if (null !== $this->prodStorageQuota) {
            $res['ProdStorageQuota'] = $this->prodStorageQuota;
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
        if (isset($map['Appkey'])) {
            $model->appkey = $map['Appkey'];
        }
        if (isset($map['BaseProject'])) {
            $model->baseProject = $map['BaseProject'];
        }
        if (isset($map['DefaultDiResourceGroupIdentifier'])) {
            $model->defaultDiResourceGroupIdentifier = $map['DefaultDiResourceGroupIdentifier'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DevStorageQuota'])) {
            $model->devStorageQuota = $map['DevStorageQuota'];
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
        if (isset($map['MaxFlowNode'])) {
            $model->maxFlowNode = $map['MaxFlowNode'];
        }
        if (isset($map['ProdStorageQuota'])) {
            $model->prodStorageQuota = $map['ProdStorageQuota'];
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
