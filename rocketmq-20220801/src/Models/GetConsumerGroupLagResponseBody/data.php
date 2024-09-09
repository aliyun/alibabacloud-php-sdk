<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupLagResponseBody;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DataTopicLagMapValue;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupLagResponseBody\data\totalLag;
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
     * @example 2022-08-01 20:05:50
     *
     * @var string
     */
    public $createTime;

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
     * @var DataTopicLagMapValue[]
     */
    public $topicLagMap;

    /**
     * @var totalLag
     */
    public $totalLag;

    /**
     * @example 2022-08-01 20:05:50
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'consumerGroupId' => 'consumerGroupId',
        'createTime'      => 'createTime',
        'instanceId'      => 'instanceId',
        'regionId'        => 'regionId',
        'topicLagMap'     => 'topicLagMap',
        'totalLag'        => 'totalLag',
        'updateTime'      => 'updateTime',
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
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->topicLagMap) {
            $res['topicLagMap'] = [];
            if (null !== $this->topicLagMap && \is_array($this->topicLagMap)) {
                foreach ($this->topicLagMap as $key => $val) {
                    $res['topicLagMap'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->totalLag) {
            $res['totalLag'] = null !== $this->totalLag ? $this->totalLag->toMap() : null;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['topicLagMap'])) {
            $model->topicLagMap = $map['topicLagMap'];
        }
        if (isset($map['totalLag'])) {
            $model->totalLag = totalLag::fromMap($map['totalLag']);
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
