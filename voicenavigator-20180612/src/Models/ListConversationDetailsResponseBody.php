<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListConversationDetailsResponseBody\conversationDetails;

class ListConversationDetailsResponseBody extends Model
{
    /**
     * @var conversationDetails[]
     */
    public $conversationDetails;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'conversationDetails' => 'ConversationDetails',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->conversationDetails)) {
            Model::validateArray($this->conversationDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conversationDetails) {
            if (\is_array($this->conversationDetails)) {
                $res['ConversationDetails'] = [];
                $n1                         = 0;
                foreach ($this->conversationDetails as $item1) {
                    $res['ConversationDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ConversationDetails'])) {
            if (!empty($map['ConversationDetails'])) {
                $model->conversationDetails = [];
                $n1                         = 0;
                foreach ($map['ConversationDetails'] as $item1) {
                    $model->conversationDetails[$n1++] = conversationDetails::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
