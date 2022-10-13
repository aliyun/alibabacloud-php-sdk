<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DescribeConversationContextResponseBody extends Model
{
    /**
     * @var string
     */
    public $conversationContext;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'conversationContext' => 'ConversationContext',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conversationContext) {
            $res['ConversationContext'] = $this->conversationContext;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ConversationContext'])) {
            $model->conversationContext = $map['ConversationContext'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
