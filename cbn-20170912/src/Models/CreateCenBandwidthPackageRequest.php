<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenBandwidthPackageRequest\tag;

class CreateCenBandwidthPackageRequest extends Model
{
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

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $bandwidthPackageChargeType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

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
     * @var int
     */
    public $period;

    /**
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
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'autoRenewDuration' => 'AutoRenewDuration',
        'bandwidth' => 'Bandwidth',
        'bandwidthPackageChargeType' => 'BandwidthPackageChargeType',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'geographicRegionAId' => 'GeographicRegionAId',
        'geographicRegionBId' => 'GeographicRegionBId',
        'name' => 'Name',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'period' => 'Period',
        'pricingCycle' => 'PricingCycle',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
