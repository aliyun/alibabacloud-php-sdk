<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateSubscriptionRequest;

use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateSubscriptionRequest\notifyStrategyList\strategies;
use AlibabaCloud\Tea\Model;

class notifyStrategyList extends Model
{
    /**
     * @description 订阅实例类型，事件、报警、故障
     *
     * @var int
     */
    public $instanceType;

    /**
     * @description 条件。json格式，包含多个条件，比如级别、影响程度 kv格式
     *
     * @var strategies[]
     */
    public $strategies;

    /**
     * @description 渠道，多个逗号分隔
     *
     * @var string
     */
    public $channels;
    protected $_name = [
        'instanceType' => 'instanceType',
        'strategies'   => 'strategies',
        'channels'     => 'channels',
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
        if (null !== $this->channels) {
            $res['channels'] = $this->channels;
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
        if (isset($map['channels'])) {
            $model->channels = $map['channels'];
        }

        return $model;
    }
}
