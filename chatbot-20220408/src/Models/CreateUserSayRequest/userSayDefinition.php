<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateUserSayRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateUserSayRequest\userSayDefinition\slotInfos;

class userSayDefinition extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $intentId;

    /**
     * @var slotInfos[]
     */
    public $slotInfos;
    protected $_name = [
        'content' => 'Content',
        'intentId' => 'IntentId',
        'slotInfos' => 'SlotInfos',
    ];

    public function validate()
    {
        if (\is_array($this->slotInfos)) {
            Model::validateArray($this->slotInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }

        if (null !== $this->slotInfos) {
            if (\is_array($this->slotInfos)) {
                $res['SlotInfos'] = [];
                $n1 = 0;
                foreach ($this->slotInfos as $item1) {
                    $res['SlotInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }

        if (isset($map['SlotInfos'])) {
            if (!empty($map['SlotInfos'])) {
                $model->slotInfos = [];
                $n1 = 0;
                foreach ($map['SlotInfos'] as $item1) {
                    $model->slotInfos[$n1] = slotInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
