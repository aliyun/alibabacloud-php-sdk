<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class CreateAnnotationMissionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var int
     */
    public $annotationMissionDataSourceType;

    /**
     * @var string
     */
    public $annotationMissionDebugDataSourceListShrink;

    /**
     * @var string
     */
    public $annotationMissionDebugDataSourceListJsonString;

    /**
     * @var string
     */
    public $annotationMissionName;

    /**
     * @var string
     */
    public $chatbotId;

    /**
     * @var int
     */
    public $conversationTimeEndFilter;

    /**
     * @var int
     */
    public $conversationTimeStartFilter;

    /**
     * @var bool
     */
    public $excludeOtherSession;

    /**
     * @var bool
     */
    public $finished;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $samplingCount;

    /**
     * @var int
     */
    public $samplingRate;

    /**
     * @var int
     */
    public $samplingType;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var int[]
     */
    public $sessionEndReasonFilterList;

    /**
     * @var string
     */
    public $sessionEndReasonFilterListJsonString;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentKey' => 'AgentKey',
        'annotationMissionDataSourceType' => 'AnnotationMissionDataSourceType',
        'annotationMissionDebugDataSourceListShrink' => 'AnnotationMissionDebugDataSourceList',
        'annotationMissionDebugDataSourceListJsonString' => 'AnnotationMissionDebugDataSourceListJsonString',
        'annotationMissionName' => 'AnnotationMissionName',
        'chatbotId' => 'ChatbotId',
        'conversationTimeEndFilter' => 'ConversationTimeEndFilter',
        'conversationTimeStartFilter' => 'ConversationTimeStartFilter',
        'excludeOtherSession' => 'ExcludeOtherSession',
        'finished' => 'Finished',
        'instanceId' => 'InstanceId',
        'samplingCount' => 'SamplingCount',
        'samplingRate' => 'SamplingRate',
        'samplingType' => 'SamplingType',
        'scriptId' => 'ScriptId',
        'sessionEndReasonFilterList' => 'SessionEndReasonFilterList',
        'sessionEndReasonFilterListJsonString' => 'SessionEndReasonFilterListJsonString',
    ];

    public function validate()
    {
        if (\is_array($this->sessionEndReasonFilterList)) {
            Model::validateArray($this->sessionEndReasonFilterList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->annotationMissionDataSourceType) {
            $res['AnnotationMissionDataSourceType'] = $this->annotationMissionDataSourceType;
        }

        if (null !== $this->annotationMissionDebugDataSourceListShrink) {
            $res['AnnotationMissionDebugDataSourceList'] = $this->annotationMissionDebugDataSourceListShrink;
        }

        if (null !== $this->annotationMissionDebugDataSourceListJsonString) {
            $res['AnnotationMissionDebugDataSourceListJsonString'] = $this->annotationMissionDebugDataSourceListJsonString;
        }

        if (null !== $this->annotationMissionName) {
            $res['AnnotationMissionName'] = $this->annotationMissionName;
        }

        if (null !== $this->chatbotId) {
            $res['ChatbotId'] = $this->chatbotId;
        }

        if (null !== $this->conversationTimeEndFilter) {
            $res['ConversationTimeEndFilter'] = $this->conversationTimeEndFilter;
        }

        if (null !== $this->conversationTimeStartFilter) {
            $res['ConversationTimeStartFilter'] = $this->conversationTimeStartFilter;
        }

        if (null !== $this->excludeOtherSession) {
            $res['ExcludeOtherSession'] = $this->excludeOtherSession;
        }

        if (null !== $this->finished) {
            $res['Finished'] = $this->finished;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->samplingCount) {
            $res['SamplingCount'] = $this->samplingCount;
        }

        if (null !== $this->samplingRate) {
            $res['SamplingRate'] = $this->samplingRate;
        }

        if (null !== $this->samplingType) {
            $res['SamplingType'] = $this->samplingType;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->sessionEndReasonFilterList) {
            if (\is_array($this->sessionEndReasonFilterList)) {
                $res['SessionEndReasonFilterList'] = [];
                $n1 = 0;
                foreach ($this->sessionEndReasonFilterList as $item1) {
                    $res['SessionEndReasonFilterList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sessionEndReasonFilterListJsonString) {
            $res['SessionEndReasonFilterListJsonString'] = $this->sessionEndReasonFilterListJsonString;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['AnnotationMissionDataSourceType'])) {
            $model->annotationMissionDataSourceType = $map['AnnotationMissionDataSourceType'];
        }

        if (isset($map['AnnotationMissionDebugDataSourceList'])) {
            $model->annotationMissionDebugDataSourceListShrink = $map['AnnotationMissionDebugDataSourceList'];
        }

        if (isset($map['AnnotationMissionDebugDataSourceListJsonString'])) {
            $model->annotationMissionDebugDataSourceListJsonString = $map['AnnotationMissionDebugDataSourceListJsonString'];
        }

        if (isset($map['AnnotationMissionName'])) {
            $model->annotationMissionName = $map['AnnotationMissionName'];
        }

        if (isset($map['ChatbotId'])) {
            $model->chatbotId = $map['ChatbotId'];
        }

        if (isset($map['ConversationTimeEndFilter'])) {
            $model->conversationTimeEndFilter = $map['ConversationTimeEndFilter'];
        }

        if (isset($map['ConversationTimeStartFilter'])) {
            $model->conversationTimeStartFilter = $map['ConversationTimeStartFilter'];
        }

        if (isset($map['ExcludeOtherSession'])) {
            $model->excludeOtherSession = $map['ExcludeOtherSession'];
        }

        if (isset($map['Finished'])) {
            $model->finished = $map['Finished'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['SamplingCount'])) {
            $model->samplingCount = $map['SamplingCount'];
        }

        if (isset($map['SamplingRate'])) {
            $model->samplingRate = $map['SamplingRate'];
        }

        if (isset($map['SamplingType'])) {
            $model->samplingType = $map['SamplingType'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['SessionEndReasonFilterList'])) {
            if (!empty($map['SessionEndReasonFilterList'])) {
                $model->sessionEndReasonFilterList = [];
                $n1 = 0;
                foreach ($map['SessionEndReasonFilterList'] as $item1) {
                    $model->sessionEndReasonFilterList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SessionEndReasonFilterListJsonString'])) {
            $model->sessionEndReasonFilterListJsonString = $map['SessionEndReasonFilterListJsonString'];
        }

        return $model;
    }
}
