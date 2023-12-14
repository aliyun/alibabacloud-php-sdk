<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeMqttConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $brokerUrl;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $internalBrokerUrl;

    /**
     * @var bool
     */
    public $isEnabled;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $mqttInstanceId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $publishTopic;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $subscribeTopic;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'authType'          => 'AuthType',
        'brokerUrl'         => 'BrokerUrl',
        'code'              => 'Code',
        'groupId'           => 'GroupId',
        'internalBrokerUrl' => 'InternalBrokerUrl',
        'isEnabled'         => 'IsEnabled',
        'message'           => 'Message',
        'mqttInstanceId'    => 'MqttInstanceId',
        'password'          => 'Password',
        'publishTopic'      => 'PublishTopic',
        'requestId'         => 'RequestId',
        'subscribeTopic'    => 'SubscribeTopic',
        'success'           => 'Success',
        'username'          => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->brokerUrl) {
            $res['BrokerUrl'] = $this->brokerUrl;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->internalBrokerUrl) {
            $res['InternalBrokerUrl'] = $this->internalBrokerUrl;
        }
        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->mqttInstanceId) {
            $res['MqttInstanceId'] = $this->mqttInstanceId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->publishTopic) {
            $res['PublishTopic'] = $this->publishTopic;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subscribeTopic) {
            $res['SubscribeTopic'] = $this->subscribeTopic;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMqttConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['BrokerUrl'])) {
            $model->brokerUrl = $map['BrokerUrl'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InternalBrokerUrl'])) {
            $model->internalBrokerUrl = $map['InternalBrokerUrl'];
        }
        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MqttInstanceId'])) {
            $model->mqttInstanceId = $map['MqttInstanceId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PublishTopic'])) {
            $model->publishTopic = $map['PublishTopic'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubscribeTopic'])) {
            $model->subscribeTopic = $map['SubscribeTopic'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
