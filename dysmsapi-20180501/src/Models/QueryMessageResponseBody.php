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
    public $status;

    /**
     * @var string
     */
    public $errorDescription;

    /**
     * @var string
     */
    public $responseCode;

    /**
     * @var string
     */
    public $receiveDate;

    /**
     * @var numberDetail
     */
    public $numberDetail;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $responseDescription;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $sendDate;

    /**
     * @var string
     */
    public $to;

    /**
     * @var string
     */
    public $messageId;
    protected $_name = [
        'status'              => 'Status',
        'errorDescription'    => 'ErrorDescription',
        'responseCode'        => 'ResponseCode',
        'receiveDate'         => 'ReceiveDate',
        'numberDetail'        => 'NumberDetail',
        'message'             => 'Message',
        'responseDescription' => 'ResponseDescription',
        'errorCode'           => 'ErrorCode',
        'sendDate'            => 'SendDate',
        'to'                  => 'To',
        'messageId'           => 'MessageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->errorDescription) {
            $res['ErrorDescription'] = $this->errorDescription;
        }
        if (null !== $this->responseCode) {
            $res['ResponseCode'] = $this->responseCode;
        }
        if (null !== $this->receiveDate) {
            $res['ReceiveDate'] = $this->receiveDate;
        }
        if (null !== $this->numberDetail) {
            $res['NumberDetail'] = null !== $this->numberDetail ? $this->numberDetail->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->responseDescription) {
            $res['ResponseDescription'] = $this->responseDescription;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->sendDate) {
            $res['SendDate'] = $this->sendDate;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ErrorDescription'])) {
            $model->errorDescription = $map['ErrorDescription'];
        }
        if (isset($map['ResponseCode'])) {
            $model->responseCode = $map['ResponseCode'];
        }
        if (isset($map['ReceiveDate'])) {
            $model->receiveDate = $map['ReceiveDate'];
        }
        if (isset($map['NumberDetail'])) {
            $model->numberDetail = numberDetail::fromMap($map['NumberDetail']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ResponseDescription'])) {
            $model->responseDescription = $map['ResponseDescription'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['SendDate'])) {
            $model->sendDate = $map['SendDate'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        return $model;
    }
}
