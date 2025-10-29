<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryConversationDetailInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryConversationDetailInfoResponseBody\data\outputTags;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryConversationDetailInfoResponseBody\data\variables;

class data extends Model
{
    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $callResult;

    /**
     * @var string
     */
    public $calledPhone;

    /**
     * @var string
     */
    public $callerPhone;

    /**
     * @var string
     */
    public $conversationRecord;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $failedReason;

    /**
     * @var string
     */
    public $hangupDirection;

    /**
     * @var string
     */
    public $majorIntent;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var outputTags[]
     */
    public $outputTags;

    /**
     * @var int
     */
    public $pickUpTime;

    /**
     * @var string
     */
    public $recordingFileDownloadUrl;

    /**
     * @var int
     */
    public $releaseTime;

    /**
     * @var int
     */
    public $startCallTime;

    /**
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $statusMsg;

    /**
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'callId' => 'CallId',
        'callResult' => 'CallResult',
        'calledPhone' => 'CalledPhone',
        'callerPhone' => 'CallerPhone',
        'conversationRecord' => 'ConversationRecord',
        'duration' => 'Duration',
        'failedReason' => 'FailedReason',
        'hangupDirection' => 'HangupDirection',
        'majorIntent' => 'MajorIntent',
        'outId' => 'OutId',
        'outputTags' => 'OutputTags',
        'pickUpTime' => 'PickUpTime',
        'recordingFileDownloadUrl' => 'RecordingFileDownloadUrl',
        'releaseTime' => 'ReleaseTime',
        'startCallTime' => 'StartCallTime',
        'statusCode' => 'StatusCode',
        'statusMsg' => 'StatusMsg',
        'variables' => 'Variables',
    ];

    public function validate()
    {
        if (\is_array($this->outputTags)) {
            Model::validateArray($this->outputTags);
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->callResult) {
            $res['CallResult'] = $this->callResult;
        }

        if (null !== $this->calledPhone) {
            $res['CalledPhone'] = $this->calledPhone;
        }

        if (null !== $this->callerPhone) {
            $res['CallerPhone'] = $this->callerPhone;
        }

        if (null !== $this->conversationRecord) {
            $res['ConversationRecord'] = $this->conversationRecord;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->failedReason) {
            $res['FailedReason'] = $this->failedReason;
        }

        if (null !== $this->hangupDirection) {
            $res['HangupDirection'] = $this->hangupDirection;
        }

        if (null !== $this->majorIntent) {
            $res['MajorIntent'] = $this->majorIntent;
        }

        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }

        if (null !== $this->outputTags) {
            if (\is_array($this->outputTags)) {
                $res['OutputTags'] = [];
                $n1 = 0;
                foreach ($this->outputTags as $item1) {
                    $res['OutputTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pickUpTime) {
            $res['PickUpTime'] = $this->pickUpTime;
        }

        if (null !== $this->recordingFileDownloadUrl) {
            $res['RecordingFileDownloadUrl'] = $this->recordingFileDownloadUrl;
        }

        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }

        if (null !== $this->startCallTime) {
            $res['StartCallTime'] = $this->startCallTime;
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        if (null !== $this->statusMsg) {
            $res['StatusMsg'] = $this->statusMsg;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['Variables'] = [];
                $n1 = 0;
                foreach ($this->variables as $item1) {
                    $res['Variables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['CallResult'])) {
            $model->callResult = $map['CallResult'];
        }

        if (isset($map['CalledPhone'])) {
            $model->calledPhone = $map['CalledPhone'];
        }

        if (isset($map['CallerPhone'])) {
            $model->callerPhone = $map['CallerPhone'];
        }

        if (isset($map['ConversationRecord'])) {
            $model->conversationRecord = $map['ConversationRecord'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['FailedReason'])) {
            $model->failedReason = $map['FailedReason'];
        }

        if (isset($map['HangupDirection'])) {
            $model->hangupDirection = $map['HangupDirection'];
        }

        if (isset($map['MajorIntent'])) {
            $model->majorIntent = $map['MajorIntent'];
        }

        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        if (isset($map['OutputTags'])) {
            if (!empty($map['OutputTags'])) {
                $model->outputTags = [];
                $n1 = 0;
                foreach ($map['OutputTags'] as $item1) {
                    $model->outputTags[$n1] = outputTags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PickUpTime'])) {
            $model->pickUpTime = $map['PickUpTime'];
        }

        if (isset($map['RecordingFileDownloadUrl'])) {
            $model->recordingFileDownloadUrl = $map['RecordingFileDownloadUrl'];
        }

        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }

        if (isset($map['StartCallTime'])) {
            $model->startCallTime = $map['StartCallTime'];
        }

        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        if (isset($map['StatusMsg'])) {
            $model->statusMsg = $map['StatusMsg'];
        }

        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                $n1 = 0;
                foreach ($map['Variables'] as $item1) {
                    $model->variables[$n1] = variables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
