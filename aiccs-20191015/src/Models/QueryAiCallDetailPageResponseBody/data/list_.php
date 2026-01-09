<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiCallDetailPageResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $batchId;

    /**
     * @var string
     */
    public $callResult;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var int
     */
    public $callingTime;

    /**
     * @var int
     */
    public $conversationDuration;

    /**
     * @var string
     */
    public $conversationRecord;

    /**
     * @var int
     */
    public $conversationTurnCount;

    /**
     * @var string
     */
    public $detailId;

    /**
     * @var string
     */
    public $failedReason;

    /**
     * @var int
     */
    public $importedTime;

    /**
     * @var string
     */
    public $majorIntent;

    /**
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var string
     */
    public $recordingFilePath;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'batchId' => 'BatchId',
        'callResult' => 'CallResult',
        'calledNumber' => 'CalledNumber',
        'callingTime' => 'CallingTime',
        'conversationDuration' => 'ConversationDuration',
        'conversationRecord' => 'ConversationRecord',
        'conversationTurnCount' => 'ConversationTurnCount',
        'detailId' => 'DetailId',
        'failedReason' => 'FailedReason',
        'importedTime' => 'ImportedTime',
        'majorIntent' => 'MajorIntent',
        'options' => 'Options',
        'outId' => 'OutId',
        'recordingFilePath' => 'RecordingFilePath',
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        if (null !== $this->callResult) {
            $res['CallResult'] = $this->callResult;
        }

        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->callingTime) {
            $res['CallingTime'] = $this->callingTime;
        }

        if (null !== $this->conversationDuration) {
            $res['ConversationDuration'] = $this->conversationDuration;
        }

        if (null !== $this->conversationRecord) {
            $res['ConversationRecord'] = $this->conversationRecord;
        }

        if (null !== $this->conversationTurnCount) {
            $res['ConversationTurnCount'] = $this->conversationTurnCount;
        }

        if (null !== $this->detailId) {
            $res['DetailId'] = $this->detailId;
        }

        if (null !== $this->failedReason) {
            $res['FailedReason'] = $this->failedReason;
        }

        if (null !== $this->importedTime) {
            $res['ImportedTime'] = $this->importedTime;
        }

        if (null !== $this->majorIntent) {
            $res['MajorIntent'] = $this->majorIntent;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }

        if (null !== $this->recordingFilePath) {
            $res['RecordingFilePath'] = $this->recordingFilePath;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        if (isset($map['CallResult'])) {
            $model->callResult = $map['CallResult'];
        }

        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['CallingTime'])) {
            $model->callingTime = $map['CallingTime'];
        }

        if (isset($map['ConversationDuration'])) {
            $model->conversationDuration = $map['ConversationDuration'];
        }

        if (isset($map['ConversationRecord'])) {
            $model->conversationRecord = $map['ConversationRecord'];
        }

        if (isset($map['ConversationTurnCount'])) {
            $model->conversationTurnCount = $map['ConversationTurnCount'];
        }

        if (isset($map['DetailId'])) {
            $model->detailId = $map['DetailId'];
        }

        if (isset($map['FailedReason'])) {
            $model->failedReason = $map['FailedReason'];
        }

        if (isset($map['ImportedTime'])) {
            $model->importedTime = $map['ImportedTime'];
        }

        if (isset($map['MajorIntent'])) {
            $model->majorIntent = $map['MajorIntent'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        if (isset($map['RecordingFilePath'])) {
            $model->recordingFilePath = $map['RecordingFilePath'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
