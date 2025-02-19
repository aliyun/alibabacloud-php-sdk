<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\brokerInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\consumerInfos;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\messageInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\producerInfo;

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
     * @var string
     */
    public $regionId;
    /**
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
        if (null !== $this->brokerInfo) {
            $this->brokerInfo->validate();
        }
        if (\is_array($this->consumerInfos)) {
            Model::validateArray($this->consumerInfos);
        }
        if (null !== $this->messageInfo) {
            $this->messageInfo->validate();
        }
        if (null !== $this->producerInfo) {
            $this->producerInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->brokerInfo) {
            $res['brokerInfo'] = null !== $this->brokerInfo ? $this->brokerInfo->toArray($noStream) : $this->brokerInfo;
        }

        if (null !== $this->consumerInfos) {
            if (\is_array($this->consumerInfos)) {
                $res['consumerInfos'] = [];
                $n1                   = 0;
                foreach ($this->consumerInfos as $item1) {
                    $res['consumerInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->messageInfo) {
            $res['messageInfo'] = null !== $this->messageInfo ? $this->messageInfo->toArray($noStream) : $this->messageInfo;
        }

        if (null !== $this->producerInfo) {
            $res['producerInfo'] = null !== $this->producerInfo ? $this->producerInfo->toArray($noStream) : $this->producerInfo;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->topicName) {
            $res['topicName'] = $this->topicName;
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
        if (isset($map['brokerInfo'])) {
            $model->brokerInfo = brokerInfo::fromMap($map['brokerInfo']);
        }

        if (isset($map['consumerInfos'])) {
            if (!empty($map['consumerInfos'])) {
                $model->consumerInfos = [];
                $n1                   = 0;
                foreach ($map['consumerInfos'] as $item1) {
                    $model->consumerInfos[$n1++] = consumerInfos::fromMap($item1);
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
