<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $appkey;

    /**
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
     * @example 0
     *
     * @var int
     */
    public $destination;

    /**
     * @example 0
     *
     * @var string
     */
    public $devStorageQuota;

    /**
     * @example 4
     *
     * @var int
     */
    public $developmentType;

    /**
     * @example true
     *
     * @var bool
     */
    public $disableDevelopment;

    /**
     * @var string[]
     */
    public $envTypes;

    /**
     * @example Oct 10, 2019 3:42:53 PM
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example Dec 3, 2019 9:12:20 PM
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1
     *
     * @var int
     */
    public $isAllowDownload;

    /**
     * @example 1
     *
     * @var int
     */
    public $isDefault;

    /**
     * @example 1
     *
     * @var int
     */
    public $maxFlowNode;

    /**
     * @example 1
     *
     * @var string
     */
    public $prodStorageQuota;

    /**
     * @example abc
     *
     * @var string
     */
    public $projectDescription;

    /**
     * @example 27
     *
     * @var int
     */
    public $projectId;

    /**
     * @example abc
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @example 2
     *
     * @var int
     */
    public $projectMode;

    /**
     * @example abc
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 18229311****
     *
     * @var string
     */
    public $projectOwnerBaseId;

    /**
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
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @example 3
     *
     * @var int
     */
    public $schedulerMaxRetryTimes;

    /**
     * @example 120000
     *
     * @var int
     */
    public $schedulerRetryInterval;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $tablePrivacyMode;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example 280749521
     *
     * @var int
     */
    public $tenantId;

    /**
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
