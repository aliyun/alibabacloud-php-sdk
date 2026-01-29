<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\CallNumberDetailResponseBody;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var int
     */
    public $aiBill;

    /**
     * @var int
     */
    public $answerTransferType;

    /**
     * @var string
     */
    public $batchId;

    /**
     * @var int
     */
    public $bill;

    /**
     * @var int
     */
    public $bridgeBill;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var int
     */
    public $callType;

    /**
     * @var string
     */
    public $clientUrl;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $gatewayId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $intentTag;

    /**
     * @var string
     */
    public $keywords;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $numberMd5;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $personalityTag;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $sid;

    /**
     * @var int
     */
    public $statusCode;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var int
     */
    public $transferStatus;
    protected $_name = [
        'aiBill' => 'AiBill',
        'answerTransferType' => 'AnswerTransferType',
        'batchId' => 'BatchId',
        'bill' => 'Bill',
        'bridgeBill' => 'BridgeBill',
        'callId' => 'CallId',
        'callType' => 'CallType',
        'clientUrl' => 'ClientUrl',
        'createTime' => 'CreateTime',
        'duration' => 'Duration',
        'gatewayId' => 'GatewayId',
        'id' => 'Id',
        'intentTag' => 'IntentTag',
        'keywords' => 'Keywords',
        'number' => 'Number',
        'numberMd5' => 'NumberMd5',
        'params' => 'Params',
        'personalityTag' => 'PersonalityTag',
        'remark' => 'Remark',
        'sid' => 'Sid',
        'statusCode' => 'StatusCode',
        'tag' => 'Tag',
        'taskId' => 'TaskId',
        'templateId' => 'TemplateId',
        'transferStatus' => 'TransferStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiBill) {
            $res['AiBill'] = $this->aiBill;
        }

        if (null !== $this->answerTransferType) {
            $res['AnswerTransferType'] = $this->answerTransferType;
        }

        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        if (null !== $this->bill) {
            $res['Bill'] = $this->bill;
        }

        if (null !== $this->bridgeBill) {
            $res['BridgeBill'] = $this->bridgeBill;
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->clientUrl) {
            $res['ClientUrl'] = $this->clientUrl;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->intentTag) {
            $res['IntentTag'] = $this->intentTag;
        }

        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        if (null !== $this->numberMd5) {
            $res['NumberMd5'] = $this->numberMd5;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        if (null !== $this->personalityTag) {
            $res['PersonalityTag'] = $this->personalityTag;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiBill'])) {
            $model->aiBill = $map['AiBill'];
        }

        if (isset($map['AnswerTransferType'])) {
            $model->answerTransferType = $map['AnswerTransferType'];
        }

        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        if (isset($map['Bill'])) {
            $model->bill = $map['Bill'];
        }

        if (isset($map['BridgeBill'])) {
            $model->bridgeBill = $map['BridgeBill'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['ClientUrl'])) {
            $model->clientUrl = $map['ClientUrl'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IntentTag'])) {
            $model->intentTag = $map['IntentTag'];
        }

        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        if (isset($map['NumberMd5'])) {
            $model->numberMd5 = $map['NumberMd5'];
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        if (isset($map['PersonalityTag'])) {
            $model->personalityTag = $map['PersonalityTag'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }

        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
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

        return $model;
    }
}
