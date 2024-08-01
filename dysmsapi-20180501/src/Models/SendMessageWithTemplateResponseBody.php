<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\SDK\Dysmsapi\V20180501\Models\SendMessageWithTemplateResponseBody\numberDetail;
use AlibabaCloud\Tea\Model;

class SendMessageWithTemplateResponseBody extends Model
{
    /**
     * @description The ID of the message.
     *
     * @example 1**************3
     *
     * @var string
     */
    public $messageId;

    /**
     * @description The details about the mobile phone number of the recipient.
     *
     * @var numberDetail
     */
    public $numberDetail;

    /**
     * @description The ID of the request.
     *
     * @example F655A8D5-B967-440B-8683-DAD6FF8D23D6
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
     * @description The number of messages that incurred fees.
     *
     * @example 1
     *
     * @var string
     */
    public $segments;

    /**
     * @description The mobile phone number to which the message was sent. The dialing code was added to the beginning of the mobile phone number. Example: 861503871\\*\\*\\*\\*.
     *
     * @example 861503871****
     *
     * @var string
     */
    public $to;
    protected $_name = [
        'messageId'           => 'MessageId',
        'numberDetail'        => 'NumberDetail',
        'requestId'           => 'RequestId',
        'responseCode'        => 'ResponseCode',
        'responseDescription' => 'ResponseDescription',
        'segments'            => 'Segments',
        'to'                  => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->numberDetail) {
            $res['NumberDetail'] = null !== $this->numberDetail ? $this->numberDetail->toMap() : null;
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
        if (null !== $this->segments) {
            $res['Segments'] = $this->segments;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMessageWithTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['NumberDetail'])) {
            $model->numberDetail = numberDetail::fromMap($map['NumberDetail']);
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
        if (isset($map['Segments'])) {
            $model->segments = $map['Segments'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
