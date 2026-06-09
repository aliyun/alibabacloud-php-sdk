<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduTutor\V20250707\Models;

use AlibabaCloud\Dara\Model;

class CutQuestionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $data;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var int
     */
    public $inputTokens;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $outputTokens;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'code',
        'data' => 'data',
        'httpStatusCode' => 'httpStatusCode',
        'inputTokens' => 'input_tokens',
        'message' => 'message',
        'outputTokens' => 'output_tokens',
        'requestId' => 'requestId',
        'success' => 'success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        if (null !== $this->httpStatusCode) {
            $res['httpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->inputTokens) {
            $res['input_tokens'] = $this->inputTokens;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->outputTokens) {
            $res['output_tokens'] = $this->outputTokens;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        if (isset($map['httpStatusCode'])) {
            $model->httpStatusCode = $map['httpStatusCode'];
        }

        if (isset($map['input_tokens'])) {
            $model->inputTokens = $map['input_tokens'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['output_tokens'])) {
            $model->outputTokens = $map['output_tokens'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
