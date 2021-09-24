<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectDetailResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $defaultDiResourceGroupIdentifier;

    /**
     * @var int
     */
    public $isAllowDownload;

    /**
     * @var int
     */
    public $schedulerRetryInterval;

    /**
     * @var string
     */
    public $residentArea;

    /**
     * @var string
     */
    public $projectOwnerBaseId;

    /**
     * @var int
     */
    public $projectMode;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $protectedMode;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $projectDescription;

    /**
     * @var int
     */
    public $schedulerMaxRetryTimes;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectIdentifier;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $developmentType;

    /**
     * @var string[]
     */
    public $envTypes;
    protected $_name = [
        'gmtModified'                      => 'GmtModified',
        'defaultDiResourceGroupIdentifier' => 'DefaultDiResourceGroupIdentifier',
        'isAllowDownload'                  => 'IsAllowDownload',
        'schedulerRetryInterval'           => 'SchedulerRetryInterval',
        'residentArea'                     => 'ResidentArea',
        'projectOwnerBaseId'               => 'ProjectOwnerBaseId',
        'projectMode'                      => 'ProjectMode',
        'gmtCreate'                        => 'GmtCreate',
        'protectedMode'                    => 'ProtectedMode',
        'tenantId'                         => 'TenantId',
        'projectDescription'               => 'ProjectDescription',
        'schedulerMaxRetryTimes'           => 'SchedulerMaxRetryTimes',
        'projectName'                      => 'ProjectName',
        'projectIdentifier'                => 'ProjectIdentifier',
        'projectId'                        => 'ProjectId',
        'status'                           => 'Status',
        'developmentType'                  => 'DevelopmentType',
        'envTypes'                         => 'EnvTypes',
    ];

    public function validate()
    {
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('defaultDiResourceGroupIdentifier', $this->defaultDiResourceGroupIdentifier, true);
        Model::validateRequired('isAllowDownload', $this->isAllowDownload, true);
        Model::validateRequired('schedulerRetryInterval', $this->schedulerRetryInterval, true);
        Model::validateRequired('residentArea', $this->residentArea, true);
        Model::validateRequired('projectOwnerBaseId', $this->projectOwnerBaseId, true);
        Model::validateRequired('projectMode', $this->projectMode, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('protectedMode', $this->protectedMode, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('projectDescription', $this->projectDescription, true);
        Model::validateRequired('schedulerMaxRetryTimes', $this->schedulerMaxRetryTimes, true);
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('projectIdentifier', $this->projectIdentifier, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('developmentType', $this->developmentType, true);
        Model::validateRequired('envTypes', $this->envTypes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->defaultDiResourceGroupIdentifier) {
            $res['DefaultDiResourceGroupIdentifier'] = $this->defaultDiResourceGroupIdentifier;
        }
        if (null !== $this->isAllowDownload) {
            $res['IsAllowDownload'] = $this->isAllowDownload;
        }
        if (null !== $this->schedulerRetryInterval) {
            $res['SchedulerRetryInterval'] = $this->schedulerRetryInterval;
        }
        if (null !== $this->residentArea) {
            $res['ResidentArea'] = $this->residentArea;
        }
        if (null !== $this->projectOwnerBaseId) {
            $res['ProjectOwnerBaseId'] = $this->projectOwnerBaseId;
        }
        if (null !== $this->projectMode) {
            $res['ProjectMode'] = $this->projectMode;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->protectedMode) {
            $res['ProtectedMode'] = $this->protectedMode;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->projectDescription) {
            $res['ProjectDescription'] = $this->projectDescription;
        }
        if (null !== $this->schedulerMaxRetryTimes) {
            $res['SchedulerMaxRetryTimes'] = $this->schedulerMaxRetryTimes;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->developmentType) {
            $res['DevelopmentType'] = $this->developmentType;
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
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['DefaultDiResourceGroupIdentifier'])) {
            $model->defaultDiResourceGroupIdentifier = $map['DefaultDiResourceGroupIdentifier'];
        }
        if (isset($map['IsAllowDownload'])) {
            $model->isAllowDownload = $map['IsAllowDownload'];
        }
        if (isset($map['SchedulerRetryInterval'])) {
            $model->schedulerRetryInterval = $map['SchedulerRetryInterval'];
        }
        if (isset($map['ResidentArea'])) {
            $model->residentArea = $map['ResidentArea'];
        }
        if (isset($map['ProjectOwnerBaseId'])) {
            $model->projectOwnerBaseId = $map['ProjectOwnerBaseId'];
        }
        if (isset($map['ProjectMode'])) {
            $model->projectMode = $map['ProjectMode'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['ProtectedMode'])) {
            $model->protectedMode = $map['ProtectedMode'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['ProjectDescription'])) {
            $model->projectDescription = $map['ProjectDescription'];
        }
        if (isset($map['SchedulerMaxRetryTimes'])) {
            $model->schedulerMaxRetryTimes = $map['SchedulerMaxRetryTimes'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DevelopmentType'])) {
            $model->developmentType = $map['DevelopmentType'];
        }
        if (isset($map['EnvTypes'])) {
            if (!empty($map['EnvTypes'])) {
                $model->envTypes = $map['EnvTypes'];
            }
        }

        return $model;
    }
}
