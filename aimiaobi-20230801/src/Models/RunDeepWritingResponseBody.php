<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDeepWritingResponseBody\header;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDeepWritingResponseBody\payload;

class RunDeepWritingResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var header
     */
    public $header;

    /**
     * @var string
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var payload
     */
    public $payload;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'header' => 'Header',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'payload' => 'Payload',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->header) {
            $this->header->validate();
        }
        if (null !== $this->payload) {
            $this->payload->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->header) {
            $res['Header'] = null !== $this->header ? $this->header->toArray($noStream) : $this->header;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->payload) {
            $res['Payload'] = null !== $this->payload ? $this->payload->toArray($noStream) : $this->payload;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Header'])) {
            $model->header = header::fromMap($map['Header']);
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Payload'])) {
            $model->payload = payload::fromMap($map['Payload']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
