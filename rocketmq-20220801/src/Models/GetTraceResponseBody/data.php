<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\brokerInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\consumerInfos;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\messageInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\producerInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var brokerInfo
     */
    public $brokerInfo;

    /**
     * @var consumerInfos[]
     */
    public $consumerInfos;

    /**
     * @example rmq-cn-7e22ody****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var messageInfo
     */
    public $messageInfo;

    /**
     * @var producerInfo
     */
    public $producerInfo;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example topic_test
     *
     * @var string
     */
    public $topicName;
    protected $_name = [
        'brokerInfo'    => 'brokerInfo',
        'consumerInfos' => 'consumerInfos',
        'instanceId'    => 'instanceId',
        'messageInfo'   => 'messageInfo',
        'producerInfo'  => 'producerInfo',
        'regionId'      => 'regionId',
        'topicName'     => 'topicName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brokerInfo) {
            $res['brokerInfo'] = null !== $this->brokerInfo ? $this->brokerInfo->toMap() : null;
        }
        if (null !== $this->consumerInfos) {
            $res['consumerInfos'] = [];
            if (null !== $this->consumerInfos && \is_array($this->consumerInfos)) {
                $n = 0;
                foreach ($this->consumerInfos as $item) {
                    $res['consumerInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->messageInfo) {
            $res['messageInfo'] = null !== $this->messageInfo ? $this->messageInfo->toMap() : null;
        }
        if (null !== $this->producerInfo) {
            $res['producerInfo'] = null !== $this->producerInfo ? $this->producerInfo->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->topicName) {
            $res['topicName'] = $this->topicName;
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
        if (isset($map['brokerInfo'])) {
            $model->brokerInfo = brokerInfo::fromMap($map['brokerInfo']);
        }
        if (isset($map['consumerInfos'])) {
            if (!empty($map['consumerInfos'])) {
                $model->consumerInfos = [];
                $n                    = 0;
                foreach ($map['consumerInfos'] as $item) {
                    $model->consumerInfos[$n++] = null !== $item ? consumerInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['messageInfo'])) {
            $model->messageInfo = messageInfo::fromMap($map['messageInfo']);
        }
        if (isset($map['producerInfo'])) {
            $model->producerInfo = producerInfo::fromMap($map['producerInfo']);
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }

        return $model;
    }
}
