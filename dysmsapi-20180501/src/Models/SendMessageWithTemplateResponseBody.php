<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysmsapi\V20180501\Models\SendMessageWithTemplateResponseBody\numberDetail;

class SendMessageWithTemplateResponseBody extends Model
{
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
    public $segments;

    /**
     * @var string
     */
    public $to;
    protected $_name = [
        'messageId' => 'MessageId',
        'numberDetail' => 'NumberDetail',
        'requestId' => 'RequestId',
        'responseCode' => 'ResponseCode',
        'responseDescription' => 'ResponseDescription',
        'segments' => 'Segments',
        'to' => 'To',
    ];

    public function validate()
    {
        if (null !== $this->numberDetail) {
            $this->numberDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->numberDetail) {
            $res['NumberDetail'] = null !== $this->numberDetail ? $this->numberDetail->toArray($noStream) : $this->numberDetail;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
