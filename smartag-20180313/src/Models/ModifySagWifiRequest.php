<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class ModifySagWifiRequest extends Model
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
    public $smartAGId;

    /**
     * @var string
     */
    public $smartAGSn;

    /**
     * @var string
     */
    public $isEnable;

    /**
     * @var string
     */
    public $SSID;

    /**
     * @var string
     */
    public $isBroadcast;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $isAuth;

    /**
     * @var string
     */
    public $authenticationType;

    /**
     * @var string
     */
    public $encryptAlgorithm;

    /**
     * @var string
     */
    public $password;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'smartAGId'            => 'SmartAGId',
        'smartAGSn'            => 'SmartAGSn',
        'isEnable'             => 'IsEnable',
        'SSID'                 => 'SSID',
        'isBroadcast'          => 'IsBroadcast',
        'channel'              => 'Channel',
        'bandwidth'            => 'Bandwidth',
        'isAuth'               => 'IsAuth',
        'authenticationType'   => 'AuthenticationType',
        'encryptAlgorithm'     => 'EncryptAlgorithm',
        'password'             => 'Password',
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
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->smartAGSn) {
            $res['SmartAGSn'] = $this->smartAGSn;
        }
        if (null !== $this->isEnable) {
            $res['IsEnable'] = $this->isEnable;
        }
        if (null !== $this->SSID) {
            $res['SSID'] = $this->SSID;
        }
        if (null !== $this->isBroadcast) {
            $res['IsBroadcast'] = $this->isBroadcast;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->isAuth) {
            $res['IsAuth'] = $this->isAuth;
        }
        if (null !== $this->authenticationType) {
            $res['AuthenticationType'] = $this->authenticationType;
        }
        if (null !== $this->encryptAlgorithm) {
            $res['EncryptAlgorithm'] = $this->encryptAlgorithm;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySagWifiRequest
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
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['SmartAGSn'])) {
            $model->smartAGSn = $map['SmartAGSn'];
        }
        if (isset($map['IsEnable'])) {
            $model->isEnable = $map['IsEnable'];
        }
        if (isset($map['SSID'])) {
            $model->SSID = $map['SSID'];
        }
        if (isset($map['IsBroadcast'])) {
            $model->isBroadcast = $map['IsBroadcast'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['IsAuth'])) {
            $model->isAuth = $map['IsAuth'];
        }
        if (isset($map['AuthenticationType'])) {
            $model->authenticationType = $map['AuthenticationType'];
        }
        if (isset($map['EncryptAlgorithm'])) {
            $model->encryptAlgorithm = $map['EncryptAlgorithm'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        return $model;
    }
}
