<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

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
    public $vlan;

    /**
     * @var string
     */
    public $routeProtocol;

    /**
     * @var string
     */
    public $remoteIp;

    /**
     * @var string
     */
    public $remoteAs;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'smartAGId'            => 'SmartAGId',
        'smartAGSn'            => 'SmartAGSn',
        'portName'             => 'PortName',
        'vlan'                 => 'Vlan',
        'routeProtocol'        => 'RouteProtocol',
        'remoteIp'             => 'RemoteIp',
        'remoteAs'             => 'RemoteAs',
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
        if (null !== $this->vlan) {
            $res['Vlan'] = $this->vlan;
        }
        if (null !== $this->routeProtocol) {
            $res['RouteProtocol'] = $this->routeProtocol;
        }
        if (null !== $this->remoteIp) {
            $res['RemoteIp'] = $this->remoteIp;
        }
        if (null !== $this->remoteAs) {
            $res['RemoteAs'] = $this->remoteAs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySagPortRouteProtocolRequest
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
        if (isset($map['Vlan'])) {
            $model->vlan = $map['Vlan'];
        }
        if (isset($map['RouteProtocol'])) {
            $model->routeProtocol = $map['RouteProtocol'];
        }
        if (isset($map['RemoteIp'])) {
            $model->remoteIp = $map['RemoteIp'];
        }
        if (isset($map['RemoteAs'])) {
            $model->remoteAs = $map['RemoteAs'];
        }

        return $model;
    }
}
