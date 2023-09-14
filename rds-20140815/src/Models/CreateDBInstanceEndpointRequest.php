<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceEndpointRequest\nodeItems;
use AlibabaCloud\Tea\Model;

class CreateDBInstanceEndpointRequest extends Model
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
     * @description The prefix of the internal endpoint.
     *
     * When you create any type of endpoint, an internal endpoint is automatically created for the endpoint. This parameter specifies the prefix of the internal endpoint.
     * @example rm-****-ro
     *
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @description The user-defined description of the endpoint.
     *
     * @example for readonly business
     *
     * @var string
     */
    public $DBInstanceEndpointDescription;

    /**
     * @description The type of the endpoint. Valid values:
     *
     *   Primary: read/write endpoint of the instance
     *   Readonly: read-only endpoint of the instance
     *
     * @example Readonly
     *
     * @var string
     */
    public $DBInstanceEndpointType;

    /**
     * @description The instance ID. You can call the [DescribeDBInstances](~~610396~~) operation to query the ID of the instance.
     *
     * @example rm-****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The information about the node that is configured for the endpoint.
     *
     * @var nodeItems[]
     */
    public $nodeItems;

    /**
     * @description The port number of the internal endpoint. You can specify the port number for the internal endpoint.
     *
     * Valid values: 3000 to 5999.
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The IP address of the internal endpoint.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The ID of the resource group. You can call the [DescribeDBInstanceAttribute](~~610394~~) to obtain the ID of the resource group.
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

    /**
     * @description The vSwitch ID of the internal endpoint.
     *
     * @example vsw-bp1kqp****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The virtual private cloud (VPC) ID of the internal endpoint.
     *
     * @example vpc-xxxmmxjqqi****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clientToken'                   => 'ClientToken',
        'connectionStringPrefix'        => 'ConnectionStringPrefix',
        'DBInstanceEndpointDescription' => 'DBInstanceEndpointDescription',
        'DBInstanceEndpointType'        => 'DBInstanceEndpointType',
        'DBInstanceId'                  => 'DBInstanceId',
        'nodeItems'                     => 'NodeItems',
        'port'                          => 'Port',
        'privateIpAddress'              => 'PrivateIpAddress',
        'resourceGroupId'               => 'ResourceGroupId',
        'resourceOwnerId'               => 'ResourceOwnerId',
        'vSwitchId'                     => 'VSwitchId',
        'vpcId'                         => 'VpcId',
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
        if (null !== $this->DBInstanceEndpointDescription) {
            $res['DBInstanceEndpointDescription'] = $this->DBInstanceEndpointDescription;
        }
        if (null !== $this->DBInstanceEndpointType) {
            $res['DBInstanceEndpointType'] = $this->DBInstanceEndpointType;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->nodeItems) {
            $res['NodeItems'] = [];
            if (null !== $this->nodeItems && \is_array($this->nodeItems)) {
                $n = 0;
                foreach ($this->nodeItems as $item) {
                    $res['NodeItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBInstanceEndpointRequest
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
        if (isset($map['DBInstanceEndpointDescription'])) {
            $model->DBInstanceEndpointDescription = $map['DBInstanceEndpointDescription'];
        }
        if (isset($map['DBInstanceEndpointType'])) {
            $model->DBInstanceEndpointType = $map['DBInstanceEndpointType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['NodeItems'])) {
            if (!empty($map['NodeItems'])) {
                $model->nodeItems = [];
                $n                = 0;
                foreach ($map['NodeItems'] as $item) {
                    $model->nodeItems[$n++] = null !== $item ? nodeItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
