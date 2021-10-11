<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20210930\Models\AiStoreReceiveConfig;

use AlibabaCloud\Tea\Model;

class eventBridge extends Model
{
    /**
     * @description 事件总线
     *
     * @var string
     */
    public $eventBus;

    /**
     * @description 事件规则
     *
     * @var string
     */
    public $eventRule;
    protected $_name = [
        'eventBus'  => 'EventBus',
        'eventRule' => 'EventRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventBus) {
            $res['EventBus'] = $this->eventBus;
        }
        if (null !== $this->eventRule) {
            $res['EventRule'] = $this->eventRule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventBridge
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventBus'])) {
            $model->eventBus = $map['EventBus'];
        }
        if (isset($map['EventRule'])) {
            $model->eventRule = $map['EventRule'];
        }

        return $model;
    }
}
