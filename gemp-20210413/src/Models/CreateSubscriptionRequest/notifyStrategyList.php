<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateSubscriptionRequest;

use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateSubscriptionRequest\notifyStrategyList\periodChannel;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateSubscriptionRequest\notifyStrategyList\strategies;
use AlibabaCloud\Tea\Model;

class notifyStrategyList extends Model
{
    /**
     * @example SMS,PHONE
     *
     * @var string
     */
    public $channels;

    /**
     * @example INCIDENT
     *
     * @var int
     */
    public $instanceType;

    /**
     * @var periodChannel
     */
    public $periodChannel;

    /**
     * @var strategies[]
     */
    public $strategies;
    protected $_name = [
        'channels'      => 'channels',
        'instanceType'  => 'instanceType',
        'periodChannel' => 'periodChannel',
        'strategies'    => 'strategies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channels) {
            $res['channels'] = $this->channels;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->periodChannel) {
            $res['periodChannel'] = null !== $this->periodChannel ? $this->periodChannel->toMap() : null;
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
        if (isset($map['channels'])) {
            $model->channels = $map['channels'];
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['periodChannel'])) {
            $model->periodChannel = periodChannel::fromMap($map['periodChannel']);
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
