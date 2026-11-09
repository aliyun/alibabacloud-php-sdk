<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class GetMqttTicketResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $expireTimeStamp;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $mqttEndpoint;

    /**
     * @var string
     */
    public $mqttGroupId;

    /**
     * @var string
     */
    public $mqttInstanceId;

    /**
     * @var string
     */
    public $mqttPassword;

    /**
     * @var string
     */
    public $mqttUsername;

    /**
     * @var string
     */
    public $mqttVPCEndpoint;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $success;

    /**
     * @var string
     */
    public $topicList;
    protected $_name = [
        'code' => 'Code',
        'expireTimeStamp' => 'ExpireTimeStamp',
        'message' => 'Message',
        'mqttEndpoint' => 'MqttEndpoint',
        'mqttGroupId' => 'MqttGroupId',
        'mqttInstanceId' => 'MqttInstanceId',
        'mqttPassword' => 'MqttPassword',
        'mqttUsername' => 'MqttUsername',
        'mqttVPCEndpoint' => 'MqttVPCEndpoint',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'topicList' => 'TopicList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->expireTimeStamp) {
            $res['ExpireTimeStamp'] = $this->expireTimeStamp;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->mqttEndpoint) {
            $res['MqttEndpoint'] = $this->mqttEndpoint;
        }

        if (null !== $this->mqttGroupId) {
            $res['MqttGroupId'] = $this->mqttGroupId;
        }

        if (null !== $this->mqttInstanceId) {
            $res['MqttInstanceId'] = $this->mqttInstanceId;
        }

        if (null !== $this->mqttPassword) {
            $res['MqttPassword'] = $this->mqttPassword;
        }

        if (null !== $this->mqttUsername) {
            $res['MqttUsername'] = $this->mqttUsername;
        }

        if (null !== $this->mqttVPCEndpoint) {
            $res['MqttVPCEndpoint'] = $this->mqttVPCEndpoint;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->topicList) {
            $res['TopicList'] = $this->topicList;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ExpireTimeStamp'])) {
            $model->expireTimeStamp = $map['ExpireTimeStamp'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['MqttEndpoint'])) {
            $model->mqttEndpoint = $map['MqttEndpoint'];
        }

        if (isset($map['MqttGroupId'])) {
            $model->mqttGroupId = $map['MqttGroupId'];
        }

        if (isset($map['MqttInstanceId'])) {
            $model->mqttInstanceId = $map['MqttInstanceId'];
        }

        if (isset($map['MqttPassword'])) {
            $model->mqttPassword = $map['MqttPassword'];
        }

        if (isset($map['MqttUsername'])) {
            $model->mqttUsername = $map['MqttUsername'];
        }

        if (isset($map['MqttVPCEndpoint'])) {
            $model->mqttVPCEndpoint = $map['MqttVPCEndpoint'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TopicList'])) {
            $model->topicList = $map['TopicList'];
        }

        return $model;
    }
}
