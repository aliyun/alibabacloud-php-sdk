<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateUserSayRequest;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateUserSayRequest\userSayDefinition\slotInfos;
use AlibabaCloud\Tea\Model;

class userSayDefinition extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 123232
     *
     * @var int
     */
    public $intentId;

    /**
     * @var slotInfos[]
     */
    public $slotInfos;
    protected $_name = [
        'content'   => 'Content',
        'intentId'  => 'IntentId',
        'slotInfos' => 'SlotInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }
        if (null !== $this->slotInfos) {
            $res['SlotInfos'] = [];
            if (null !== $this->slotInfos && \is_array($this->slotInfos)) {
                $n = 0;
                foreach ($this->slotInfos as $item) {
                    $res['SlotInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userSayDefinition
     */
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
                $n                = 0;
                foreach ($map['SlotInfos'] as $item) {
                    $model->slotInfos[$n++] = null !== $item ? slotInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
