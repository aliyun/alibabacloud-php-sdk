<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class CreateSmartAccessGatewayRequest extends Model
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
    public $description;

    /**
     * @var int
     */
    public $period;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $hardWareSpec;

    /**
     * @var string
     */
    public $receiverCountry;

    /**
     * @var string
     */
    public $receiverState;

    /**
     * @var string
     */
    public $receiverCity;

    /**
     * @var string
     */
    public $receiverDistrict;

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
    public $receiverPhone;

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
    public $receiverEmail;

    /**
     * @var string
     */
    public $buyerMessage;

    /**
     * @var string
     */
    public $receiverAddress;

    /**
     * @var string
     */
    public $haType;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $dataPlan;

    /**
     * @var bool
     */
    public $alreadyHaveSag;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'maxBandWidth'         => 'MaxBandWidth',
        'name'                 => 'Name',
        'description'          => 'Description',
        'period'               => 'Period',
        'autoPay'              => 'AutoPay',
        'hardWareSpec'         => 'HardWareSpec',
        'receiverCountry'      => 'ReceiverCountry',
        'receiverState'        => 'ReceiverState',
        'receiverCity'         => 'ReceiverCity',
        'receiverDistrict'     => 'ReceiverDistrict',
        'receiverTown'         => 'ReceiverTown',
        'receiverZip'          => 'ReceiverZip',
        'receiverPhone'        => 'ReceiverPhone',
        'receiverMobile'       => 'ReceiverMobile',
        'receiverName'         => 'ReceiverName',
        'receiverEmail'        => 'ReceiverEmail',
        'buyerMessage'         => 'BuyerMessage',
        'receiverAddress'      => 'ReceiverAddress',
        'haType'               => 'HaType',
        'chargeType'           => 'ChargeType',
        'userCount'            => 'UserCount',
        'instanceType'         => 'InstanceType',
        'dataPlan'             => 'DataPlan',
        'alreadyHaveSag'       => 'AlreadyHaveSag',
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
        if (null !== $this->maxBandWidth) {
            $res['MaxBandWidth'] = $this->maxBandWidth;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->hardWareSpec) {
            $res['HardWareSpec'] = $this->hardWareSpec;
        }
        if (null !== $this->receiverCountry) {
            $res['ReceiverCountry'] = $this->receiverCountry;
        }
        if (null !== $this->receiverState) {
            $res['ReceiverState'] = $this->receiverState;
        }
        if (null !== $this->receiverCity) {
            $res['ReceiverCity'] = $this->receiverCity;
        }
        if (null !== $this->receiverDistrict) {
            $res['ReceiverDistrict'] = $this->receiverDistrict;
        }
        if (null !== $this->receiverTown) {
            $res['ReceiverTown'] = $this->receiverTown;
        }
        if (null !== $this->receiverZip) {
            $res['ReceiverZip'] = $this->receiverZip;
        }
        if (null !== $this->receiverPhone) {
            $res['ReceiverPhone'] = $this->receiverPhone;
        }
        if (null !== $this->receiverMobile) {
            $res['ReceiverMobile'] = $this->receiverMobile;
        }
        if (null !== $this->receiverName) {
            $res['ReceiverName'] = $this->receiverName;
        }
        if (null !== $this->receiverEmail) {
            $res['ReceiverEmail'] = $this->receiverEmail;
        }
        if (null !== $this->buyerMessage) {
            $res['BuyerMessage'] = $this->buyerMessage;
        }
        if (null !== $this->receiverAddress) {
            $res['ReceiverAddress'] = $this->receiverAddress;
        }
        if (null !== $this->haType) {
            $res['HaType'] = $this->haType;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->dataPlan) {
            $res['DataPlan'] = $this->dataPlan;
        }
        if (null !== $this->alreadyHaveSag) {
            $res['AlreadyHaveSag'] = $this->alreadyHaveSag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSmartAccessGatewayRequest
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
        if (isset($map['MaxBandWidth'])) {
            $model->maxBandWidth = $map['MaxBandWidth'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['HardWareSpec'])) {
            $model->hardWareSpec = $map['HardWareSpec'];
        }
        if (isset($map['ReceiverCountry'])) {
            $model->receiverCountry = $map['ReceiverCountry'];
        }
        if (isset($map['ReceiverState'])) {
            $model->receiverState = $map['ReceiverState'];
        }
        if (isset($map['ReceiverCity'])) {
            $model->receiverCity = $map['ReceiverCity'];
        }
        if (isset($map['ReceiverDistrict'])) {
            $model->receiverDistrict = $map['ReceiverDistrict'];
        }
        if (isset($map['ReceiverTown'])) {
            $model->receiverTown = $map['ReceiverTown'];
        }
        if (isset($map['ReceiverZip'])) {
            $model->receiverZip = $map['ReceiverZip'];
        }
        if (isset($map['ReceiverPhone'])) {
            $model->receiverPhone = $map['ReceiverPhone'];
        }
        if (isset($map['ReceiverMobile'])) {
            $model->receiverMobile = $map['ReceiverMobile'];
        }
        if (isset($map['ReceiverName'])) {
            $model->receiverName = $map['ReceiverName'];
        }
        if (isset($map['ReceiverEmail'])) {
            $model->receiverEmail = $map['ReceiverEmail'];
        }
        if (isset($map['BuyerMessage'])) {
            $model->buyerMessage = $map['BuyerMessage'];
        }
        if (isset($map['ReceiverAddress'])) {
            $model->receiverAddress = $map['ReceiverAddress'];
        }
        if (isset($map['HaType'])) {
            $model->haType = $map['HaType'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['DataPlan'])) {
            $model->dataPlan = $map['DataPlan'];
        }
        if (isset($map['AlreadyHaveSag'])) {
            $model->alreadyHaveSag = $map['AlreadyHaveSag'];
        }

        return $model;
    }
}
