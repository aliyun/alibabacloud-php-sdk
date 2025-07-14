<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionResponseBody\data;

use AlibabaCloud\Tea\Model;

class annotationMissionList extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $annotationMissionDataSourceType;

    /**
     * @var int[]
     */
    public $annotationMissionDebugDataSourceList;

    /**
     * @example ddce607f-f537-4ebd-9914-cf45671defb9
     *
     * @var string
     */
    public $annotationMissionId;

    /**
     * @var string
     */
    public $annotationMissionName;

    /**
     * @example 1
     *
     * @var int
     */
    public $annotationStatus;

    /**
     * @example 1684511999000
     *
     * @var int
     */
    public $conversationTimeEndFilter;

    /**
     * @example 1683216000000
     *
     * @var int
     */
    public $conversationTimeStartFilter;

    /**
     * @example 1676170339515
     *
     * @var int
     */
    public $createTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $excludeOtherMissionSession;

    /**
     * @example 1683443903785
     *
     * @var int
     */
    public $finishTime;

    /**
     * @example 32be9d94-1346-4c4a-a4d0-ccd379f87013
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $samplingCount;

    /**
     * @var string
     */
    public $samplingDescription;

    /**
     * @example 1
     *
     * @var int
     */
    public $samplingRate;

    /**
     * @example 1
     *
     * @var int
     */
    public $samplingType;

    /**
     * @var int[]
     */
    public $sessionEndReasonFilterList;

    /**
     * @example 1
     *
     * @var int
     */
    public $sessionFinishCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $sessionTotalCount;
    protected $_name = [
        'annotationMissionDataSourceType' => 'AnnotationMissionDataSourceType',
        'annotationMissionDebugDataSourceList' => 'AnnotationMissionDebugDataSourceList',
        'annotationMissionId' => 'AnnotationMissionId',
        'annotationMissionName' => 'AnnotationMissionName',
        'annotationStatus' => 'AnnotationStatus',
        'conversationTimeEndFilter' => 'ConversationTimeEndFilter',
        'conversationTimeStartFilter' => 'ConversationTimeStartFilter',
        'createTime' => 'CreateTime',
        'excludeOtherMissionSession' => 'ExcludeOtherMissionSession',
        'finishTime' => 'FinishTime',
        'instanceId' => 'InstanceId',
        'samplingCount' => 'SamplingCount',
        'samplingDescription' => 'SamplingDescription',
        'samplingRate' => 'SamplingRate',
        'samplingType' => 'SamplingType',
        'sessionEndReasonFilterList' => 'SessionEndReasonFilterList',
        'sessionFinishCount' => 'SessionFinishCount',
        'sessionTotalCount' => 'SessionTotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationMissionDataSourceType) {
            $res['AnnotationMissionDataSourceType'] = $this->annotationMissionDataSourceType;
        }
        if (null !== $this->annotationMissionDebugDataSourceList) {
            $res['AnnotationMissionDebugDataSourceList'] = $this->annotationMissionDebugDataSourceList;
        }
        if (null !== $this->annotationMissionId) {
            $res['AnnotationMissionId'] = $this->annotationMissionId;
        }
        if (null !== $this->annotationMissionName) {
            $res['AnnotationMissionName'] = $this->annotationMissionName;
        }
        if (null !== $this->annotationStatus) {
            $res['AnnotationStatus'] = $this->annotationStatus;
        }
        if (null !== $this->conversationTimeEndFilter) {
            $res['ConversationTimeEndFilter'] = $this->conversationTimeEndFilter;
        }
        if (null !== $this->conversationTimeStartFilter) {
            $res['ConversationTimeStartFilter'] = $this->conversationTimeStartFilter;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->excludeOtherMissionSession) {
            $res['ExcludeOtherMissionSession'] = $this->excludeOtherMissionSession;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->samplingCount) {
            $res['SamplingCount'] = $this->samplingCount;
        }
        if (null !== $this->samplingDescription) {
            $res['SamplingDescription'] = $this->samplingDescription;
        }
        if (null !== $this->samplingRate) {
            $res['SamplingRate'] = $this->samplingRate;
        }
        if (null !== $this->samplingType) {
            $res['SamplingType'] = $this->samplingType;
        }
        if (null !== $this->sessionEndReasonFilterList) {
            $res['SessionEndReasonFilterList'] = $this->sessionEndReasonFilterList;
        }
        if (null !== $this->sessionFinishCount) {
            $res['SessionFinishCount'] = $this->sessionFinishCount;
        }
        if (null !== $this->sessionTotalCount) {
            $res['SessionTotalCount'] = $this->sessionTotalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return annotationMissionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationMissionDataSourceType'])) {
            $model->annotationMissionDataSourceType = $map['AnnotationMissionDataSourceType'];
        }
        if (isset($map['AnnotationMissionDebugDataSourceList'])) {
            if (!empty($map['AnnotationMissionDebugDataSourceList'])) {
                $model->annotationMissionDebugDataSourceList = $map['AnnotationMissionDebugDataSourceList'];
            }
        }
        if (isset($map['AnnotationMissionId'])) {
            $model->annotationMissionId = $map['AnnotationMissionId'];
        }
        if (isset($map['AnnotationMissionName'])) {
            $model->annotationMissionName = $map['AnnotationMissionName'];
        }
        if (isset($map['AnnotationStatus'])) {
            $model->annotationStatus = $map['AnnotationStatus'];
        }
        if (isset($map['ConversationTimeEndFilter'])) {
            $model->conversationTimeEndFilter = $map['ConversationTimeEndFilter'];
        }
        if (isset($map['ConversationTimeStartFilter'])) {
            $model->conversationTimeStartFilter = $map['ConversationTimeStartFilter'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExcludeOtherMissionSession'])) {
            $model->excludeOtherMissionSession = $map['ExcludeOtherMissionSession'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SamplingCount'])) {
            $model->samplingCount = $map['SamplingCount'];
        }
        if (isset($map['SamplingDescription'])) {
            $model->samplingDescription = $map['SamplingDescription'];
        }
        if (isset($map['SamplingRate'])) {
            $model->samplingRate = $map['SamplingRate'];
        }
        if (isset($map['SamplingType'])) {
            $model->samplingType = $map['SamplingType'];
        }
        if (isset($map['SessionEndReasonFilterList'])) {
            if (!empty($map['SessionEndReasonFilterList'])) {
                $model->sessionEndReasonFilterList = $map['SessionEndReasonFilterList'];
            }
        }
        if (isset($map['SessionFinishCount'])) {
            $model->sessionFinishCount = $map['SessionFinishCount'];
        }
        if (isset($map['SessionTotalCount'])) {
            $model->sessionTotalCount = $map['SessionTotalCount'];
        }

        return $model;
    }
}
