<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dsNluInfo\entityList;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dsNluInfo\intentList;

class dsNluInfo extends Model
{
    /**
     * @var entityList[]
     */
    public $entityList;

    /**
     * @var intentList[]
     */
    public $intentList;
    protected $_name = [
        'entityList' => 'EntityList',
        'intentList' => 'IntentList',
    ];

    public function validate()
    {
        if (\is_array($this->entityList)) {
            Model::validateArray($this->entityList);
        }
        if (\is_array($this->intentList)) {
            Model::validateArray($this->intentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityList) {
            if (\is_array($this->entityList)) {
                $res['EntityList'] = [];
                $n1 = 0;
                foreach ($this->entityList as $item1) {
                    $res['EntityList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->intentList) {
            if (\is_array($this->intentList)) {
                $res['IntentList'] = [];
                $n1 = 0;
                foreach ($this->intentList as $item1) {
                    $res['IntentList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EntityList'])) {
            if (!empty($map['EntityList'])) {
                $model->entityList = [];
                $n1 = 0;
                foreach ($map['EntityList'] as $item1) {
                    $model->entityList[$n1] = entityList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IntentList'])) {
            if (!empty($map['IntentList'])) {
                $model->intentList = [];
                $n1 = 0;
                foreach ($map['IntentList'] as $item1) {
                    $model->intentList[$n1] = intentList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
