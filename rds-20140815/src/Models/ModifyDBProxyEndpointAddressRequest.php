<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBProxyEndpointAddressRequest extends Model
{
    /**
     * @description The ID of the instance. You can call the [DescribeDBInstances](~~26232~~) operation to query the ID of the instance.
     *
     * @example rm-t4n3a****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The network type of the proxy endpoint. Valid values:
     *
     *   **Public**: Internet
     *   **VPC**: virtual private cloud (VPC)
     *   **Classic**: classic network
     *
     * If the instance runs MySQL, the default value of this parameter is **Classic**.
     *
     * > If the instance runs PostgreSQL, you must set this parameter to **Public** or **VPC**.
     * @example Public
     *
     * @var string
     */
    public $DBProxyConnectStringNetType;

    /**
     * @description The ID of the proxy endpoint. You can call the [DescribeDBProxyEndpoint](~~140955~~) operation to query the ID of the proxy endpoint.
     *
     * @example ta9um4****
     *
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @description An internal parameter. You do not need to specify this parameter.
     *
     * @example normal
     *
     * @var string
     */
    public $DBProxyEngineType;

    /**
     * @description The new prefix of the proxy endpoint. Enter a prefix.
     *
     * > You must specify at least one of the **DBProxyNewConnectString** and **DBProxyNewConnectStringPort** parameters.
     * @example test123456
     *
     * @var string
     */
    public $DBProxyNewConnectString;

    /**
     * @description The port number that is associated with the proxy endpoint. Enter a port number.
     *
     * > You must specify at least one of the **DBProxyNewConnectString** and **DBProxyNewConnectStringPort** parameters.
     * @example 3307
     *
     * @var string
     */
    public $DBProxyNewConnectStringPort;

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
    protected $_name = [
        'DBInstanceId'                => 'DBInstanceId',
        'DBProxyConnectStringNetType' => 'DBProxyConnectStringNetType',
        'DBProxyEndpointId'           => 'DBProxyEndpointId',
        'DBProxyEngineType'           => 'DBProxyEngineType',
        'DBProxyNewConnectString'     => 'DBProxyNewConnectString',
        'DBProxyNewConnectStringPort' => 'DBProxyNewConnectStringPort',
        'ownerId'                     => 'OwnerId',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBProxyConnectStringNetType) {
            $res['DBProxyConnectStringNetType'] = $this->DBProxyConnectStringNetType;
        }
        if (null !== $this->DBProxyEndpointId) {
            $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        }
        if (null !== $this->DBProxyEngineType) {
            $res['DBProxyEngineType'] = $this->DBProxyEngineType;
        }
        if (null !== $this->DBProxyNewConnectString) {
            $res['DBProxyNewConnectString'] = $this->DBProxyNewConnectString;
        }
        if (null !== $this->DBProxyNewConnectStringPort) {
            $res['DBProxyNewConnectStringPort'] = $this->DBProxyNewConnectStringPort;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBProxyEndpointAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBProxyConnectStringNetType'])) {
            $model->DBProxyConnectStringNetType = $map['DBProxyConnectStringNetType'];
        }
        if (isset($map['DBProxyEndpointId'])) {
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }
        if (isset($map['DBProxyEngineType'])) {
            $model->DBProxyEngineType = $map['DBProxyEngineType'];
        }
        if (isset($map['DBProxyNewConnectString'])) {
            $model->DBProxyNewConnectString = $map['DBProxyNewConnectString'];
        }
        if (isset($map['DBProxyNewConnectStringPort'])) {
            $model->DBProxyNewConnectStringPort = $map['DBProxyNewConnectStringPort'];
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

        return $model;
    }
}
