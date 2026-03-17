<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class ModifySagRouteProtocolOspfRequest extends Model
{
    /**
     * @var int
     */
    public $areaId;

    /**
     * @var string
     */
    public $authenticationType;

    /**
     * @var int
     */
    public $deadTime;

    /**
     * @var int
     */
    public $helloTime;

    /**
     * @var string
     */
    public $md5Key;

    /**
     * @var int
     */
    public $md5KeyId;

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
    public $password;

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

    /**
     * @var string
     */
    public $routerId;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string
     */
    public $smartAGSn;
    protected $_name = [
        'areaId' => 'AreaId',
        'authenticationType' => 'AuthenticationType',
        'deadTime' => 'DeadTime',
        'helloTime' => 'HelloTime',
        'md5Key' => 'Md5Key',
        'md5KeyId' => 'Md5KeyId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'password' => 'Password',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'routerId' => 'RouterId',
        'smartAGId' => 'SmartAGId',
        'smartAGSn' => 'SmartAGSn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }

        if (null !== $this->authenticationType) {
            $res['AuthenticationType'] = $this->authenticationType;
        }

        if (null !== $this->deadTime) {
            $res['DeadTime'] = $this->deadTime;
        }

        if (null !== $this->helloTime) {
            $res['HelloTime'] = $this->helloTime;
        }

        if (null !== $this->md5Key) {
            $res['Md5Key'] = $this->md5Key;
        }

        if (null !== $this->md5KeyId) {
            $res['Md5KeyId'] = $this->md5KeyId;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
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

        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }

        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }

        if (null !== $this->smartAGSn) {
            $res['SmartAGSn'] = $this->smartAGSn;
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
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }

        if (isset($map['AuthenticationType'])) {
            $model->authenticationType = $map['AuthenticationType'];
        }

        if (isset($map['DeadTime'])) {
            $model->deadTime = $map['DeadTime'];
        }

        if (isset($map['HelloTime'])) {
            $model->helloTime = $map['HelloTime'];
        }

        if (isset($map['Md5Key'])) {
            $model->md5Key = $map['Md5Key'];
        }

        if (isset($map['Md5KeyId'])) {
            $model->md5KeyId = $map['Md5KeyId'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
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

        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }

        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }

        if (isset($map['SmartAGSn'])) {
            $model->smartAGSn = $map['SmartAGSn'];
        }

        return $model;
    }
}
