<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListTongyiConversationLogsResponseBody;

use AlibabaCloud\Dara\Model;

class sessionFlowDebugInfo extends Model
{
    /**
     * @var mixed[]
     */
    public $apiParams;

    /**
     * @var mixed[]
     */
    public $slotParams;
    protected $_name = [
        'apiParams' => 'ApiParams',
        'slotParams' => 'SlotParams',
    ];

    public function validate()
    {
        if (\is_array($this->apiParams)) {
            Model::validateArray($this->apiParams);
        }
        if (\is_array($this->slotParams)) {
            Model::validateArray($this->slotParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiParams) {
            if (\is_array($this->apiParams)) {
                $res['ApiParams'] = [];
                foreach ($this->apiParams as $key1 => $value1) {
                    $res['ApiParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->slotParams) {
            if (\is_array($this->slotParams)) {
                $res['SlotParams'] = [];
                foreach ($this->slotParams as $key1 => $value1) {
                    $res['SlotParams'][$key1] = $value1;
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
        if (isset($map['ApiParams'])) {
            if (!empty($map['ApiParams'])) {
                $model->apiParams = [];
                foreach ($map['ApiParams'] as $key1 => $value1) {
                    $model->apiParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['SlotParams'])) {
            if (!empty($map['SlotParams'])) {
                $model->slotParams = [];
                foreach ($map['SlotParams'] as $key1 => $value1) {
                    $model->slotParams[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
