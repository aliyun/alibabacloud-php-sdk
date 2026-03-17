<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class CreateSmartAccessGatewayRequest extends Model
{
    /**
     * @var bool
     */
    public $alreadyHaveSag;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $buyerMessage;

    /**
     * @var string
     */
    public $CPEVersion;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $haType;

    /**
     * @var string
     */
    public $hardWareSpec;

    /**
     * @var int
     */
    public $maxBandWidth;

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
    public $receiverAddress;

    /**
     * @var string
     */
    public $receiverCity;

    /**
     * @var string
     */
    public $receiverCountry;

    /**
     * @var string
     */
    public $receiverDistrict;

    /**
     * @var string
     */
    public $receiverEmail;

    /**
     * @var string
     */
    public $receiverMobile;

    /**
     * @var string
     */
    public $receiverName;

    /**
     * @var string
     */
    public $receiverPhone;

    /**
     * @var string
     */
    public $receiverState;

    /**
     * @var string
     */
    public $receiverTown;

    /**
     * @var string
     */
    public $receiverZip;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'alreadyHaveSag' => 'AlreadyHaveSag',
        'autoPay' => 'AutoPay',
        'buyerMessage' => 'BuyerMessage',
        'CPEVersion' => 'CPEVersion',
        'chargeType' => 'ChargeType',
        'description' => 'Description',
        'haType' => 'HaType',
        'hardWareSpec' => 'HardWareSpec',
        'maxBandWidth' => 'MaxBandWidth',
        'name' => 'Name',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'period' => 'Period',
        'receiverAddress' => 'ReceiverAddress',
        'receiverCity' => 'ReceiverCity',
        'receiverCountry' => 'ReceiverCountry',
        'receiverDistrict' => 'ReceiverDistrict',
        'receiverEmail' => 'ReceiverEmail',
        'receiverMobile' => 'ReceiverMobile',
        'receiverName' => 'ReceiverName',
        'receiverPhone' => 'ReceiverPhone',
        'receiverState' => 'ReceiverState',
        'receiverTown' => 'ReceiverTown',
        'receiverZip' => 'ReceiverZip',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alreadyHaveSag) {
            $res['AlreadyHaveSag'] = $this->alreadyHaveSag;
        }

        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->buyerMessage) {
            $res['BuyerMessage'] = $this->buyerMessage;
        }

        if (null !== $this->CPEVersion) {
            $res['CPEVersion'] = $this->CPEVersion;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->haType) {
            $res['HaType'] = $this->haType;
        }

        if (null !== $this->hardWareSpec) {
            $res['HardWareSpec'] = $this->hardWareSpec;
        }

        if (null !== $this->maxBandWidth) {
            $res['MaxBandWidth'] = $this->maxBandWidth;
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

        if (null !== $this->receiverAddress) {
            $res['ReceiverAddress'] = $this->receiverAddress;
        }

        if (null !== $this->receiverCity) {
            $res['ReceiverCity'] = $this->receiverCity;
        }

        if (null !== $this->receiverCountry) {
            $res['ReceiverCountry'] = $this->receiverCountry;
        }

        if (null !== $this->receiverDistrict) {
            $res['ReceiverDistrict'] = $this->receiverDistrict;
        }

        if (null !== $this->receiverEmail) {
            $res['ReceiverEmail'] = $this->receiverEmail;
        }

        if (null !== $this->receiverMobile) {
            $res['ReceiverMobile'] = $this->receiverMobile;
        }

        if (null !== $this->receiverName) {
            $res['ReceiverName'] = $this->receiverName;
        }

        if (null !== $this->receiverPhone) {
            $res['ReceiverPhone'] = $this->receiverPhone;
        }

        if (null !== $this->receiverState) {
            $res['ReceiverState'] = $this->receiverState;
        }

        if (null !== $this->receiverTown) {
            $res['ReceiverTown'] = $this->receiverTown;
        }

        if (null !== $this->receiverZip) {
            $res['ReceiverZip'] = $this->receiverZip;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['AlreadyHaveSag'])) {
            $model->alreadyHaveSag = $map['AlreadyHaveSag'];
        }

        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['BuyerMessage'])) {
            $model->buyerMessage = $map['BuyerMessage'];
        }

        if (isset($map['CPEVersion'])) {
            $model->CPEVersion = $map['CPEVersion'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['HaType'])) {
            $model->haType = $map['HaType'];
        }

        if (isset($map['HardWareSpec'])) {
            $model->hardWareSpec = $map['HardWareSpec'];
        }

        if (isset($map['MaxBandWidth'])) {
            $model->maxBandWidth = $map['MaxBandWidth'];
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

        if (isset($map['ReceiverAddress'])) {
            $model->receiverAddress = $map['ReceiverAddress'];
        }

        if (isset($map['ReceiverCity'])) {
            $model->receiverCity = $map['ReceiverCity'];
        }

        if (isset($map['ReceiverCountry'])) {
            $model->receiverCountry = $map['ReceiverCountry'];
        }

        if (isset($map['ReceiverDistrict'])) {
            $model->receiverDistrict = $map['ReceiverDistrict'];
        }

        if (isset($map['ReceiverEmail'])) {
            $model->receiverEmail = $map['ReceiverEmail'];
        }

        if (isset($map['ReceiverMobile'])) {
            $model->receiverMobile = $map['ReceiverMobile'];
        }

        if (isset($map['ReceiverName'])) {
            $model->receiverName = $map['ReceiverName'];
        }

        if (isset($map['ReceiverPhone'])) {
            $model->receiverPhone = $map['ReceiverPhone'];
        }

        if (isset($map['ReceiverState'])) {
            $model->receiverState = $map['ReceiverState'];
        }

        if (isset($map['ReceiverTown'])) {
            $model->receiverTown = $map['ReceiverTown'];
        }

        if (isset($map['ReceiverZip'])) {
            $model->receiverZip = $map['ReceiverZip'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
