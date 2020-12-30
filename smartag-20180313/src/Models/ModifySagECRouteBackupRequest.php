<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class ModifySagECRouteBackupRequest extends Model
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
    public $hcIp;

    /**
     * @var string
     */
    public $expressConnectionInterface;

    /**
     * @var string
     */
    public $expressConnectionNexthop;

    /**
     * @var bool
     */
    public $routeBackup;
    protected $_name = [
        'ownerAccount'               => 'OwnerAccount',
        'ownerId'                    => 'OwnerId',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'regionId'                   => 'RegionId',
        'smartAGId'                  => 'SmartAGId',
        'hcIp'                       => 'HcIp',
        'expressConnectionInterface' => 'ExpressConnectionInterface',
        'expressConnectionNexthop'   => 'ExpressConnectionNexthop',
        'routeBackup'                => 'RouteBackup',
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
        if (null !== $this->hcIp) {
            $res['HcIp'] = $this->hcIp;
        }
        if (null !== $this->expressConnectionInterface) {
            $res['ExpressConnectionInterface'] = $this->expressConnectionInterface;
        }
        if (null !== $this->expressConnectionNexthop) {
            $res['ExpressConnectionNexthop'] = $this->expressConnectionNexthop;
        }
        if (null !== $this->routeBackup) {
            $res['RouteBackup'] = $this->routeBackup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySagECRouteBackupRequest
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
        if (isset($map['HcIp'])) {
            $model->hcIp = $map['HcIp'];
        }
        if (isset($map['ExpressConnectionInterface'])) {
            $model->expressConnectionInterface = $map['ExpressConnectionInterface'];
        }
        if (isset($map['ExpressConnectionNexthop'])) {
            $model->expressConnectionNexthop = $map['ExpressConnectionNexthop'];
        }
        if (isset($map['RouteBackup'])) {
            $model->routeBackup = $map['RouteBackup'];
        }

        return $model;
    }
}
