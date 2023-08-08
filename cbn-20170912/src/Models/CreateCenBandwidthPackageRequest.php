<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenBandwidthPackageRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateCenBandwidthPackageRequest extends Model
{
    /**
     * @description Specifies whether to automatically complete the payment of the bandwidth plan. Valid values:
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * If you set the parameter to false, go to Billing Management to complete the payment after you call this operation. The instance is created only after you complete the payment.
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable the auto-renewal feature. Valid values:
     *
     *   **true**: enables auto-renewal.
     *   **false** (default): disables auto-renewal.
     *
     * > Only subscription bandwidth plans support auto-renewal.
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The auto-renewal duration. Unit: months. Valid values: **0** to **2147483647**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $autoRenewDuration;

    /**
     * @description The maximum bandwidth value of the bandwidth plan. Unit: Mbit/s. Valid values: **2** to **10000**.
     *
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The billing method of the bandwidth plan. Set the value to **PREPAY**, which indicates that the billing method is pay-as-you-go.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $bandwidthPackageChargeType;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the bandwidth plan.
     *
     * @example namedesc
     *
     * @var string
     */
    public $description;

    /**
     * @description The area where the network instance is deployed. Valid values:
     *
     *   **China**: Chinese mainland
     *   **North-America**: North America
     *   **Asia-Pacific**: Asia Pacific
     *   **Europe**: Europe
     *   **Australia**: Australia
     *
     * @example China
     *
     * @var string
     */
    public $geographicRegionAId;

    /**
     * @description The area where the other network instance is deployed. Valid values: Valid values:
     *
     *   **China**: Chinese mainland
     *   **North-America**: North America
     *   **Asia-Pacific**: Asia Pacific
     *   **Europe**: Europe
     *   **Australia**: Australia
     *
     * @example China
     *
     * @var string
     */
    public $geographicRegionBId;

    /**
     * @description The name of the bandwidth plan.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, underscores (\_), and hyphens (-). The name must start with a letter and cannot start with `http://` or `https://`.
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The subscription duration of the bandwidth plan. Default value: 1.
     *
     *   If **PricingCycle** is set to **Month**, set **Period** to a value from **1** to **3** or **6**.
     *   If **PricingCycle** is set to **Year**, set **Period** to a value from **1** to **3**.
     *
     * > This parameter is required when **BandwidthPackageChargeType** is set to **PREPAY**.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The billing cycle of the bandwidth plan. Valid values:
     *
     *   **Month** (default): billed on a monthly basis.
     *   **Year**: billed on an annual basis.
     *
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The information about the tags.
     *
     * You can specify at most 20 tags in each call.
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'autoPay'                    => 'AutoPay',
        'autoRenew'                  => 'AutoRenew',
        'autoRenewDuration'          => 'AutoRenewDuration',
        'bandwidth'                  => 'Bandwidth',
        'bandwidthPackageChargeType' => 'BandwidthPackageChargeType',
        'clientToken'                => 'ClientToken',
        'description'                => 'Description',
        'geographicRegionAId'        => 'GeographicRegionAId',
        'geographicRegionBId'        => 'GeographicRegionBId',
        'name'                       => 'Name',
        'ownerAccount'               => 'OwnerAccount',
        'ownerId'                    => 'OwnerId',
        'period'                     => 'Period',
        'pricingCycle'               => 'PricingCycle',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'tag'                        => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewDuration) {
            $res['AutoRenewDuration'] = $this->autoRenewDuration;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bandwidthPackageChargeType) {
            $res['BandwidthPackageChargeType'] = $this->bandwidthPackageChargeType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->geographicRegionAId) {
            $res['GeographicRegionAId'] = $this->geographicRegionAId;
        }
        if (null !== $this->geographicRegionBId) {
            $res['GeographicRegionBId'] = $this->geographicRegionBId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCenBandwidthPackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewDuration'])) {
            $model->autoRenewDuration = $map['AutoRenewDuration'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BandwidthPackageChargeType'])) {
            $model->bandwidthPackageChargeType = $map['BandwidthPackageChargeType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GeographicRegionAId'])) {
            $model->geographicRegionAId = $map['GeographicRegionAId'];
        }
        if (isset($map['GeographicRegionBId'])) {
            $model->geographicRegionBId = $map['GeographicRegionBId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
