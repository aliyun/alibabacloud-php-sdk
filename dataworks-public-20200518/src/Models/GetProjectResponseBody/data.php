<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $maxFlowNode;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $isAllowDownload;

    /**
     * @var int
     */
    public $projectMode;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $prodStorageQuota;

    /**
     * @var string
     */
    public $projectDescription;

    /**
     * @var int
     */
    public $developmentType;

    /**
     * @var int
     */
    public $tablePrivacyMode;

    /**
     * @var string
     */
    public $defaultDiResourceGroupIdentifier;

    /**
     * @var int
     */
    public $schedulerMaxRetryTimes;

    /**
     * @var int
     */
    public $protectedMode;

    /**
     * @var int
     */
    public $schedulerRetryInterval;

    /**
     * @var string
     */
    public $appkey;

    /**
     * @var string
     */
    public $devStorageQuota;

    /**
     * @var string
     */
    public $residentArea;

    /**
     * @var int
     */
    public $isDefault;

    /**
     * @var int
     */
    public $destination;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectIdentifier;

    /**
     * @var bool
     */
    public $disableDevelopment;

    /**
     * @var string
     */
    public $projectOwnerBaseId;

    /**
     * @var bool
     */
    public $baseProject;

    /**
     * @var bool
     */
    public $useProxyOdpsAccount;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string[]
     */
    public $envTypes;
    protected $_name = [
        'status'                           => 'Status',
        'maxFlowNode'                      => 'MaxFlowNode',
        'projectId'                        => 'ProjectId',
        'isAllowDownload'                  => 'IsAllowDownload',
        'projectMode'                      => 'ProjectMode',
        'gmtModified'                      => 'GmtModified',
        'prodStorageQuota'                 => 'ProdStorageQuota',
        'projectDescription'               => 'ProjectDescription',
        'developmentType'                  => 'DevelopmentType',
        'tablePrivacyMode'                 => 'TablePrivacyMode',
        'defaultDiResourceGroupIdentifier' => 'DefaultDiResourceGroupIdentifier',
        'schedulerMaxRetryTimes'           => 'SchedulerMaxRetryTimes',
        'protectedMode'                    => 'ProtectedMode',
        'schedulerRetryInterval'           => 'SchedulerRetryInterval',
        'appkey'                           => 'Appkey',
        'devStorageQuota'                  => 'DevStorageQuota',
        'residentArea'                     => 'ResidentArea',
        'isDefault'                        => 'IsDefault',
        'destination'                      => 'Destination',
        'projectName'                      => 'ProjectName',
        'projectIdentifier'                => 'ProjectIdentifier',
        'disableDevelopment'               => 'DisableDevelopment',
        'projectOwnerBaseId'               => 'ProjectOwnerBaseId',
        'baseProject'                      => 'BaseProject',
        'useProxyOdpsAccount'              => 'UseProxyOdpsAccount',
        'gmtCreate'                        => 'GmtCreate',
        'tenantId'                         => 'TenantId',
        'envTypes'                         => 'EnvTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->maxFlowNode) {
            $res['MaxFlowNode'] = $this->maxFlowNode;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->isAllowDownload) {
            $res['IsAllowDownload'] = $this->isAllowDownload;
        }
        if (null !== $this->projectMode) {
            $res['ProjectMode'] = $this->projectMode;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->prodStorageQuota) {
            $res['ProdStorageQuota'] = $this->prodStorageQuota;
        }
        if (null !== $this->projectDescription) {
            $res['ProjectDescription'] = $this->projectDescription;
        }
        if (null !== $this->developmentType) {
            $res['DevelopmentType'] = $this->developmentType;
        }
        if (null !== $this->tablePrivacyMode) {
            $res['TablePrivacyMode'] = $this->tablePrivacyMode;
        }
        if (null !== $this->defaultDiResourceGroupIdentifier) {
            $res['DefaultDiResourceGroupIdentifier'] = $this->defaultDiResourceGroupIdentifier;
        }
        if (null !== $this->schedulerMaxRetryTimes) {
            $res['SchedulerMaxRetryTimes'] = $this->schedulerMaxRetryTimes;
        }
        if (null !== $this->protectedMode) {
            $res['ProtectedMode'] = $this->protectedMode;
        }
        if (null !== $this->schedulerRetryInterval) {
            $res['SchedulerRetryInterval'] = $this->schedulerRetryInterval;
        }
        if (null !== $this->appkey) {
            $res['Appkey'] = $this->appkey;
        }
        if (null !== $this->devStorageQuota) {
            $res['DevStorageQuota'] = $this->devStorageQuota;
        }
        if (null !== $this->residentArea) {
            $res['ResidentArea'] = $this->residentArea;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->disableDevelopment) {
            $res['DisableDevelopment'] = $this->disableDevelopment;
        }
        if (null !== $this->projectOwnerBaseId) {
            $res['ProjectOwnerBaseId'] = $this->projectOwnerBaseId;
        }
        if (null !== $this->baseProject) {
            $res['BaseProject'] = $this->baseProject;
        }
        if (null !== $this->useProxyOdpsAccount) {
            $res['UseProxyOdpsAccount'] = $this->useProxyOdpsAccount;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->envTypes) {
            $res['EnvTypes'] = $this->envTypes;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['MaxFlowNode'])) {
            $model->maxFlowNode = $map['MaxFlowNode'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['IsAllowDownload'])) {
            $model->isAllowDownload = $map['IsAllowDownload'];
        }
        if (isset($map['ProjectMode'])) {
            $model->projectMode = $map['ProjectMode'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ProdStorageQuota'])) {
            $model->prodStorageQuota = $map['ProdStorageQuota'];
        }
        if (isset($map['ProjectDescription'])) {
            $model->projectDescription = $map['ProjectDescription'];
        }
        if (isset($map['DevelopmentType'])) {
            $model->developmentType = $map['DevelopmentType'];
        }
        if (isset($map['TablePrivacyMode'])) {
            $model->tablePrivacyMode = $map['TablePrivacyMode'];
        }
        if (isset($map['DefaultDiResourceGroupIdentifier'])) {
            $model->defaultDiResourceGroupIdentifier = $map['DefaultDiResourceGroupIdentifier'];
        }
        if (isset($map['SchedulerMaxRetryTimes'])) {
            $model->schedulerMaxRetryTimes = $map['SchedulerMaxRetryTimes'];
        }
        if (isset($map['ProtectedMode'])) {
            $model->protectedMode = $map['ProtectedMode'];
        }
        if (isset($map['SchedulerRetryInterval'])) {
            $model->schedulerRetryInterval = $map['SchedulerRetryInterval'];
        }
        if (isset($map['Appkey'])) {
            $model->appkey = $map['Appkey'];
        }
        if (isset($map['DevStorageQuota'])) {
            $model->devStorageQuota = $map['DevStorageQuota'];
        }
        if (isset($map['ResidentArea'])) {
            $model->residentArea = $map['ResidentArea'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['DisableDevelopment'])) {
            $model->disableDevelopment = $map['DisableDevelopment'];
        }
        if (isset($map['ProjectOwnerBaseId'])) {
            $model->projectOwnerBaseId = $map['ProjectOwnerBaseId'];
        }
        if (isset($map['BaseProject'])) {
            $model->baseProject = $map['BaseProject'];
        }
        if (isset($map['UseProxyOdpsAccount'])) {
            $model->useProxyOdpsAccount = $map['UseProxyOdpsAccount'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['EnvTypes'])) {
            if (!empty($map['EnvTypes'])) {
                $model->envTypes = $map['EnvTypes'];
            }
        }

        return $model;
    }
}
