<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class ModifySagPortRouteProtocolRequest extends Model
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
    public $portName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remoteAs;

    /**
     * @var string
     */
    public $remoteIp;

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
    public $routeProtocol;

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
    public $vlan;
    protected $_name = [
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'portName' => 'PortName',
        'regionId' => 'RegionId',
        'remoteAs' => 'RemoteAs',
        'remoteIp' => 'RemoteIp',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'routeProtocol' => 'RouteProtocol',
        'smartAGId' => 'SmartAGId',
        'smartAGSn' => 'SmartAGSn',
        'vlan' => 'Vlan',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->remoteAs) {
            $res['RemoteAs'] = $this->remoteAs;
        }

        if (null !== $this->remoteIp) {
            $res['RemoteIp'] = $this->remoteIp;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->routeProtocol) {
            $res['RouteProtocol'] = $this->routeProtocol;
        }

        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }

        if (null !== $this->smartAGSn) {
            $res['SmartAGSn'] = $this->smartAGSn;
        }

        if (null !== $this->vlan) {
            $res['Vlan'] = $this->vlan;
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
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RemoteAs'])) {
            $model->remoteAs = $map['RemoteAs'];
        }

        if (isset($map['RemoteIp'])) {
            $model->remoteIp = $map['RemoteIp'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['RouteProtocol'])) {
            $model->routeProtocol = $map['RouteProtocol'];
        }

        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }

        if (isset($map['SmartAGSn'])) {
            $model->smartAGSn = $map['SmartAGSn'];
        }

        if (isset($map['Vlan'])) {
            $model->vlan = $map['Vlan'];
        }

        return $model;
    }
}
