<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyCommonBandwidthPackagePayTypeRequest extends Model
{
    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $autoPay;

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
    public $bandwidth;

    /**
     * @var string
     */
    public $kbpsBandwidth;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $resourceBid;

    /**
     * @var int
     */
    public $resourceUid;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'bandwidthPackageId'   => 'BandwidthPackageId',
        'payType'              => 'PayType',
        'pricingCycle'         => 'PricingCycle',
        'duration'             => 'Duration',
        'autoPay'              => 'AutoPay',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'bandwidth'            => 'Bandwidth',
        'kbpsBandwidth'        => 'KbpsBandwidth',
        'ownerAccount'         => 'OwnerAccount',
        'resourceBid'          => 'ResourceBid',
        'resourceUid'          => 'ResourceUid',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
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
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->kbpsBandwidth) {
            $res['KbpsBandwidth'] = $this->kbpsBandwidth;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->resourceBid) {
            $res['ResourceBid'] = $this->resourceBid;
        }
        if (null !== $this->resourceUid) {
            $res['ResourceUid'] = $this->resourceUid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCommonBandwidthPackagePayTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['KbpsBandwidth'])) {
            $model->kbpsBandwidth = $map['KbpsBandwidth'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['ResourceBid'])) {
            $model->resourceBid = $map['ResourceBid'];
        }
        if (isset($map['ResourceUid'])) {
            $model->resourceUid = $map['ResourceUid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
