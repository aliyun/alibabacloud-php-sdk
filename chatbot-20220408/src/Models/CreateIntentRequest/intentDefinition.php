<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateIntentRequest;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateIntentRequest\intentDefinition\slotInfos;
use AlibabaCloud\Tea\Model;

class intentDefinition extends Model
{
    /**
     * @description 意图别名
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description 意图名称
     *
     * @var string
     */
    public $intentName;

    /**
     * @description 槽位信息
     *
     * @var slotInfos[]
     */
    public $slotInfos;
    protected $_name = [
        'aliasName'  => 'AliasName',
        'intentName' => 'IntentName',
        'slotInfos'  => 'SlotInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->intentName) {
            $res['IntentName'] = $this->intentName;
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
     * @return intentDefinition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['IntentName'])) {
            $model->intentName = $map['IntentName'];
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
