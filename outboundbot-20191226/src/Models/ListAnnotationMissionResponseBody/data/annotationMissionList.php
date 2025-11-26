<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionResponseBody\data;

use AlibabaCloud\Dara\Model;

class annotationMissionList extends Model
{
    /**
     * @var int
     */
    public $annotationMissionDataSourceType;

    /**
     * @var int[]
     */
    public $annotationMissionDebugDataSourceList;

    /**
     * @var string
     */
    public $annotationMissionId;

    /**
     * @var string
     */
    public $annotationMissionName;

    /**
     * @var int
     */
    public $annotationStatus;

    /**
     * @var int
     */
    public $conversationTimeEndFilter;

    /**
     * @var int
     */
    public $conversationTimeStartFilter;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $excludeOtherMissionSession;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $samplingCount;

    /**
     * @var string
     */
    public $samplingDescription;

    /**
     * @var int
     */
    public $samplingRate;

    /**
     * @var int
     */
    public $samplingType;

    /**
     * @var int[]
     */
    public $sessionEndReasonFilterList;

    /**
     * @var int
     */
    public $sessionFinishCount;

    /**
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

    public function validate()
    {
        if (\is_array($this->annotationMissionDebugDataSourceList)) {
            Model::validateArray($this->annotationMissionDebugDataSourceList);
        }
        if (\is_array($this->sessionEndReasonFilterList)) {
            Model::validateArray($this->sessionEndReasonFilterList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotationMissionDataSourceType) {
            $res['AnnotationMissionDataSourceType'] = $this->annotationMissionDataSourceType;
        }

        if (null !== $this->annotationMissionDebugDataSourceList) {
            if (\is_array($this->annotationMissionDebugDataSourceList)) {
                $res['AnnotationMissionDebugDataSourceList'] = [];
                $n1 = 0;
                foreach ($this->annotationMissionDebugDataSourceList as $item1) {
                    $res['AnnotationMissionDebugDataSourceList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->sessionEndReasonFilterList)) {
                $res['SessionEndReasonFilterList'] = [];
                $n1 = 0;
                foreach ($this->sessionEndReasonFilterList as $item1) {
                    $res['SessionEndReasonFilterList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sessionFinishCount) {
            $res['SessionFinishCount'] = $this->sessionFinishCount;
        }

        if (null !== $this->sessionTotalCount) {
            $res['SessionTotalCount'] = $this->sessionTotalCount;
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
        if (isset($map['AnnotationMissionDataSourceType'])) {
            $model->annotationMissionDataSourceType = $map['AnnotationMissionDataSourceType'];
        }

        if (isset($map['AnnotationMissionDebugDataSourceList'])) {
            if (!empty($map['AnnotationMissionDebugDataSourceList'])) {
                $model->annotationMissionDebugDataSourceList = [];
                $n1 = 0;
                foreach ($map['AnnotationMissionDebugDataSourceList'] as $item1) {
                    $model->annotationMissionDebugDataSourceList[$n1] = $item1;
                    ++$n1;
                }
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
                $model->sessionEndReasonFilterList = [];
                $n1 = 0;
                foreach ($map['SessionEndReasonFilterList'] as $item1) {
                    $model->sessionEndReasonFilterList[$n1] = $item1;
                    ++$n1;
                }
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
