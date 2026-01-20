<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ThirdswAicall\V20251127\Models\ReadOutboundTaskCallListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ThirdswAicall\V20251127\Models\ReadOutboundTaskCallListResponseBody\records\dialogueList;

class records extends Model
{
    /**
     * @var string
     */
    public $callEndTime;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $callStartTime;

    /**
     * @var string
     */
    public $callSummary;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $customerName;

    /**
     * @var string
     */
    public $customerPhone;

    /**
     * @var dialogueList[]
     */
    public $dialogueList;

    /**
     * @var string
     */
    public $displayStatus;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $durationText;

    /**
     * @var string
     */
    public $extInfo;

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
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $labelTags;

    /**
     * @var bool
     */
    public $recordDetailReady;

    /**
     * @var string
     */
    public $recordUrl;

    /**
     * @var int
     */
    public $retryCount;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $ttsVoiceCode;

    /**
     * @var string
     */
    public $ttsVoiceDesc;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'callEndTime' => 'CallEndTime',
        'callId' => 'CallId',
        'callStartTime' => 'CallStartTime',
        'callSummary' => 'CallSummary',
        'channel' => 'Channel',
        'customerName' => 'CustomerName',
        'customerPhone' => 'CustomerPhone',
        'dialogueList' => 'DialogueList',
        'displayStatus' => 'DisplayStatus',
        'duration' => 'Duration',
        'durationText' => 'DurationText',
        'extInfo' => 'ExtInfo',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'labelTags' => 'LabelTags',
        'recordDetailReady' => 'RecordDetailReady',
        'recordUrl' => 'RecordUrl',
        'retryCount' => 'RetryCount',
        'sceneId' => 'SceneId',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'tenantId' => 'TenantId',
        'ttsVoiceCode' => 'TtsVoiceCode',
        'ttsVoiceDesc' => 'TtsVoiceDesc',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->dialogueList)) {
            Model::validateArray($this->dialogueList);
        }
        if (\is_array($this->labelTags)) {
            Model::validateArray($this->labelTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callEndTime) {
            $res['CallEndTime'] = $this->callEndTime;
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->callStartTime) {
            $res['CallStartTime'] = $this->callStartTime;
        }

        if (null !== $this->callSummary) {
            $res['CallSummary'] = $this->callSummary;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->customerName) {
            $res['CustomerName'] = $this->customerName;
        }

        if (null !== $this->customerPhone) {
            $res['CustomerPhone'] = $this->customerPhone;
        }

        if (null !== $this->dialogueList) {
            if (\is_array($this->dialogueList)) {
                $res['DialogueList'] = [];
                $n1 = 0;
                foreach ($this->dialogueList as $item1) {
                    $res['DialogueList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->displayStatus) {
            $res['DisplayStatus'] = $this->displayStatus;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->durationText) {
            $res['DurationText'] = $this->durationText;
        }

        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->labelTags) {
            if (\is_array($this->labelTags)) {
                $res['LabelTags'] = [];
                $n1 = 0;
                foreach ($this->labelTags as $item1) {
                    $res['LabelTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->recordDetailReady) {
            $res['RecordDetailReady'] = $this->recordDetailReady;
        }

        if (null !== $this->recordUrl) {
            $res['RecordUrl'] = $this->recordUrl;
        }

        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->ttsVoiceCode) {
            $res['TtsVoiceCode'] = $this->ttsVoiceCode;
        }

        if (null !== $this->ttsVoiceDesc) {
            $res['TtsVoiceDesc'] = $this->ttsVoiceDesc;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['CallEndTime'])) {
            $model->callEndTime = $map['CallEndTime'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['CallStartTime'])) {
            $model->callStartTime = $map['CallStartTime'];
        }

        if (isset($map['CallSummary'])) {
            $model->callSummary = $map['CallSummary'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['CustomerName'])) {
            $model->customerName = $map['CustomerName'];
        }

        if (isset($map['CustomerPhone'])) {
            $model->customerPhone = $map['CustomerPhone'];
        }

        if (isset($map['DialogueList'])) {
            if (!empty($map['DialogueList'])) {
                $model->dialogueList = [];
                $n1 = 0;
                foreach ($map['DialogueList'] as $item1) {
                    $model->dialogueList[$n1] = dialogueList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DisplayStatus'])) {
            $model->displayStatus = $map['DisplayStatus'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['DurationText'])) {
            $model->durationText = $map['DurationText'];
        }

        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LabelTags'])) {
            if (!empty($map['LabelTags'])) {
                $model->labelTags = [];
                $n1 = 0;
                foreach ($map['LabelTags'] as $item1) {
                    $model->labelTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RecordDetailReady'])) {
            $model->recordDetailReady = $map['RecordDetailReady'];
        }

        if (isset($map['RecordUrl'])) {
            $model->recordUrl = $map['RecordUrl'];
        }

        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['TtsVoiceCode'])) {
            $model->ttsVoiceCode = $map['TtsVoiceCode'];
        }

        if (isset($map['TtsVoiceDesc'])) {
            $model->ttsVoiceDesc = $map['TtsVoiceDesc'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
