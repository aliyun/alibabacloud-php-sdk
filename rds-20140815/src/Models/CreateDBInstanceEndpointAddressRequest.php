<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstanceEndpointAddressRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests.
     *
     * The token can contain only ASCII characters and cannot exceed 64 characters in length.
     * @example 6000170000591aed949d0f****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The prefix of the public endpoint.
     *
     * @example rm-*****
     *
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @description The endpoint ID of the instance. You can call the [DescribeDBInstanceEndpoints](~~464397~~) operation to query the endpoint ID of the instance.
     *
     * @example ep-****
     *
     * @var string
     */
    public $DBInstanceEndpointId;

    /**
     * @description The ID of the instance. You can call the [DescribeDBInstances](~~26232~~) operation to query the ID of the instance.
     *
     * @example rm-****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The network type of the endpoint. Only Internet is supported. Set the value to **Public**.
     *
     * @example Public
     *
     * @var string
     */
    public $ipType;

    /**
     * @description The port number of the public endpoint.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'clientToken'            => 'ClientToken',
        'connectionStringPrefix' => 'ConnectionStringPrefix',
        'DBInstanceEndpointId'   => 'DBInstanceEndpointId',
        'DBInstanceId'           => 'DBInstanceId',
        'ipType'                 => 'IpType',
        'port'                   => 'Port',
        'resourceGroupId'        => 'ResourceGroupId',
        'resourceOwnerId'        => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }
        if (null !== $this->DBInstanceEndpointId) {
            $res['DBInstanceEndpointId'] = $this->DBInstanceEndpointId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBInstanceEndpointAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }
        if (isset($map['DBInstanceEndpointId'])) {
            $model->DBInstanceEndpointId = $map['DBInstanceEndpointId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
