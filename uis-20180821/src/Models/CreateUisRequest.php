<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models;

use AlibabaCloud\Tea\Model;

class CreateUisRequest extends Model
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
    public $regionId;

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
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $bandwidthType;

    /**
     * @var string
     */
    public $uisProtocol;

    /**
     * @var int
     */
    public $connectionBandwidth;

    /**
     * @var int
     */
    public $connectionCount;

    /**
     * @var string
     */
    public $serviceRegion;

    /**
     * @var string
     */
    public $accessType;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'clientToken'          => 'ClientToken',
        'name'                 => 'Name',
        'description'          => 'Description',
        'instanceChargeType'   => 'InstanceChargeType',
        'internetChargeType'   => 'InternetChargeType',
        'autoPay'              => 'AutoPay',
        'duration'             => 'Duration',
        'pricingCycle'         => 'PricingCycle',
        'bandwidth'            => 'Bandwidth',
        'bandwidthType'        => 'BandwidthType',
        'uisProtocol'          => 'UisProtocol',
        'connectionBandwidth'  => 'ConnectionBandwidth',
        'connectionCount'      => 'ConnectionCount',
        'serviceRegion'        => 'ServiceRegion',
        'accessType'           => 'AccessType',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bandwidthType) {
            $res['BandwidthType'] = $this->bandwidthType;
        }
        if (null !== $this->uisProtocol) {
            $res['UisProtocol'] = $this->uisProtocol;
        }
        if (null !== $this->connectionBandwidth) {
            $res['ConnectionBandwidth'] = $this->connectionBandwidth;
        }
        if (null !== $this->connectionCount) {
            $res['ConnectionCount'] = $this->connectionCount;
        }
        if (null !== $this->serviceRegion) {
            $res['ServiceRegion'] = $this->serviceRegion;
        }
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUisRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BandwidthType'])) {
            $model->bandwidthType = $map['BandwidthType'];
        }
        if (isset($map['UisProtocol'])) {
            $model->uisProtocol = $map['UisProtocol'];
        }
        if (isset($map['ConnectionBandwidth'])) {
            $model->connectionBandwidth = $map['ConnectionBandwidth'];
        }
        if (isset($map['ConnectionCount'])) {
            $model->connectionCount = $map['ConnectionCount'];
        }
        if (isset($map['ServiceRegion'])) {
            $model->serviceRegion = $map['ServiceRegion'];
        }
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }

        return $model;
    }
}
