<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListConversationDetailsResponseBody\conversationDetails;
use AlibabaCloud\Tea\Model;

class ListConversationDetailsResponseBody extends Model
{
    /**
     * @var conversationDetails[]
     */
    public $conversationDetails;

    /**
     * @example 14C39896-AE6D-4643-9C9A-E0566B2C2DDD
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'conversationDetails' => 'ConversationDetails',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conversationDetails) {
            $res['ConversationDetails'] = [];
            if (null !== $this->conversationDetails && \is_array($this->conversationDetails)) {
                $n = 0;
                foreach ($this->conversationDetails as $item) {
                    $res['ConversationDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConversationDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConversationDetails'])) {
            if (!empty($map['ConversationDetails'])) {
                $model->conversationDetails = [];
                $n                          = 0;
                foreach ($map['ConversationDetails'] as $item) {
                    $model->conversationDetails[$n++] = null !== $item ? conversationDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
