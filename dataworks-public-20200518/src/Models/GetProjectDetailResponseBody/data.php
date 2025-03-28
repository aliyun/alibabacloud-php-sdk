<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectDetailResponseBody\data\tags;

class data extends Model
{
    /**
     * @var string
     */
    public $defaultDiResourceGroupIdentifier;

    /**
     * @var int
     */
    public $developmentType;

    /**
     * @var bool
     */
    public $disableDevelopment;

    /**
     * @var string[]
     */
    public $envTypes;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $isAllowDownload;

    /**
     * @var int
     */
    public $isDefault;

    /**
     * @var string
     */
    public $projectDescription;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectIdentifier;

    /**
     * @var int
     */
    public $projectMode;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectOwnerBaseId;

    /**
     * @var int
     */
    public $protectedMode;

    /**
     * @var string
     */
    public $residentArea;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @var int
     */
    public $schedulerMaxRetryTimes;

    /**
     * @var int
     */
    public $schedulerRetryInterval;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $tablePrivacyMode;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var bool
     */
    public $useProxyOdpsAccount;
    protected $_name = [
        'defaultDiResourceGroupIdentifier' => 'DefaultDiResourceGroupIdentifier',
        'developmentType' => 'DevelopmentType',
        'disableDevelopment' => 'DisableDevelopment',
        'envTypes' => 'EnvTypes',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'isAllowDownload' => 'IsAllowDownload',
        'isDefault' => 'IsDefault',
        'projectDescription' => 'ProjectDescription',
        'projectId' => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
        'projectMode' => 'ProjectMode',
        'projectName' => 'ProjectName',
        'projectOwnerBaseId' => 'ProjectOwnerBaseId',
        'protectedMode' => 'ProtectedMode',
        'residentArea' => 'ResidentArea',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'schedulerMaxRetryTimes' => 'SchedulerMaxRetryTimes',
        'schedulerRetryInterval' => 'SchedulerRetryInterval',
        'status' => 'Status',
        'tablePrivacyMode' => 'TablePrivacyMode',
        'tags' => 'Tags',
        'tenantId' => 'TenantId',
        'useProxyOdpsAccount' => 'UseProxyOdpsAccount',
    ];

    public function validate()
    {
        if (\is_array($this->envTypes)) {
            Model::validateArray($this->envTypes);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->envTypes)) {
                $res['EnvTypes'] = [];
                $n1 = 0;
                foreach ($this->envTypes as $item1) {
                    $res['EnvTypes'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->envTypes = [];
                $n1 = 0;
                foreach ($map['EnvTypes'] as $item1) {
                    $model->envTypes[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
