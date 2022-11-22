<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceEndpointRequest\nodeItems;
use AlibabaCloud\Tea\Model;

class CreateDBInstanceEndpointRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @var string
     */
    public $DBInstanceEndpointDescription;

    /**
     * @var string
     */
    public $DBInstanceEndpointType;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var nodeItems[]
     */
    public $nodeItems;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
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
