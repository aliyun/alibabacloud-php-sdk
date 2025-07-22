<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogHistogramAsyncResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var data\data
     */
    public $data;

    /**
     * @example 10910
     *
     * @var int
     */
    public $errorCode;

    /**
     * @example true
     *
     * @var bool
     */
    public $isFinish;

    /**
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestKey;

    /**
     * @example async__20ee808e72257f16a4fe024057ca****
     *
     * @var string
     */
    public $resultId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $state;

    /**
     * @example 1645668213000
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
