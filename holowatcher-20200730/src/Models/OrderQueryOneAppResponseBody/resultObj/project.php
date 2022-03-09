<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderQueryOneAppResponseBody\resultObj;

use AlibabaCloud\Tea\Model;

class project extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $buildStatus;

    /**
     * @var int
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @var string
     */
    public $functionStatus;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $highmodelAssignedTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $isvAssignedTime;

    /**
     * @var mixed[]
     */
    public $latestPipelineUsageInstanceStatus;

    /**
     * @var string
     */
    public $modelConfirmedTime;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $projectDescription;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectStatus;

    /**
     * @var string
     */
    public $publishStatus;

    /**
     * @var string
     */
    public $recentBuildTime;

    /**
     * @var string
     */
    public $recentPublishTime;

    /**
     * @var string
     */
    public $uploadStatus;
    protected $_name = [
        'bizType'                           => 'BizType',
        'buildStatus'                       => 'BuildStatus',
        'creatorId'                         => 'CreatorId',
        'creatorName'                       => 'CreatorName',
        'extInfo'                           => 'ExtInfo',
        'functionStatus'                    => 'FunctionStatus',
        'gmtCreate'                         => 'GmtCreate',
        'gmtModified'                       => 'GmtModified',
        'highmodelAssignedTime'             => 'HighmodelAssignedTime',
        'id'                                => 'Id',
        'isvAssignedTime'                   => 'IsvAssignedTime',
        'latestPipelineUsageInstanceStatus' => 'LatestPipelineUsageInstanceStatus',
        'modelConfirmedTime'                => 'ModelConfirmedTime',
        'orderId'                           => 'OrderId',
        'projectDescription'                => 'ProjectDescription',
        'projectName'                       => 'ProjectName',
        'projectStatus'                     => 'ProjectStatus',
        'publishStatus'                     => 'PublishStatus',
        'recentBuildTime'                   => 'RecentBuildTime',
        'recentPublishTime'                 => 'RecentPublishTime',
        'uploadStatus'                      => 'UploadStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->buildStatus) {
            $res['BuildStatus'] = $this->buildStatus;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->functionStatus) {
            $res['FunctionStatus'] = $this->functionStatus;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->highmodelAssignedTime) {
            $res['HighmodelAssignedTime'] = $this->highmodelAssignedTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isvAssignedTime) {
            $res['IsvAssignedTime'] = $this->isvAssignedTime;
        }
        if (null !== $this->latestPipelineUsageInstanceStatus) {
            $res['LatestPipelineUsageInstanceStatus'] = $this->latestPipelineUsageInstanceStatus;
        }
        if (null !== $this->modelConfirmedTime) {
            $res['ModelConfirmedTime'] = $this->modelConfirmedTime;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->projectDescription) {
            $res['ProjectDescription'] = $this->projectDescription;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectStatus) {
            $res['ProjectStatus'] = $this->projectStatus;
        }
        if (null !== $this->publishStatus) {
            $res['PublishStatus'] = $this->publishStatus;
        }
        if (null !== $this->recentBuildTime) {
            $res['RecentBuildTime'] = $this->recentBuildTime;
        }
        if (null !== $this->recentPublishTime) {
            $res['RecentPublishTime'] = $this->recentPublishTime;
        }
        if (null !== $this->uploadStatus) {
            $res['UploadStatus'] = $this->uploadStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return project
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BuildStatus'])) {
            $model->buildStatus = $map['BuildStatus'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['FunctionStatus'])) {
            $model->functionStatus = $map['FunctionStatus'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HighmodelAssignedTime'])) {
            $model->highmodelAssignedTime = $map['HighmodelAssignedTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsvAssignedTime'])) {
            $model->isvAssignedTime = $map['IsvAssignedTime'];
        }
        if (isset($map['LatestPipelineUsageInstanceStatus'])) {
            $model->latestPipelineUsageInstanceStatus = $map['LatestPipelineUsageInstanceStatus'];
        }
        if (isset($map['ModelConfirmedTime'])) {
            $model->modelConfirmedTime = $map['ModelConfirmedTime'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['ProjectDescription'])) {
            $model->projectDescription = $map['ProjectDescription'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectStatus'])) {
            $model->projectStatus = $map['ProjectStatus'];
        }
        if (isset($map['PublishStatus'])) {
            $model->publishStatus = $map['PublishStatus'];
        }
        if (isset($map['RecentBuildTime'])) {
            $model->recentBuildTime = $map['RecentBuildTime'];
        }
        if (isset($map['RecentPublishTime'])) {
            $model->recentPublishTime = $map['RecentPublishTime'];
        }
        if (isset($map['UploadStatus'])) {
            $model->uploadStatus = $map['UploadStatus'];
        }

        return $model;
    }
}
