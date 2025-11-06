<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetSendTraceByMsgIdResponseBody\data;

use AlibabaCloud\Dara\Model;

class voList extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $exchange;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $messageBodyLength;

    /**
     * @var mixed[]
     */
    public $messagePropertiesMap;

    /**
     * @var mixed[]
     */
    public $queueMsgIdMap;

    /**
     * @var string
     */
    public $remoteAddress;

    /**
     * @var string
     */
    public $routingKey;

    /**
     * @var string
     */
    public $sendErrorInfo;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $vhost;
    protected $_name = [
        'code' => 'Code',
        'exchange' => 'Exchange',
        'instanceId' => 'InstanceId',
        'messageBodyLength' => 'MessageBodyLength',
        'messagePropertiesMap' => 'MessagePropertiesMap',
        'queueMsgIdMap' => 'QueueMsgIdMap',
        'remoteAddress' => 'RemoteAddress',
        'routingKey' => 'RoutingKey',
        'sendErrorInfo' => 'SendErrorInfo',
        'timeStamp' => 'TimeStamp',
        'userId' => 'UserId',
        'vhost' => 'Vhost',
    ];

    public function validate()
    {
        if (\is_array($this->messagePropertiesMap)) {
            Model::validateArray($this->messagePropertiesMap);
        }
        if (\is_array($this->queueMsgIdMap)) {
            Model::validateArray($this->queueMsgIdMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->exchange) {
            $res['Exchange'] = $this->exchange;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->messageBodyLength) {
            $res['MessageBodyLength'] = $this->messageBodyLength;
        }

        if (null !== $this->messagePropertiesMap) {
            if (\is_array($this->messagePropertiesMap)) {
                $res['MessagePropertiesMap'] = [];
                foreach ($this->messagePropertiesMap as $key1 => $value1) {
                    $res['MessagePropertiesMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->queueMsgIdMap) {
            if (\is_array($this->queueMsgIdMap)) {
                $res['QueueMsgIdMap'] = [];
                foreach ($this->queueMsgIdMap as $key1 => $value1) {
                    $res['QueueMsgIdMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->remoteAddress) {
            $res['RemoteAddress'] = $this->remoteAddress;
        }

        if (null !== $this->routingKey) {
            $res['RoutingKey'] = $this->routingKey;
        }

        if (null !== $this->sendErrorInfo) {
            $res['SendErrorInfo'] = $this->sendErrorInfo;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->vhost) {
            $res['Vhost'] = $this->vhost;
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

        if (isset($map['Exchange'])) {
            $model->exchange = $map['Exchange'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MessageBodyLength'])) {
            $model->messageBodyLength = $map['MessageBodyLength'];
        }

        if (isset($map['MessagePropertiesMap'])) {
            if (!empty($map['MessagePropertiesMap'])) {
                $model->messagePropertiesMap = [];
                foreach ($map['MessagePropertiesMap'] as $key1 => $value1) {
                    $model->messagePropertiesMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['QueueMsgIdMap'])) {
            if (!empty($map['QueueMsgIdMap'])) {
                $model->queueMsgIdMap = [];
                foreach ($map['QueueMsgIdMap'] as $key1 => $value1) {
                    $model->queueMsgIdMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['RemoteAddress'])) {
            $model->remoteAddress = $map['RemoteAddress'];
        }

        if (isset($map['RoutingKey'])) {
            $model->routingKey = $map['RoutingKey'];
        }

        if (isset($map['SendErrorInfo'])) {
            $model->sendErrorInfo = $map['SendErrorInfo'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['Vhost'])) {
            $model->vhost = $map['Vhost'];
        }

        return $model;
    }
}
