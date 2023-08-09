<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceNetworkSpecRequest extends Model
{
    /**
     * @description Specifies whether to assign a public IP address.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $allocatePublicIp;

    /**
     * @description Specifies whether to automatically complete the payment. Valid values:
     *
     *   true: After you modify the bandwidth configurations, the payment is automatically complete. Make sure that your account balance is sufficient when you set AutoPay to true. If your account balance is insufficient, your order cannot be paid in the ECS console and becomes invalid. You must cancel the order.
     *   false: After you modify the bandwidth configurations, an order is generated but the payment is not complete. If your account balance is insufficient, you can set AutoPay to false to generate an unpaid order. Then, you can log on to the [ECS console](https://ecs.console.aliyun.com) to pay for the order.
     *
     * Default value: true.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The **token** can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The end time of the temporary bandwidth upgrade. Specify the time in the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddThhZ format. The time must be in UTC and accurate to **hours** (hh).
     *
     * > The interval between the end time and the start time of the temporary bandwidth upgrade must be greater than or equal to 3 hours.
     * @example 2017-12-06T22Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description > This parameter is in invitational preview and is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $ISP;

    /**
     * @description The ID of the instance for which you want to modify bandwidth configurations.
     *
     * @example i-bp67acfmxazb4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The maximum inbound public bandwidth. Unit: Mbit/s. Valid values:
     *
     *   If the purchased outbound public bandwidth is less than or equal to 10 Mbit/s, the valid values of this parameter range from 1 to 10, and the default value is 10.
     *   If the purchased outbound public bandwidth is greater than 10 Mbit/s, the valid values of this parameter range from 1 to the value of `InternetMaxBandwidthOut`, and the default value is the value of `InternetMaxBandwidthOut`.
     *
     * @example 10
     *
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @description The maximum outbound public bandwidth. Unit: Mbit/s. Valid values: 0 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description The billing method for network usage. Valid values:
     *
     *   PayByBandwidth
     *   PayByTraffic
     *
     * > When the **pay-by-traffic** billing method for network usage is used, the maximum inbound and outbound bandwidth values are used as the upper limits of bandwidths instead of guaranteed values. In scenarios where demand outstrips resource supplies, these maximum bandwidths may be limited. If you want guaranteed bandwidths for your instance, use the **pay-by-bandwidth** billing method for network usage.
     * @example PayByTraffic
     *
     * @var string
     */
    public $networkChargeType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The start time of the temporary bandwidth upgrade. Specify the time in the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddThh:mmZ format. The time must be in UTC and accurate to **minutes** (mm).
     *
     * @example 2017-12-05T22:40Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'allocatePublicIp'        => 'AllocatePublicIp',
        'autoPay'                 => 'AutoPay',
        'clientToken'             => 'ClientToken',
        'endTime'                 => 'EndTime',
        'ISP'                     => 'ISP',
        'instanceId'              => 'InstanceId',
        'internetMaxBandwidthIn'  => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'networkChargeType'       => 'NetworkChargeType',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'startTime'               => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocatePublicIp) {
            $res['AllocatePublicIp'] = $this->allocatePublicIp;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->networkChargeType) {
            $res['NetworkChargeType'] = $this->networkChargeType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceNetworkSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocatePublicIp'])) {
            $model->allocatePublicIp = $map['AllocatePublicIp'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['NetworkChargeType'])) {
            $model->networkChargeType = $map['NetworkChargeType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
