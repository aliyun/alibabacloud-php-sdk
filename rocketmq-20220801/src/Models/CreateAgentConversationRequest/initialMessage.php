<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateAgentConversationRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateAgentConversationRequest\initialMessage\images;

class initialMessage extends Model
{
    /**
     * @var string
     */
    public $clientContext;

    /**
     * @var images[]
     */
    public $images;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $messageType;

    /**
     * @var string
     */
    public $ticketRequestId;
    protected $_name = [
        'clientContext' => 'clientContext',
        'images' => 'images',
        'message' => 'message',
        'messageType' => 'messageType',
        'ticketRequestId' => 'ticketRequestId',
    ];

    public function validate()
    {
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientContext) {
            $res['clientContext'] = $this->clientContext;
        }

        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['images'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->messageType) {
            $res['messageType'] = $this->messageType;
        }

        if (null !== $this->ticketRequestId) {
            $res['ticketRequestId'] = $this->ticketRequestId;
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
        if (isset($map['clientContext'])) {
            $model->clientContext = $map['clientContext'];
        }

        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = [];
                $n1 = 0;
                foreach ($map['images'] as $item1) {
                    $model->images[$n1] = images::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['messageType'])) {
            $model->messageType = $map['messageType'];
        }

        if (isset($map['ticketRequestId'])) {
            $model->ticketRequestId = $map['ticketRequestId'];
        }

        return $model;
    }
}
