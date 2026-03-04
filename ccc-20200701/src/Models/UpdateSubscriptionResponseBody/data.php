<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\UpdateSubscriptionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateSubscriptionResponseBody\data\eventList;

class data extends Model
{
    /**
     * @var string
     */
    public $accessPoint;

    /**
     * @var eventList[]
     */
    public $eventList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mqInstanceId;

    /**
     * @var string
     */
    public $mqType;

    /**
     * @var string
     */
    public $producerId;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'accessPoint' => 'AccessPoint',
        'eventList' => 'EventList',
        'instanceId' => 'InstanceId',
        'mqInstanceId' => 'MqInstanceId',
        'mqType' => 'MqType',
        'producerId' => 'ProducerId',
        'topic' => 'Topic',
        'username' => 'Username',
    ];

    public function validate()
    {
        if (\is_array($this->eventList)) {
            Model::validateArray($this->eventList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPoint) {
            $res['AccessPoint'] = $this->accessPoint;
        }

        if (null !== $this->eventList) {
            if (\is_array($this->eventList)) {
                $res['EventList'] = [];
                $n1 = 0;
                foreach ($this->eventList as $item1) {
                    $res['EventList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->mqInstanceId) {
            $res['MqInstanceId'] = $this->mqInstanceId;
        }

        if (null !== $this->mqType) {
            $res['MqType'] = $this->mqType;
        }

        if (null !== $this->producerId) {
            $res['ProducerId'] = $this->producerId;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
        if (isset($map['AccessPoint'])) {
            $model->accessPoint = $map['AccessPoint'];
        }

        if (isset($map['EventList'])) {
            if (!empty($map['EventList'])) {
                $model->eventList = [];
                $n1 = 0;
                foreach ($map['EventList'] as $item1) {
                    $model->eventList[$n1] = eventList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MqInstanceId'])) {
            $model->mqInstanceId = $map['MqInstanceId'];
        }

        if (isset($map['MqType'])) {
            $model->mqType = $map['MqType'];
        }

        if (isset($map['ProducerId'])) {
            $model->producerId = $map['ProducerId'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
