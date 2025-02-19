<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupLagResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DataTopicLagMapValue;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupLagResponseBody\data\totalLag;

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
     * @var DataTopicLagMapValue[]
     */
    public $topicLagMap;
    /**
     * @var totalLag
     */
    public $totalLag;
    protected $_name = [
        'consumerGroupId' => 'consumerGroupId',
        'instanceId'      => 'instanceId',
        'regionId'        => 'regionId',
        'topicLagMap'     => 'topicLagMap',
        'totalLag'        => 'totalLag',
    ];

    public function validate()
    {
        if (\is_array($this->topicLagMap)) {
            Model::validateArray($this->topicLagMap);
        }
        if (null !== $this->totalLag) {
            $this->totalLag->validate();
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

        if (null !== $this->topicLagMap) {
            if (\is_array($this->topicLagMap)) {
                $res['topicLagMap'] = [];
                foreach ($this->topicLagMap as $key1 => $value1) {
                    $res['topicLagMap'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->totalLag) {
            $res['totalLag'] = null !== $this->totalLag ? $this->totalLag->toArray($noStream) : $this->totalLag;
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

        if (isset($map['topicLagMap'])) {
            if (!empty($map['topicLagMap'])) {
                $model->topicLagMap = [];
                foreach ($map['topicLagMap'] as $key1 => $value1) {
                    $model->topicLagMap[$key1] = DataTopicLagMapValue::fromMap($value1);
                }
            }
        }

        if (isset($map['totalLag'])) {
            $model->totalLag = totalLag::fromMap($map['totalLag']);
        }

        return $model;
    }
}
