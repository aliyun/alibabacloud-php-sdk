<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages;
use AlibabaCloud\Tea\Model;

class NluResponseBody extends Model
{
    /**
     * @example 2828708A-2C7A-1BAE-B810-87DB9DA9C661
     *
     * @var string
     */
    public $messageId;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @example A6357C1B-1D79-1382-B259-BD9E80751B42
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'messageId' => 'MessageId',
        'messages'  => 'Messages',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->messages) {
            $res['Messages'] = [];
            if (null !== $this->messages && \is_array($this->messages)) {
                $n = 0;
                foreach ($this->messages as $item) {
                    $res['Messages'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return NluResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['Messages'])) {
            if (!empty($map['Messages'])) {
                $model->messages = [];
                $n               = 0;
                foreach ($map['Messages'] as $item) {
                    $model->messages[$n++] = null !== $item ? messages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
