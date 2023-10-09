<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest;

use AlibabaCloud\Tea\Model;

class productInfo extends Model
{
    /**
     * @description Specifies whether to enable burst scaling for the instance.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * > Only specific types of instances support burst scaling. For more information, see [Instance specifications](~~444715~~).
     * @example true
     *
     * @var bool
     */
    public $autoScaling;

    /**
     * @description The retention period of messages. Unit: hours.
     *
     * The storage of ApsaraMQ for RocketMQ messages is in serverless scaling mode. You are charged based on the actual used storage. You can adjust the storage retention period to reduce storage usage and costs. For more information, see [Storage fees](~~427238~~).
     * @example 72
     *
     * @var int
     */
    public $messageRetentionTime;

    /**
     * @description The ratio of the number of messages that you can send to the number of messages that you can receive in the instance.
     *
     * Value values: 0.25 to 1.
     * @example 0.5
     *
     * @var float
     */
    public $sendReceiveRatio;

    /**
     * @var bool
     */
    public $traceOn;
    protected $_name = [
        'autoScaling'          => 'autoScaling',
        'messageRetentionTime' => 'messageRetentionTime',
        'sendReceiveRatio'     => 'sendReceiveRatio',
        'traceOn'              => 'traceOn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoScaling) {
            $res['autoScaling'] = $this->autoScaling;
        }
        if (null !== $this->messageRetentionTime) {
            $res['messageRetentionTime'] = $this->messageRetentionTime;
        }
        if (null !== $this->sendReceiveRatio) {
            $res['sendReceiveRatio'] = $this->sendReceiveRatio;
        }
        if (null !== $this->traceOn) {
            $res['traceOn'] = $this->traceOn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoScaling'])) {
            $model->autoScaling = $map['autoScaling'];
        }
        if (isset($map['messageRetentionTime'])) {
            $model->messageRetentionTime = $map['messageRetentionTime'];
        }
        if (isset($map['sendReceiveRatio'])) {
            $model->sendReceiveRatio = $map['sendReceiveRatio'];
        }
        if (isset($map['traceOn'])) {
            $model->traceOn = $map['traceOn'];
        }

        return $model;
    }
}
