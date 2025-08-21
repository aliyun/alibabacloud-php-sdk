<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\TongyiChatDebugInfoResponseBody\pipeline;

class TongyiChatDebugInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $messageId;

    /**
     * @var pipeline[]
     */
    public $pipeline;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'messageId' => 'MessageId',
        'pipeline' => 'Pipeline',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->pipeline)) {
            Model::validateArray($this->pipeline);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->pipeline) {
            if (\is_array($this->pipeline)) {
                $res['Pipeline'] = [];
                $n1 = 0;
                foreach ($this->pipeline as $item1) {
                    $res['Pipeline'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['Pipeline'])) {
            if (!empty($map['Pipeline'])) {
                $model->pipeline = [];
                $n1 = 0;
                foreach ($map['Pipeline'] as $item1) {
                    $model->pipeline[$n1] = pipeline::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
