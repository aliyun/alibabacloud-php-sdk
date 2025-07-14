<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CreateAnnotationMissionShrinkRequest extends Model
{
    /**
     * @example 1168702
     *
     * @var string
     */
    public $agentId;

    /**
     * @example 9137ab9c27044921860030adf8590ec4_p_outbound_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 1
     *
     * @var int
     */
    public $annotationMissionDataSourceType;

    /**
     * @var string
     */
    public $annotationMissionDebugDataSourceListShrink;

    /**
     * @example [1]
     *
     * @var string
     */
    public $annotationMissionDebugDataSourceListJsonString;

    /**
     * @var string
     */
    public $annotationMissionName;

    /**
     * @example chatbot-cn-fqEnFZBYnb
     *
     * @var string
     */
    public $chatbotId;

    /**
     * @example 1682956800000
     *
     * @var int
     */
    public $conversationTimeEndFilter;

    /**
     * @example 1683302400000
     *
     * @var int
     */
    public $conversationTimeStartFilter;

    /**
     * @example true
     *
     * @var bool
     */
    public $excludeOtherSession;

    /**
     * @example True
     *
     * @var bool
     */
    public $finished;

    /**
     * @example bf3b51a5-e88a-4636-98b0-1a34725a085b
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
     * @example 6236f21e-2e04-4dad-a47b-ae77e6a48325
     *
     * @var string
     */
    public $scriptId;

    /**
     * @var int[]
     */
    public $sessionEndReasonFilterList;

    /**
     * @example [1]
     *
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

    public function validate() {}

    public function toMap()
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
            $res['SessionEndReasonFilterList'] = $this->sessionEndReasonFilterList;
        }
        if (null !== $this->sessionEndReasonFilterListJsonString) {
            $res['SessionEndReasonFilterListJsonString'] = $this->sessionEndReasonFilterListJsonString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAnnotationMissionShrinkRequest
     */
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
                $model->sessionEndReasonFilterList = $map['SessionEndReasonFilterList'];
            }
        }
        if (isset($map['SessionEndReasonFilterListJsonString'])) {
            $model->sessionEndReasonFilterListJsonString = $map['SessionEndReasonFilterListJsonString'];
        }

        return $model;
    }
}
