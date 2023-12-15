<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class FeedbackResponseBody extends Model
{
    /**
     * @example good
     *
     * @var string
     */
    public $feedback;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatus;

    /**
     * @example 8869745c-3b30-44ab-a1ef-20ad4191bfad
     *
     * @var string
     */
    public $messageId;

    /**
     * @example 16D4BC6D-FF53-5EB0-A6A2-CA0F32B6FF7E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'feedback'   => 'Feedback',
        'httpStatus' => 'HttpStatus',
        'messageId'  => 'MessageId',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }
        if (null !== $this->httpStatus) {
            $res['HttpStatus'] = $this->httpStatus;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FeedbackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }
        if (isset($map['HttpStatus'])) {
            $model->httpStatus = $map['HttpStatus'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
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
