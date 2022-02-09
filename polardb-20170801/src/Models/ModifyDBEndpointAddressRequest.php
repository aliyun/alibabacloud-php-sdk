<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBEndpointAddressRequest extends Model
{
    /**
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBEndpointId;

    /**
     * @var string
     */
    public $netType;

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
    public $port;

    /**
     * @var string
     */
    public $privateZoneAddressPrefix;

    /**
     * @var string
     */
    public $privateZoneName;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'connectionStringPrefix'   => 'ConnectionStringPrefix',
        'DBClusterId'              => 'DBClusterId',
        'DBEndpointId'             => 'DBEndpointId',
        'netType'                  => 'NetType',
        'ownerAccount'             => 'OwnerAccount',
        'ownerId'                  => 'OwnerId',
        'port'                     => 'Port',
        'privateZoneAddressPrefix' => 'PrivateZoneAddressPrefix',
        'privateZoneName'          => 'PrivateZoneName',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBEndpointId) {
            $res['DBEndpointId'] = $this->DBEndpointId;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->privateZoneAddressPrefix) {
            $res['PrivateZoneAddressPrefix'] = $this->privateZoneAddressPrefix;
        }
        if (null !== $this->privateZoneName) {
            $res['PrivateZoneName'] = $this->privateZoneName;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBEndpointAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBEndpointId'])) {
            $model->DBEndpointId = $map['DBEndpointId'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['PrivateZoneAddressPrefix'])) {
            $model->privateZoneAddressPrefix = $map['PrivateZoneAddressPrefix'];
        }
        if (isset($map['PrivateZoneName'])) {
            $model->privateZoneName = $map['PrivateZoneName'];
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
