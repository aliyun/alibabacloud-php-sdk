<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskCallListResponseBody\model;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description 加微
     *
     * @example 0
     *
     * @var int
     */
    public $addWx;

    /**
     * @description 加微进度
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $addWxStatus;

    /**
     * @description 坐席分机
     *
     * @example 112
     *
     * @var string
     */
    public $agentExtension;

    /**
     * @description 坐席ID
     *
     * @example 87
     *
     * @var int
     */
    public $agentId;

    /**
     * @description 人工通话时长
     *
     * @example 98
     *
     * @var int
     */
    public $agentSpeakingDuration;

    /**
     * @description 人工通话时长
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $agentSpeakingTime;

    /**
     * @description 坐席标签
     *
     * @example A
     *
     * @var string
     */
    public $agentTag;

    /**
     * @description 是否接通重呼
     *
     * @example 24
     *
     * @var int
     */
    public $answerRecall;

    /**
     * @description 接通时间
     *
     * @example 2022-01-26 18:58:25
     *
     * @var string
     */
    public $answerTime;

    /**
     * @description 批次ID
     *
     * @example 1
     *
     * @var string
     */
    public $batchId;

    /**
     * @description 开始通话时间
     *
     * @example 2022-01-26 18:58:25
     *
     * @var string
     */
    public $callBeginTime;

    /**
     * @description 外呼ID
     *
     * @example 9197ed9e-ceda-42a5-b683-823b23ef208e
     *
     * @var string
     */
    public $callId;

    /**
     * @description 呼叫次数
     *
     * @example 1
     *
     * @var string
     */
    public $callTimes;

    /**
     * @description 外呼类型
     *
     * @example 1001
     *
     * @var int
     */
    public $callType;

    /**
     * @description 对话录音
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $chatRecord;

    /**
     * @description 外呼网关
     *
     * @example 123
     *
     * @var string
     */
    public $gateway;

    /**
     * @description 挂断时间
     *
     * @example 2022-01-26 18:58:25
     *
     * @var string
     */
    public $hangupTime;

    /**
     * @description 挂机方式
     *
     * @example 1
     *
     * @var int
     */
    public $hangupType;

    /**
     * @description 导入时间
     *
     * @example 2022-01-26 18:58:25
     *
     * @var string
     */
    public $importTime;

    /**
     * @description 个性标签
     *
     * @example A
     *
     * @var string
     */
    public $individualTag;

    /**
     * @description 意向说明
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $intentDescription;

    /**
     * @description 意向标签
     *
     * @example “C”
     *
     * @var string
     */
    public $intentTag;

    /**
     * @description 拦截原因
     *
     * @example 示例值
     *
     * @var string
     */
    public $interceptReason;

    /**
     * @description 回复关键词
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $keywords;

    /**
     * @description 外呼号码
     *
     * @example 138*****123
     *
     * @var string
     */
    public $number;

    /**
     * @description 外呼号码MD5
     *
     * @example 75916b635568954583783d
     *
     * @var string
     */
    public $numberMD5;

    /**
     * @description 参数
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $properties;

    /**
     * @description 备注
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $remark;

    /**
     * @description 振铃时长
     *
     * @example 66
     *
     * @var int
     */
    public $ringTime;

    /**
     * @description 挂机短信
     *
     * @example 示例值
     *
     * @var string
     */
    public $sms;

    /**
     * @description AI通话时长
     *
     * @example 45
     *
     * @var int
     */
    public $speakingDuration;

    /**
     * @description AI通话时长
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $speakingTime;

    /**
     * @description 对话轮次
     *
     * @example 0
     *
     * @var string
     */
    public $speakingTurns;

    /**
     * @description 外呼状态
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $status;

    /**
     * @description 外呼状态编码
     *
     * @example 1
     *
     * @var int
     */
    public $statusCode;

    /**
     * @description 外呼状态描述
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $statusDescription;

    /**
     * @description 用户自定义标签
     *
     * @example 示例值
     *
     * @var string
     */
    public $tag;

    /**
     * @description 外呼任务ID
     *
     * @example 70
     *
     * @var int
     */
    public $taskId;

    /**
     * @description AI话术ID
     *
     * @example 66
     *
     * @var int
     */
    public $templateId;

    /**
     * @description 转人工状态
     *
     * @example 示例值
     *
     * @var string
     */
    public $transferStatus;

    /**
     * @description 转人工状态编码
     *
     * @example 1
     *
     * @var int
     */
    public $transferStatusCode;
    protected $_name = [
        'addWx'                 => 'AddWx',
        'addWxStatus'           => 'AddWxStatus',
        'agentExtension'        => 'AgentExtension',
        'agentId'               => 'AgentId',
        'agentSpeakingDuration' => 'AgentSpeakingDuration',
        'agentSpeakingTime'     => 'AgentSpeakingTime',
        'agentTag'              => 'AgentTag',
        'answerRecall'          => 'AnswerRecall',
        'answerTime'            => 'AnswerTime',
        'batchId'               => 'BatchId',
        'callBeginTime'         => 'CallBeginTime',
        'callId'                => 'CallId',
        'callTimes'             => 'CallTimes',
        'callType'              => 'CallType',
        'chatRecord'            => 'ChatRecord',
        'gateway'               => 'Gateway',
        'hangupTime'            => 'HangupTime',
        'hangupType'            => 'HangupType',
        'importTime'            => 'ImportTime',
        'individualTag'         => 'IndividualTag',
        'intentDescription'     => 'IntentDescription',
        'intentTag'             => 'IntentTag',
        'interceptReason'       => 'InterceptReason',
        'keywords'              => 'Keywords',
        'number'                => 'Number',
        'numberMD5'             => 'NumberMD5',
        'properties'            => 'Properties',
        'remark'                => 'Remark',
        'ringTime'              => 'RingTime',
        'sms'                   => 'Sms',
        'speakingDuration'      => 'SpeakingDuration',
        'speakingTime'          => 'SpeakingTime',
        'speakingTurns'         => 'SpeakingTurns',
        'status'                => 'Status',
        'statusCode'            => 'StatusCode',
        'statusDescription'     => 'StatusDescription',
        'tag'                   => 'Tag',
        'taskId'                => 'TaskId',
        'templateId'            => 'TemplateId',
        'transferStatus'        => 'TransferStatus',
        'transferStatusCode'    => 'TransferStatusCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addWx) {
            $res['AddWx'] = $this->addWx;
        }
        if (null !== $this->addWxStatus) {
            $res['AddWxStatus'] = $this->addWxStatus;
        }
        if (null !== $this->agentExtension) {
            $res['AgentExtension'] = $this->agentExtension;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->agentSpeakingDuration) {
            $res['AgentSpeakingDuration'] = $this->agentSpeakingDuration;
        }
        if (null !== $this->agentSpeakingTime) {
            $res['AgentSpeakingTime'] = $this->agentSpeakingTime;
        }
        if (null !== $this->agentTag) {
            $res['AgentTag'] = $this->agentTag;
        }
        if (null !== $this->answerRecall) {
            $res['AnswerRecall'] = $this->answerRecall;
        }
        if (null !== $this->answerTime) {
            $res['AnswerTime'] = $this->answerTime;
        }
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }
        if (null !== $this->callBeginTime) {
            $res['CallBeginTime'] = $this->callBeginTime;
        }
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->callTimes) {
            $res['CallTimes'] = $this->callTimes;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->chatRecord) {
            $res['ChatRecord'] = $this->chatRecord;
        }
        if (null !== $this->gateway) {
            $res['Gateway'] = $this->gateway;
        }
        if (null !== $this->hangupTime) {
            $res['HangupTime'] = $this->hangupTime;
        }
        if (null !== $this->hangupType) {
            $res['HangupType'] = $this->hangupType;
        }
        if (null !== $this->importTime) {
            $res['ImportTime'] = $this->importTime;
        }
        if (null !== $this->individualTag) {
            $res['IndividualTag'] = $this->individualTag;
        }
        if (null !== $this->intentDescription) {
            $res['IntentDescription'] = $this->intentDescription;
        }
        if (null !== $this->intentTag) {
            $res['IntentTag'] = $this->intentTag;
        }
        if (null !== $this->interceptReason) {
            $res['InterceptReason'] = $this->interceptReason;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->numberMD5) {
            $res['NumberMD5'] = $this->numberMD5;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->ringTime) {
            $res['RingTime'] = $this->ringTime;
        }
        if (null !== $this->sms) {
            $res['Sms'] = $this->sms;
        }
        if (null !== $this->speakingDuration) {
            $res['SpeakingDuration'] = $this->speakingDuration;
        }
        if (null !== $this->speakingTime) {
            $res['SpeakingTime'] = $this->speakingTime;
        }
        if (null !== $this->speakingTurns) {
            $res['SpeakingTurns'] = $this->speakingTurns;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->statusDescription) {
            $res['StatusDescription'] = $this->statusDescription;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->transferStatus) {
            $res['TransferStatus'] = $this->transferStatus;
        }
        if (null !== $this->transferStatusCode) {
            $res['TransferStatusCode'] = $this->transferStatusCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddWx'])) {
            $model->addWx = $map['AddWx'];
        }
        if (isset($map['AddWxStatus'])) {
            $model->addWxStatus = $map['AddWxStatus'];
        }
        if (isset($map['AgentExtension'])) {
            $model->agentExtension = $map['AgentExtension'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AgentSpeakingDuration'])) {
            $model->agentSpeakingDuration = $map['AgentSpeakingDuration'];
        }
        if (isset($map['AgentSpeakingTime'])) {
            $model->agentSpeakingTime = $map['AgentSpeakingTime'];
        }
        if (isset($map['AgentTag'])) {
            $model->agentTag = $map['AgentTag'];
        }
        if (isset($map['AnswerRecall'])) {
            $model->answerRecall = $map['AnswerRecall'];
        }
        if (isset($map['AnswerTime'])) {
            $model->answerTime = $map['AnswerTime'];
        }
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }
        if (isset($map['CallBeginTime'])) {
            $model->callBeginTime = $map['CallBeginTime'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['CallTimes'])) {
            $model->callTimes = $map['CallTimes'];
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['ChatRecord'])) {
            $model->chatRecord = $map['ChatRecord'];
        }
        if (isset($map['Gateway'])) {
            $model->gateway = $map['Gateway'];
        }
        if (isset($map['HangupTime'])) {
            $model->hangupTime = $map['HangupTime'];
        }
        if (isset($map['HangupType'])) {
            $model->hangupType = $map['HangupType'];
        }
        if (isset($map['ImportTime'])) {
            $model->importTime = $map['ImportTime'];
        }
        if (isset($map['IndividualTag'])) {
            $model->individualTag = $map['IndividualTag'];
        }
        if (isset($map['IntentDescription'])) {
            $model->intentDescription = $map['IntentDescription'];
        }
        if (isset($map['IntentTag'])) {
            $model->intentTag = $map['IntentTag'];
        }
        if (isset($map['InterceptReason'])) {
            $model->interceptReason = $map['InterceptReason'];
        }
        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['NumberMD5'])) {
            $model->numberMD5 = $map['NumberMD5'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RingTime'])) {
            $model->ringTime = $map['RingTime'];
        }
        if (isset($map['Sms'])) {
            $model->sms = $map['Sms'];
        }
        if (isset($map['SpeakingDuration'])) {
            $model->speakingDuration = $map['SpeakingDuration'];
        }
        if (isset($map['SpeakingTime'])) {
            $model->speakingTime = $map['SpeakingTime'];
        }
        if (isset($map['SpeakingTurns'])) {
            $model->speakingTurns = $map['SpeakingTurns'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['StatusDescription'])) {
            $model->statusDescription = $map['StatusDescription'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TransferStatus'])) {
            $model->transferStatus = $map['TransferStatus'];
        }
        if (isset($map['TransferStatusCode'])) {
            $model->transferStatusCode = $map['TransferStatusCode'];
        }

        return $model;
    }
}
