<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateCenBandwidthPackageRequest extends Model
{
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
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $geographicRegionAId;

    /**
     * @var string
     */
    public $geographicRegionBId;

    /**
     * @var string
     */
    public $bandwidthPackageChargeType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $autoRenewDuration;
    protected $_name = [
        'ownerAccount'               => 'OwnerAccount',
        'ownerId'                    => 'OwnerId',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'clientToken'                => 'ClientToken',
        'name'                       => 'Name',
        'description'                => 'Description',
        'bandwidth'                  => 'Bandwidth',
        'geographicRegionAId'        => 'GeographicRegionAId',
        'geographicRegionBId'        => 'GeographicRegionBId',
        'bandwidthPackageChargeType' => 'BandwidthPackageChargeType',
        'period'                     => 'Period',
        'pricingCycle'               => 'PricingCycle',
        'autoPay'                    => 'AutoPay',
        'autoRenew'                  => 'AutoRenew',
        'autoRenewDuration'          => 'AutoRenewDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->geographicRegionAId) {
            $res['GeographicRegionAId'] = $this->geographicRegionAId;
        }
        if (null !== $this->geographicRegionBId) {
            $res['GeographicRegionBId'] = $this->geographicRegionBId;
        }
        if (null !== $this->bandwidthPackageChargeType) {
            $res['BandwidthPackageChargeType'] = $this->bandwidthPackageChargeType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewDuration) {
            $res['AutoRenewDuration'] = $this->autoRenewDuration;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['GeographicRegionAId'])) {
            $model->geographicRegionAId = $map['GeographicRegionAId'];
        }
        if (isset($map['GeographicRegionBId'])) {
            $model->geographicRegionBId = $map['GeographicRegionBId'];
        }
        if (isset($map['BandwidthPackageChargeType'])) {
            $model->bandwidthPackageChargeType = $map['BandwidthPackageChargeType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewDuration'])) {
            $model->autoRenewDuration = $map['AutoRenewDuration'];
        }

        return $model;
    }
}
