<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateSubscriptionRequest\notifyStrategyList;

use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateSubscriptionRequest\notifyStrategyList\strategies\conditions;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateSubscriptionRequest\notifyStrategyList\strategies\periodChannel;
use AlibabaCloud\Tea\Model;

class strategies extends Model
{
    /**
     * @description 故障等级
     *
     * @var string
     */
    public $channels;

    /**
     * @description 影响程度
     *
     * @var conditions[]
     */
    public $conditions;

    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description 分时段通知渠道
     *
     * @var periodChannel
     */
    public $periodChannel;
    protected $_name = [
        'channels'      => 'channels',
        'conditions'    => 'conditions',
        'id'            => 'id',
        'periodChannel' => 'periodChannel',
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
        if (null !== $this->conditions) {
            $res['conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['conditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->periodChannel) {
            $res['periodChannel'] = null !== $this->periodChannel ? $this->periodChannel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channels'])) {
            $model->channels = $map['channels'];
        }
        if (isset($map['conditions'])) {
            if (!empty($map['conditions'])) {
                $model->conditions = [];
                $n                 = 0;
                foreach ($map['conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? conditions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['periodChannel'])) {
            $model->periodChannel = periodChannel::fromMap($map['periodChannel']);
        }

        return $model;
    }
}
