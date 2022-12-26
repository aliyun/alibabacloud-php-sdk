<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

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
     * @example 5ca40988-4f99-47ad-ac96-9060d0f81db9
     *
     * @var string
     */
    public $messageId;

    /**
     * @example 4e5eea71-f326-450c-8849-49515473ef64
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'feedback'  => 'Feedback',
        'messageId' => 'MessageId',
        'requestId' => 'RequestId',
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
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
