<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $residentArea;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectIdentifier;

    /**
     * @var string
     */
    public $projectName;

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
    public $projectDescription;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $projectOwnerBaseId;

    /**
     * @var int
     */
    public $developmentType;

    /**
     * @var string
     */
    public $defaultDiResourceGroupIdentifier;

    /**
     * @var string
     */
    public $gmtCreate;

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
    public $tenantId;

    /**
     * @var int
     */
    public $schedulerRetryInterval;

    /**
     * @var string[]
     */
    public $envTypes;
    protected $_name = [
        'status'                           => 'Status',
        'residentArea'                     => 'ResidentArea',
        'projectId'                        => 'ProjectId',
        'projectIdentifier'                => 'ProjectIdentifier',
        'projectName'                      => 'ProjectName',
        'isAllowDownload'                  => 'IsAllowDownload',
        'projectMode'                      => 'ProjectMode',
        'projectDescription'               => 'ProjectDescription',
        'gmtModified'                      => 'GmtModified',
        'projectOwnerBaseId'               => 'ProjectOwnerBaseId',
        'developmentType'                  => 'DevelopmentType',
        'defaultDiResourceGroupIdentifier' => 'DefaultDiResourceGroupIdentifier',
        'gmtCreate'                        => 'GmtCreate',
        'schedulerMaxRetryTimes'           => 'SchedulerMaxRetryTimes',
        'protectedMode'                    => 'ProtectedMode',
        'tenantId'                         => 'TenantId',
        'schedulerRetryInterval'           => 'SchedulerRetryInterval',
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
        if (null !== $this->residentArea) {
            $res['ResidentArea'] = $this->residentArea;
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
        if (null !== $this->isAllowDownload) {
            $res['IsAllowDownload'] = $this->isAllowDownload;
        }
        if (null !== $this->projectMode) {
            $res['ProjectMode'] = $this->projectMode;
        }
        if (null !== $this->projectDescription) {
            $res['ProjectDescription'] = $this->projectDescription;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->projectOwnerBaseId) {
            $res['ProjectOwnerBaseId'] = $this->projectOwnerBaseId;
        }
        if (null !== $this->developmentType) {
            $res['DevelopmentType'] = $this->developmentType;
        }
        if (null !== $this->defaultDiResourceGroupIdentifier) {
            $res['DefaultDiResourceGroupIdentifier'] = $this->defaultDiResourceGroupIdentifier;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->schedulerMaxRetryTimes) {
            $res['SchedulerMaxRetryTimes'] = $this->schedulerMaxRetryTimes;
        }
        if (null !== $this->protectedMode) {
            $res['ProtectedMode'] = $this->protectedMode;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->schedulerRetryInterval) {
            $res['SchedulerRetryInterval'] = $this->schedulerRetryInterval;
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
        if (isset($map['ResidentArea'])) {
            $model->residentArea = $map['ResidentArea'];
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
        if (isset($map['IsAllowDownload'])) {
            $model->isAllowDownload = $map['IsAllowDownload'];
        }
        if (isset($map['ProjectMode'])) {
            $model->projectMode = $map['ProjectMode'];
        }
        if (isset($map['ProjectDescription'])) {
            $model->projectDescription = $map['ProjectDescription'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ProjectOwnerBaseId'])) {
            $model->projectOwnerBaseId = $map['ProjectOwnerBaseId'];
        }
        if (isset($map['DevelopmentType'])) {
            $model->developmentType = $map['DevelopmentType'];
        }
        if (isset($map['DefaultDiResourceGroupIdentifier'])) {
            $model->defaultDiResourceGroupIdentifier = $map['DefaultDiResourceGroupIdentifier'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['SchedulerMaxRetryTimes'])) {
            $model->schedulerMaxRetryTimes = $map['SchedulerMaxRetryTimes'];
        }
        if (isset($map['ProtectedMode'])) {
            $model->protectedMode = $map['ProtectedMode'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['SchedulerRetryInterval'])) {
            $model->schedulerRetryInterval = $map['SchedulerRetryInterval'];
        }
        if (isset($map['EnvTypes'])) {
            if (!empty($map['EnvTypes'])) {
                $model->envTypes = $map['EnvTypes'];
            }
        }

        return $model;
    }
}
