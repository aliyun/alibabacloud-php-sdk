<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DescribeConversationContextResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $conversationContext;
    protected $_name = [
        'requestId'           => 'RequestId',
        'conversationContext' => 'ConversationContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->conversationContext) {
            $res['ConversationContext'] = $this->conversationContext;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConversationContextResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConversationContext'])) {
            $model->conversationContext = $map['ConversationContext'];
        }

        return $model;
    }
}
