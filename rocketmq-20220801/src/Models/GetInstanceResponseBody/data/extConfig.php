<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class extConfig extends Model
{
    /**
     * @description The authentication type of the instance.
     *
     * Valid values:
     *
     *   default: intelligent authentication
     *
     * @example default
     *
     * @var string
     */
    public $aclType;

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
     * @description The Internet bandwidth. Unit: MB/s.
     *
     * @example 10
     *
     * @var int
     */
    public $flowOutBandwidth;

    /**
     * @description The metering method for Internet usage.
     *
     * Valid values:
     *
     *   PayByTraffic: pay-by-traffic
     *   paybybandwidth: pay-by-bandwidth
     *   uninvolved: N/A
     *
     * @example payByBandwidth
     *
     * @var string
     */
    public $flowOutType;

    /**
     * @description Specifies whether to enable the Internet access feature.
     *
     * Valid values:
     *
     *   enable
     *   disable
     *
     * By default, ApsaraMQ for RocketMQ instances are accessed in virtual private clouds (VPCs). If you enable the Internet access feature, you are charged for Internet outbound bandwidth. For more information, see [Internet access fee](~~427240~~).
     * @example enable
     *
     * @var string
     */
    public $internetSpec;

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
     * @description Specifies whether the elastic TPS feature is supported by the instance.
     *
     * Valid values:
     *
     *   true: enable
     *   false: disable
     *
     * > The elastic TPS feature is supported only by specific instance editions. For more information, see [Instance specifications](~~444715~~).
     * @example true
     *
     * @var bool
     */
    public $supportAutoScaling;
    protected $_name = [
        'aclType'              => 'aclType',
        'autoScaling'          => 'autoScaling',
        'flowOutBandwidth'     => 'flowOutBandwidth',
        'flowOutType'          => 'flowOutType',
        'internetSpec'         => 'internetSpec',
        'messageRetentionTime' => 'messageRetentionTime',
        'msgProcessSpec'       => 'msgProcessSpec',
        'sendReceiveRatio'     => 'sendReceiveRatio',
        'supportAutoScaling'   => 'supportAutoScaling',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclType) {
            $res['aclType'] = $this->aclType;
        }
        if (null !== $this->autoScaling) {
            $res['autoScaling'] = $this->autoScaling;
        }
        if (null !== $this->flowOutBandwidth) {
            $res['flowOutBandwidth'] = $this->flowOutBandwidth;
        }
        if (null !== $this->flowOutType) {
            $res['flowOutType'] = $this->flowOutType;
        }
        if (null !== $this->internetSpec) {
            $res['internetSpec'] = $this->internetSpec;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aclType'])) {
            $model->aclType = $map['aclType'];
        }
        if (isset($map['autoScaling'])) {
            $model->autoScaling = $map['autoScaling'];
        }
        if (isset($map['flowOutBandwidth'])) {
            $model->flowOutBandwidth = $map['flowOutBandwidth'];
        }
        if (isset($map['flowOutType'])) {
            $model->flowOutType = $map['flowOutType'];
        }
        if (isset($map['internetSpec'])) {
            $model->internetSpec = $map['internetSpec'];
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

        return $model;
    }
}
