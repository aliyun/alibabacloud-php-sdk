<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyCommonBandwidthPackagePayTypeRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $kbpsBandwidth;

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
    public $payType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceBid;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $resourceUid;
    protected $_name = [
        'autoPay'              => 'AutoPay',
        'bandwidth'            => 'Bandwidth',
        'bandwidthPackageId'   => 'BandwidthPackageId',
        'duration'             => 'Duration',
        'kbpsBandwidth'        => 'KbpsBandwidth',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'payType'              => 'PayType',
        'pricingCycle'         => 'PricingCycle',
        'regionId'             => 'RegionId',
        'resourceBid'          => 'ResourceBid',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'resourceUid'          => 'ResourceUid',
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
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->kbpsBandwidth) {
            $res['KbpsBandwidth'] = $this->kbpsBandwidth;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceBid) {
            $res['ResourceBid'] = $this->resourceBid;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceUid) {
            $res['ResourceUid'] = $this->resourceUid;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['KbpsBandwidth'])) {
            $model->kbpsBandwidth = $map['KbpsBandwidth'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceBid'])) {
            $model->resourceBid = $map['ResourceBid'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceUid'])) {
            $model->resourceUid = $map['ResourceUid'];
        }

        return $model;
    }
}
