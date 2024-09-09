<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerStackResponseBody;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerStackResponseBody\data\stacks;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example CID-TEST
     *
     * @var string
     */
    public $consumerGroupId;

    /**
     * @example rmq-cn-7e22ody****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var stacks[]
     */
    public $stacks;
    protected $_name = [
        'consumerGroupId' => 'consumerGroupId',
        'instanceId'      => 'instanceId',
        'regionId'        => 'regionId',
        'stacks'          => 'stacks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerGroupId) {
            $res['consumerGroupId'] = $this->consumerGroupId;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->stacks) {
            $res['stacks'] = [];
            if (null !== $this->stacks && \is_array($this->stacks)) {
                $n = 0;
                foreach ($this->stacks as $item) {
                    $res['stacks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['consumerGroupId'])) {
            $model->consumerGroupId = $map['consumerGroupId'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['stacks'])) {
            if (!empty($map['stacks'])) {
                $model->stacks = [];
                $n             = 0;
                foreach ($map['stacks'] as $item) {
                    $model->stacks[$n++] = null !== $item ? stacks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
