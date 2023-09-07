<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBEndpointAddressRequest extends Model
{
    /**
     * @description The prefix of the new endpoint. The prefix must meet the following requirements:
     *
     *   It can contain lowercase letters, digits, and hyphens (-).
     *   It must start with a letter and end with a digit or a letter.
     *   It must be 6 to 30 characters in length.
     *
     * @example example
     *
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @description The ID of cluster.
     *
     * > You can call the [DescribeDBClusters](~~98094~~) operation to query the details of the clusters that belong to your Alibaba Cloud account, such as cluster IDs.
     * @example pc-***************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The ID of the endpoint.
     *
     * > You can call the [DescribeDBClusterEndpoints](~~98205~~) operation to query endpoint IDs.
     * @example pe-****************
     *
     * @var string
     */
    public $DBEndpointId;

    /**
     * @description The network type of the endpoint. Valid values:
     *
     *   **Public**
     *   **Private**
     *
     * @example Public
     *
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
     * @description The port number. Valid values: 3000 to 5999.
     *
     * > This parameter is valid only for PolarDB for MySQL clusters. If you leave this parameter empty, the default port 3306 is used.
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The prefix of the private domain name. The prefix must meet the following requirements:
     *
     *   The prefix can contain lowercase letters, digits, and hyphens (-).
     *   The prefix must start with a letter and end with a digit or a letter.
     *   The prefix must be 6 to 30 characters in length.
     *
     * >- You can bind each internal endpoint of PolarDB to a private domain name. The private domain name takes effect only in the specified virtual private clouds (VPCs) in the current region. Private domain names are managed by using PrivateZone. You can use the CNAME record of PrivateZone to map domain names to PolarDB. You are charged a small fee for this feature. For more information, see [Pricing](~~71338~~).
     * >- This parameter takes effect only if you set **NetType** to Private.
     * @example aliyundoc
     *
     * @var string
     */
    public $privateZoneAddressPrefix;

    /**
     * @description The name of the private zone.
     *
     * > This parameter takes effect only when **NetType** is set to Private.
     * @example aliyundoc.com
     *
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
