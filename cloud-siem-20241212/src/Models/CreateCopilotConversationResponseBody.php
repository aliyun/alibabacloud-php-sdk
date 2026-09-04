<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateCopilotConversationResponseBody\conversation;

class CreateCopilotConversationResponseBody extends Model
{
    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var conversation
     */
    public $conversation;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiVersion' => 'ApiVersion',
        'conversation' => 'Conversation',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->conversation) {
            $this->conversation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }

        if (null !== $this->conversation) {
            $res['Conversation'] = null !== $this->conversation ? $this->conversation->toArray($noStream) : $this->conversation;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }

        if (isset($map['Conversation'])) {
            $model->conversation = conversation::fromMap($map['Conversation']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
