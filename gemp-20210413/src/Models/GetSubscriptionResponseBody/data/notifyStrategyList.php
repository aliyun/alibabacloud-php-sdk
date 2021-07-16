<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetSubscriptionResponseBody\data;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetSubscriptionResponseBody\data\notifyStrategyList\strategies;
use AlibabaCloud\Tea\Model;

class notifyStrategyList extends Model
{
    /**
     * @description 订阅实例类型，0事件、1报警、2故障
     *
     * @var int
     */
    public $instanceType;

    /**
     * @description 策略
     *
     * @var strategies[]
     */
    public $strategies;
    protected $_name = [
        'instanceType' => 'instanceType',
        'strategies'   => 'strategies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->strategies) {
            $res['strategies'] = [];
            if (null !== $this->strategies && \is_array($this->strategies)) {
                $n = 0;
                foreach ($this->strategies as $item) {
                    $res['strategies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notifyStrategyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['strategies'])) {
            if (!empty($map['strategies'])) {
                $model->strategies = [];
                $n                 = 0;
                foreach ($map['strategies'] as $item) {
                    $model->strategies[$n++] = null !== $item ? strategies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
