<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectCreateOneAPPResponseBody\buildStatusInfo;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectCreateOneAPPResponseBody\functionStatusInfo;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectCreateOneAPPResponseBody\latestPipelineUsageInstance;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectCreateOneAPPResponseBody\note;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectCreateOneAPPResponseBody\publishStatusInfo;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectCreateOneAPPResponseBody\uploadStatusInfo;
use AlibabaCloud\Tea\Model;

class ProjectCreateOneAPPResponseBody extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var buildStatusInfo
     */
    public $buildStatusInfo;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @var functionStatusInfo
     */
    public $functionStatusInfo;

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
     * @var latestPipelineUsageInstance
     */
    public $latestPipelineUsageInstance;

    /**
     * @var string
     */
    public $modelConfirmedTime;

    /**
     * @var note
     */
    public $note;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $projectGroupId;

    /**
     * @var string
     */
    public $projectSource;

    /**
     * @var string
     */
    public $projectStatus;

    /**
     * @var publishStatusInfo
     */
    public $publishStatusInfo;

    /**
     * @var string
     */
    public $recentBuildTime;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var uploadStatusInfo
     */
    public $uploadStatusInfo;
    protected $_name = [
        'bizType'                     => 'BizType',
        'buildStatusInfo'             => 'BuildStatusInfo',
        'displayName'                 => 'DisplayName',
        'extInfo'                     => 'ExtInfo',
        'functionStatusInfo'          => 'FunctionStatusInfo',
        'gmtCreate'                   => 'GmtCreate',
        'gmtModified'                 => 'GmtModified',
        'highmodelAssignedTime'       => 'HighmodelAssignedTime',
        'id'                          => 'Id',
        'isvAssignedTime'             => 'IsvAssignedTime',
        'latestPipelineUsageInstance' => 'LatestPipelineUsageInstance',
        'modelConfirmedTime'          => 'ModelConfirmedTime',
        'note'                        => 'Note',
        'orderId'                     => 'OrderId',
        'projectGroupId'              => 'ProjectGroupId',
        'projectSource'               => 'ProjectSource',
        'projectStatus'               => 'ProjectStatus',
        'publishStatusInfo'           => 'PublishStatusInfo',
        'recentBuildTime'             => 'RecentBuildTime',
        'requestId'                   => 'RequestId',
        'uploadStatusInfo'            => 'UploadStatusInfo',
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
        if (null !== $this->buildStatusInfo) {
            $res['BuildStatusInfo'] = null !== $this->buildStatusInfo ? $this->buildStatusInfo->toMap() : null;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->functionStatusInfo) {
            $res['FunctionStatusInfo'] = null !== $this->functionStatusInfo ? $this->functionStatusInfo->toMap() : null;
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
        if (null !== $this->latestPipelineUsageInstance) {
            $res['LatestPipelineUsageInstance'] = null !== $this->latestPipelineUsageInstance ? $this->latestPipelineUsageInstance->toMap() : null;
        }
        if (null !== $this->modelConfirmedTime) {
            $res['ModelConfirmedTime'] = $this->modelConfirmedTime;
        }
        if (null !== $this->note) {
            $res['Note'] = null !== $this->note ? $this->note->toMap() : null;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->projectGroupId) {
            $res['ProjectGroupId'] = $this->projectGroupId;
        }
        if (null !== $this->projectSource) {
            $res['ProjectSource'] = $this->projectSource;
        }
        if (null !== $this->projectStatus) {
            $res['ProjectStatus'] = $this->projectStatus;
        }
        if (null !== $this->publishStatusInfo) {
            $res['PublishStatusInfo'] = null !== $this->publishStatusInfo ? $this->publishStatusInfo->toMap() : null;
        }
        if (null !== $this->recentBuildTime) {
            $res['RecentBuildTime'] = $this->recentBuildTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uploadStatusInfo) {
            $res['UploadStatusInfo'] = null !== $this->uploadStatusInfo ? $this->uploadStatusInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProjectCreateOneAPPResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BuildStatusInfo'])) {
            $model->buildStatusInfo = buildStatusInfo::fromMap($map['BuildStatusInfo']);
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['FunctionStatusInfo'])) {
            $model->functionStatusInfo = functionStatusInfo::fromMap($map['FunctionStatusInfo']);
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
        if (isset($map['LatestPipelineUsageInstance'])) {
            $model->latestPipelineUsageInstance = latestPipelineUsageInstance::fromMap($map['LatestPipelineUsageInstance']);
        }
        if (isset($map['ModelConfirmedTime'])) {
            $model->modelConfirmedTime = $map['ModelConfirmedTime'];
        }
        if (isset($map['Note'])) {
            $model->note = note::fromMap($map['Note']);
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['ProjectGroupId'])) {
            $model->projectGroupId = $map['ProjectGroupId'];
        }
        if (isset($map['ProjectSource'])) {
            $model->projectSource = $map['ProjectSource'];
        }
        if (isset($map['ProjectStatus'])) {
            $model->projectStatus = $map['ProjectStatus'];
        }
        if (isset($map['PublishStatusInfo'])) {
            $model->publishStatusInfo = publishStatusInfo::fromMap($map['PublishStatusInfo']);
        }
        if (isset($map['RecentBuildTime'])) {
            $model->recentBuildTime = $map['RecentBuildTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UploadStatusInfo'])) {
            $model->uploadStatusInfo = uploadStatusInfo::fromMap($map['UploadStatusInfo']);
        }

        return $model;
    }
}
