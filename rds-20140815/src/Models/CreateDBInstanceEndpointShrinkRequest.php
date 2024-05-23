<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstanceEndpointShrinkRequest extends Model
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
     * This parameter is required.
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
     * @description The endpoint type. Valid values:
     *
     *   Primary: read/write endpoint of the instance
     *   Readonly: read-only endpoint of the instance
     *
     * This parameter is required.
     * @example Readonly
     *
     * @var string
     */
    public $DBInstanceEndpointType;

    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * This parameter is required.
     * @example rm-****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The information about the endpoint.
     *
     * This parameter is required.
     * @var string
     */
    public $nodeItemsShrink;

    /**
     * @description The port number of the internal endpoint. You can specify the port number for the internal endpoint.
     *
     * This parameter is required.
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
     * @description The resource group ID. You can call the DescribeDBInstanceAttribute operation to obtain the ID of the resource group.
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
     * This parameter is required.
     * @example vsw-bp1kqp****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The VPC ID of the internal endpoint.
     *
     * This parameter is required.
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
        'nodeItemsShrink'               => 'NodeItems',
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
        if (null !== $this->nodeItemsShrink) {
            $res['NodeItems'] = $this->nodeItemsShrink;
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
     * @return CreateDBInstanceEndpointShrinkRequest
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
            $model->nodeItemsShrink = $map['NodeItems'];
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
