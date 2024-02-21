<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class productInfo extends Model
{
    /**
     * @description Specifies whether to enable the elastic TPS feature for the instance.
     *
     * Valid values:
     *
     *   true: enable
     *   false: disable
     *
     * This parameter is valid only when the supportAutoScaling parameter is set to enable.
     * @example true
     *
     * @var bool
     */
    public $autoScaling;

    /**
     * @description The retention period of messages. Unit: hours.
     *
     * The storage of messages in ApsaraMQ for RocketMQ is serverless and scalable. You are charged for message storage based on your actual usage. You can change the retention period of messages to adjust storage capacity. For more information, see [Storage fee](~~427238~~).
     * @example 72
     *
     * @var int
     */
    public $messageRetentionTime;

    /**
     * @description The computing specification that is used to send and receive messages. For information about the upper limit of TPS, see [Instance specifications](~~444715~~).
     *
     * @example rmq.s2.2xlarge
     *
     * @var string
     */
    public $msgProcessSpec;

    /**
     * @description The ratio between sent messages and received messages in the instance.
     *
     * @example 0.5
     *
     * @var float
     */
    public $sendReceiveRatio;

    /**
     * @description Specifies whether to enable the elastic TPS feature for the instance.
     *
     * Valid values:
     *
     *   true: enable
     *   false: disable
     *
     * > The elastic TPS feature is supported by only specific instance editions. For more information, see [Instance specifications](~~444715~~).
     * @example true
     *
     * @var bool
     */
    public $supportAutoScaling;

    /**
     * @description Whether to enable tracking capability. Non-serverless instances are enabled by default, and serverless instances are optional for users.
     *
     * @example true
     *
     * @var bool
     */
    public $traceOn;
    protected $_name = [
        'autoScaling'          => 'autoScaling',
        'messageRetentionTime' => 'messageRetentionTime',
        'msgProcessSpec'       => 'msgProcessSpec',
        'sendReceiveRatio'     => 'sendReceiveRatio',
        'supportAutoScaling'   => 'supportAutoScaling',
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
        if (null !== $this->msgProcessSpec) {
            $res['msgProcessSpec'] = $this->msgProcessSpec;
        }
        if (null !== $this->sendReceiveRatio) {
            $res['sendReceiveRatio'] = $this->sendReceiveRatio;
        }
        if (null !== $this->supportAutoScaling) {
            $res['supportAutoScaling'] = $this->supportAutoScaling;
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
        if (isset($map['msgProcessSpec'])) {
            $model->msgProcessSpec = $map['msgProcessSpec'];
        }
        if (isset($map['sendReceiveRatio'])) {
            $model->sendReceiveRatio = $map['sendReceiveRatio'];
        }
        if (isset($map['supportAutoScaling'])) {
            $model->supportAutoScaling = $map['supportAutoScaling'];
        }
        if (isset($map['traceOn'])) {
            $model->traceOn = $map['traceOn'];
        }

        return $model;
    }
}
