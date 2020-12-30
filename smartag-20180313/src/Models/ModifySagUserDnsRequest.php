<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class ModifySagUserDnsRequest extends Model
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
    public $masterDns;

    /**
     * @var string
     */
    public $slaveDns;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'smartAGId'            => 'SmartAGId',
        'smartAGSn'            => 'SmartAGSn',
        'masterDns'            => 'MasterDns',
        'slaveDns'             => 'SlaveDns',
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
        if (null !== $this->masterDns) {
            $res['MasterDns'] = $this->masterDns;
        }
        if (null !== $this->slaveDns) {
            $res['SlaveDns'] = $this->slaveDns;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySagUserDnsRequest
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
        if (isset($map['MasterDns'])) {
            $model->masterDns = $map['MasterDns'];
        }
        if (isset($map['SlaveDns'])) {
            $model->slaveDns = $map['SlaveDns'];
        }

        return $model;
    }
}
