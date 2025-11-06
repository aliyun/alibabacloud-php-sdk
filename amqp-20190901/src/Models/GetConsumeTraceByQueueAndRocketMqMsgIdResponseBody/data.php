<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetConsumeTraceByQueueAndRocketMqMsgIdResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $autoAckTag;

    /**
     * @var string
     */
    public $clientAddress;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $consumeType;

    /**
     * @var string
     */
    public $consumerTag;

    /**
     * @var string
     */
    public $currentStatus;

    /**
     * @var string
     */
    public $deliveryErrorInfo;

    /**
     * @var string
     */
    public $deliveryTag;

    /**
     * @var mixed[]
     */
    public $dlqQueueMsgIdMap;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var bool
     */
    public $showAckIcon;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'autoAckTag' => 'AutoAckTag',
        'clientAddress' => 'ClientAddress',
        'code' => 'Code',
        'consumeType' => 'ConsumeType',
        'consumerTag' => 'ConsumerTag',
        'currentStatus' => 'CurrentStatus',
        'deliveryErrorInfo' => 'DeliveryErrorInfo',
        'deliveryTag' => 'DeliveryTag',
        'dlqQueueMsgIdMap' => 'DlqQueueMsgIdMap',
        'reason' => 'Reason',
        'showAckIcon' => 'ShowAckIcon',
        'timeStamp' => 'TimeStamp',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->dlqQueueMsgIdMap)) {
            Model::validateArray($this->dlqQueueMsgIdMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoAckTag) {
            $res['AutoAckTag'] = $this->autoAckTag;
        }

        if (null !== $this->clientAddress) {
            $res['ClientAddress'] = $this->clientAddress;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->consumeType) {
            $res['ConsumeType'] = $this->consumeType;
        }

        if (null !== $this->consumerTag) {
            $res['ConsumerTag'] = $this->consumerTag;
        }

        if (null !== $this->currentStatus) {
            $res['CurrentStatus'] = $this->currentStatus;
        }

        if (null !== $this->deliveryErrorInfo) {
            $res['DeliveryErrorInfo'] = $this->deliveryErrorInfo;
        }

        if (null !== $this->deliveryTag) {
            $res['DeliveryTag'] = $this->deliveryTag;
        }

        if (null !== $this->dlqQueueMsgIdMap) {
            if (\is_array($this->dlqQueueMsgIdMap)) {
                $res['DlqQueueMsgIdMap'] = [];
                foreach ($this->dlqQueueMsgIdMap as $key1 => $value1) {
                    $res['DlqQueueMsgIdMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->showAckIcon) {
            $res['ShowAckIcon'] = $this->showAckIcon;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AutoAckTag'])) {
            $model->autoAckTag = $map['AutoAckTag'];
        }

        if (isset($map['ClientAddress'])) {
            $model->clientAddress = $map['ClientAddress'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ConsumeType'])) {
            $model->consumeType = $map['ConsumeType'];
        }

        if (isset($map['ConsumerTag'])) {
            $model->consumerTag = $map['ConsumerTag'];
        }

        if (isset($map['CurrentStatus'])) {
            $model->currentStatus = $map['CurrentStatus'];
        }

        if (isset($map['DeliveryErrorInfo'])) {
            $model->deliveryErrorInfo = $map['DeliveryErrorInfo'];
        }

        if (isset($map['DeliveryTag'])) {
            $model->deliveryTag = $map['DeliveryTag'];
        }

        if (isset($map['DlqQueueMsgIdMap'])) {
            if (!empty($map['DlqQueueMsgIdMap'])) {
                $model->dlqQueueMsgIdMap = [];
                foreach ($map['DlqQueueMsgIdMap'] as $key1 => $value1) {
                    $model->dlqQueueMsgIdMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['ShowAckIcon'])) {
            $model->showAckIcon = $map['ShowAckIcon'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
