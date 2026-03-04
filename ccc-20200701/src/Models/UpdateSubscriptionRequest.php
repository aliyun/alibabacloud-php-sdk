<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class UpdateSubscriptionRequest extends Model
{
    /**
     * @var string
     */
    public $accessPoint;

    /**
     * @var int
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $defaultTopic;

    /**
     * @var string
     */
    public $eventSubscriptionsJson;

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
    public $username;
    protected $_name = [
        'accessPoint' => 'AccessPoint',
        'aliyunUid' => 'AliyunUid',
        'defaultTopic' => 'DefaultTopic',
        'eventSubscriptionsJson' => 'EventSubscriptionsJson',
        'instanceId' => 'InstanceId',
        'mqInstanceId' => 'MqInstanceId',
        'mqType' => 'MqType',
        'password' => 'Password',
        'producerId' => 'ProducerId',
        'username' => 'Username',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPoint) {
            $res['AccessPoint'] = $this->accessPoint;
        }

        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->defaultTopic) {
            $res['DefaultTopic'] = $this->defaultTopic;
        }

        if (null !== $this->eventSubscriptionsJson) {
            $res['EventSubscriptionsJson'] = $this->eventSubscriptionsJson;
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

        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

        if (isset($map['DefaultTopic'])) {
            $model->defaultTopic = $map['DefaultTopic'];
        }

        if (isset($map['EventSubscriptionsJson'])) {
            $model->eventSubscriptionsJson = $map['EventSubscriptionsJson'];
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

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
