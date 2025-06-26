<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerStackResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerStackResponseBody\data\stacks;

class data extends Model
{
    /**
     * @var string
     */
    public $consumerGroupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var stacks[]
     */
    public $stacks;
    protected $_name = [
        'consumerGroupId' => 'consumerGroupId',
        'instanceId' => 'instanceId',
        'regionId' => 'regionId',
        'stacks' => 'stacks',
    ];

    public function validate()
    {
        if (\is_array($this->stacks)) {
            Model::validateArray($this->stacks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->stacks)) {
                $res['stacks'] = [];
                $n1 = 0;
                foreach ($this->stacks as $item1) {
                    $res['stacks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['stacks'] as $item1) {
                    $model->stacks[$n1] = stacks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
