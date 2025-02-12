<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicSubscribeStatusResponseBody\topicSubscribeStatus;

class GetTopicSubscribeStatusResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    /**
     * @var topicSubscribeStatus
     */
    public $topicSubscribeStatus;
    protected $_name = [
        'code'                 => 'Code',
        'message'              => 'Message',
        'requestId'            => 'RequestId',
        'success'              => 'Success',
        'topicSubscribeStatus' => 'TopicSubscribeStatus',
    ];

    public function validate()
    {
        if (null !== $this->topicSubscribeStatus) {
            $this->topicSubscribeStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->topicSubscribeStatus) {
            $res['TopicSubscribeStatus'] = null !== $this->topicSubscribeStatus ? $this->topicSubscribeStatus->toArray($noStream) : $this->topicSubscribeStatus;
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

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TopicSubscribeStatus'])) {
            $model->topicSubscribeStatus = topicSubscribeStatus::fromMap($map['TopicSubscribeStatus']);
        }

        return $model;
    }
}
