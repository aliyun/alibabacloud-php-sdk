<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogHistogramAsyncResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var data\data
     */
    public $data;

    /**
     * @var int
     */
    public $errorCode;

    /**
     * @var bool
     */
    public $isFinish;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestKey;

    /**
     * @var string
     */
    public $resultId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'data' => 'Data',
        'errorCode' => 'ErrorCode',
        'isFinish' => 'IsFinish',
        'message' => 'Message',
        'requestKey' => 'RequestKey',
        'resultId' => 'ResultId',
        'state' => 'State',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->isFinish) {
            $res['IsFinish'] = $this->isFinish;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestKey) {
            $res['RequestKey'] = $this->requestKey;
        }

        if (null !== $this->resultId) {
            $res['ResultId'] = $this->resultId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['Data'])) {
            $model->data = data\data::fromMap($map['Data']);
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['IsFinish'])) {
            $model->isFinish = $map['IsFinish'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestKey'])) {
            $model->requestKey = $map['RequestKey'];
        }

        if (isset($map['ResultId'])) {
            $model->resultId = $map['ResultId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
