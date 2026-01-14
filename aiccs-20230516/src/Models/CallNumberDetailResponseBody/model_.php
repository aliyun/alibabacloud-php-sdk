<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\CallNumberDetailResponseBody;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $batchId;

    /**
     * @var int
     */
    public $bill;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var int
     */
    public $callType;

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
    public $personalityTag;

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
        'batchId' => 'BatchId',
        'bill' => 'Bill',
        'callId' => 'CallId',
        'callType' => 'CallType',
        'id' => 'Id',
        'intentTag' => 'IntentTag',
        'keywords' => 'Keywords',
        'number' => 'Number',
        'numberMd5' => 'NumberMd5',
        'personalityTag' => 'PersonalityTag',
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
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        if (null !== $this->bill) {
            $res['Bill'] = $this->bill;
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
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

        if (null !== $this->personalityTag) {
            $res['PersonalityTag'] = $this->personalityTag;
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
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        if (isset($map['Bill'])) {
            $model->bill = $map['Bill'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
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

        if (isset($map['PersonalityTag'])) {
            $model->personalityTag = $map['PersonalityTag'];
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
