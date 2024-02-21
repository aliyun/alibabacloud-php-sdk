<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest;

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
     * >  The elastic TPS feature is supported only by instances of specific editions. For more information, see [Instance editions](~~444715~~).
     * @example true
     *
     * @var bool
     */
    public $autoScaling;

    /**
     * @description The billing method.
     *
     * Valid values:
     *
     *   provisioned
     *   ondemand
     *
     * @example provisioned
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description This parameter is no longer used. You do not need to configure this parameter.
     *
     * @example xxxx
     *
     * @var string
     */
    public $intranetSpec;

    /**
     * @description The retention period of messages. Unit: hours.
     *
     * ApsaraMQ for RocketMQ supports serverless scaling of message storage. You are charged storage fees based on your actual storage usage. You can change the retention period of messages to manage storage capacity. For more information, see [Storage fees](~~427238~~).
     * @example 72
     *
     * @var int
     */
    public $messageRetentionTime;

    /**
     * @description The computing specification that specifies the messaging transactions per second (TPS) of the instance. For information about computing specification limits, see [Instance specifications](~~444715~~).
     *
     * @example rmq.s2.2xlarge
     *
     * @var string
     */
    public $msgProcessSpec;

    /**
     * @description The proportion of message sending TPS to the messaging TPS on the instance.
     *
     * Valid values: 0 to 1. Default value: 0.5.
     * @example 0.5
     *
     * @var float
     */
    public $sendReceiveRatio;
    protected $_name = [
        'autoScaling'          => 'autoScaling',
        'chargeType'           => 'chargeType',
        'intranetSpec'         => 'intranetSpec',
        'messageRetentionTime' => 'messageRetentionTime',
        'msgProcessSpec'       => 'msgProcessSpec',
        'sendReceiveRatio'     => 'sendReceiveRatio',
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
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }
        if (null !== $this->intranetSpec) {
            $res['intranetSpec'] = $this->intranetSpec;
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
        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }
        if (isset($map['intranetSpec'])) {
            $model->intranetSpec = $map['intranetSpec'];
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

        return $model;
    }
}
