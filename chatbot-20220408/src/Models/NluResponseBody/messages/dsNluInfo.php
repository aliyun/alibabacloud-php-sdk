<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dsNluInfo\entityList;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dsNluInfo\intentList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityList) {
            $res['EntityList'] = [];
            if (null !== $this->entityList && \is_array($this->entityList)) {
                $n = 0;
                foreach ($this->entityList as $item) {
                    $res['EntityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->intentList) {
            $res['IntentList'] = [];
            if (null !== $this->intentList && \is_array($this->intentList)) {
                $n = 0;
                foreach ($this->intentList as $item) {
                    $res['IntentList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dsNluInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityList'])) {
            if (!empty($map['EntityList'])) {
                $model->entityList = [];
                $n                 = 0;
                foreach ($map['EntityList'] as $item) {
                    $model->entityList[$n++] = null !== $item ? entityList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IntentList'])) {
            if (!empty($map['IntentList'])) {
                $model->intentList = [];
                $n                 = 0;
                foreach ($map['IntentList'] as $item) {
                    $model->intentList[$n++] = null !== $item ? intentList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
