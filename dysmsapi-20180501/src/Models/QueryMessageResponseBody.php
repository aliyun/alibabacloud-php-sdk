<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\SDK\Dysmsapi\V20180501\Models\QueryMessageResponseBody\numberDetail;
use AlibabaCloud\Tea\Model;

class QueryMessageResponseBody extends Model
{
    /**
     * @description The status code of the message.
     *
     * @example DELIVERED
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The description of the status code.
     *
     * @example success
     *
     * @var string
     */
    public $errorDescription;

    /**
     * @description The content of the message.
     *
     * @example Hello!
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the message.
     *
     * @example 1008030xxx3003
     *
     * @var string
     */
    public $messageId;

    /**
     * @description The details about the mobile phone number.
     *
     * @var numberDetail
     */
    public $numberDetail;

    /**
     * @description The time when the delivery receipt was received from the carrier.
     *
     * @example Mon, 24 Dec 2018 16:58:22 +0800
     *
     * @var string
     */
    public $receiveDate;

    /**
     * @description The ID of the request.
     *
     * @example F655A8D5-B967-440B-8683-DAD6FF8D28D0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status code of the delivery request.
     *
     * @example OK
     *
     * @var string
     */
    public $responseCode;

    /**
     * @description The description of the delivery request status.
     *
     * @example The SMS Send Request was accepted
     *
     * @var string
     */
    public $responseDescription;

    /**
     * @description The time when the message was sent to the carrier.
     *
     * @example Mon, 24 Dec 2018 16:58:22 +0800
     *
     * @var string
     */
    public $sendDate;

    /**
     * @description The delivery status of the message.
     *
     *   1: The message was sent.
     *   2: The message failed to be sent.
     *   3: The message is being sent.
     *
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @description The mobile phone number to which the message was sent.
     *
     * @example 6581xxx810
     *
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
