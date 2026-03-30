<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models;

use AlibabaCloud\Dara\Model;

class UpdateSubscriptionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $eventSubscriptionsShrink;

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
    public $password;

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
    public $userName;
    protected $_name = [
        'endpoint' => 'Endpoint',
        'eventSubscriptionsShrink' => 'EventSubscriptions',
        'instanceId' => 'InstanceId',
        'mqInstanceId' => 'MqInstanceId',
        'mqType' => 'MqType',
        'password' => 'Password',
        'producerId' => 'ProducerId',
        'topic' => 'Topic',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->eventSubscriptionsShrink) {
            $res['EventSubscriptions'] = $this->eventSubscriptionsShrink;
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

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->producerId) {
            $res['ProducerId'] = $this->producerId;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['EventSubscriptions'])) {
            $model->eventSubscriptionsShrink = $map['EventSubscriptions'];
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

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['ProducerId'])) {
            $model->producerId = $map['ProducerId'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
