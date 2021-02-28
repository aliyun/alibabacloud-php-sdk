<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class FeedbackRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $feedback;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'sessionId'  => 'SessionId',
        'messageId'  => 'MessageId',
        'feedback'   => 'Feedback',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FeedbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }

        return $model;
    }
}
