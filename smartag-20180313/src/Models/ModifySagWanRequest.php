<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class ModifySagWanRequest extends Model
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
    public $portName;

    /**
     * @var string
     */
    public $IPType;

    /**
     * @var string
     */
    public $IP;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var string
     */
    public $gateway;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $password;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $weight;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @var int
     */
    public $bandwidth;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'smartAGId'            => 'SmartAGId',
        'smartAGSn'            => 'SmartAGSn',
        'portName'             => 'PortName',
        'IPType'               => 'IPType',
        'IP'                   => 'IP',
        'mask'                 => 'Mask',
        'gateway'              => 'Gateway',
        'username'             => 'Username',
        'password'             => 'Password',
        'priority'             => 'Priority',
        'weight'               => 'Weight',
        'ISP'                  => 'ISP',
        'bandwidth'            => 'Bandwidth',
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
        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }
        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->gateway) {
            $res['Gateway'] = $this->gateway;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySagWanRequest
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
        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }
        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['Gateway'])) {
            $model->gateway = $map['Gateway'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        return $model;
    }
}
