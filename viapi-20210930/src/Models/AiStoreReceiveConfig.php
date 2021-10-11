<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20210930\Models;

use AlibabaCloud\SDK\Viapi\V20210930\Models\AiStoreReceiveConfig\eventBridge;
use AlibabaCloud\SDK\Viapi\V20210930\Models\AiStoreReceiveConfig\mns;
use AlibabaCloud\Tea\Model;

class AiStoreReceiveConfig extends Model
{
    /**
     * @description 事件总线
     *
     * @var eventBridge
     */
    public $eventBridge;

    /**
     * @description MNS消息
     *
     * @var mns
     */
    public $mns;
    protected $_name = [
        'eventBridge' => 'EventBridge',
        'mns'         => 'Mns',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventBridge) {
            $res['EventBridge'] = null !== $this->eventBridge ? $this->eventBridge->toMap() : null;
        }
        if (null !== $this->mns) {
            $res['Mns'] = null !== $this->mns ? $this->mns->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AiStoreReceiveConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventBridge'])) {
            $model->eventBridge = eventBridge::fromMap($map['EventBridge']);
        }
        if (isset($map['Mns'])) {
            $model->mns = mns::fromMap($map['Mns']);
        }

        return $model;
    }
}
