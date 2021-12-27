<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\SDK\Dysmsapi\V20180501\Models\QueryMessageResponseBody\numberDetail;
use AlibabaCloud\Tea\Model;

class QueryMessageResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorDescription;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var numberDetail
     */
    public $numberDetail;

    /**
     * @var string
     */
    public $receiveDate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $responseCode;

    /**
     * @var string
     */
    public $responseDescription;

    /**
     * @var string
     */
    public $sendDate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $to;
    protected $_name = [
        'errorCode'           => 'ErrorCode',
        'errorDescription'    => 'ErrorDescription',
        'message'             => 'Message',
        'messageId'           => 'MessageId',
        'numberDetail'        => 'NumberDetail',
        'receiveDate'         => 'ReceiveDate',
        'requestId'           => 'RequestId',
        'responseCode'        => 'ResponseCode',
        'responseDescription' => 'ResponseDescription',
        'sendDate'            => 'SendDate',
        'status'              => 'Status',
        'to'                  => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorDescription) {
            $res['ErrorDescription'] = $this->errorDescription;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->numberDetail) {
            $res['NumberDetail'] = null !== $this->numberDetail ? $this->numberDetail->toMap() : null;
        }
        if (null !== $this->receiveDate) {
            $res['ReceiveDate'] = $this->receiveDate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->responseCode) {
            $res['ResponseCode'] = $this->responseCode;
        }
        if (null !== $this->responseDescription) {
            $res['ResponseDescription'] = $this->responseDescription;
        }
        if (null !== $this->sendDate) {
            $res['SendDate'] = $this->sendDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMessageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorDescription'])) {
            $model->errorDescription = $map['ErrorDescription'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['NumberDetail'])) {
            $model->numberDetail = numberDetail::fromMap($map['NumberDetail']);
        }
        if (isset($map['ReceiveDate'])) {
            $model->receiveDate = $map['ReceiveDate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResponseCode'])) {
            $model->responseCode = $map['ResponseCode'];
        }
        if (isset($map['ResponseDescription'])) {
            $model->responseDescription = $map['ResponseDescription'];
        }
        if (isset($map['SendDate'])) {
            $model->sendDate = $map['SendDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
