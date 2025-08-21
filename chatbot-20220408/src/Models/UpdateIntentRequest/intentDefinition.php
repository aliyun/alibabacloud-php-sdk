<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateIntentRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateIntentRequest\intentDefinition\slotInfos;

class intentDefinition extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $intentName;

    /**
     * @var slotInfos[]
     */
    public $slotInfos;
    protected $_name = [
        'aliasName' => 'AliasName',
        'intentName' => 'IntentName',
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
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        if (null !== $this->intentName) {
            $res['IntentName'] = $this->intentName;
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
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        if (isset($map['IntentName'])) {
            $model->intentName = $map['IntentName'];
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
