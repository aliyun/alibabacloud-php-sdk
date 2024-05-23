<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceEndpointRequest\nodeItems;
use AlibabaCloud\Tea\Model;

class ModifyDBInstanceEndpointRequest extends Model
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
     * @description The user-defined description of the endpoint.
     *
     * @example for readonly business
     *
     * @var string
     */
    public $DBInstanceEndpointDescription;

    /**
     * @description The endpoint ID of the instance. You can call the DescribeDBInstanceEndpoints operation to query the endpoint ID.
     *
     * This parameter is required.
     * @example ep-****
     *
     * @var string
     */
    public $DBInstanceEndpointId;

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
     * @var nodeItems[]
     */
    public $nodeItems;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'clientToken'                   => 'ClientToken',
        'DBInstanceEndpointDescription' => 'DBInstanceEndpointDescription',
        'DBInstanceEndpointId'          => 'DBInstanceEndpointId',
        'DBInstanceId'                  => 'DBInstanceId',
        'nodeItems'                     => 'NodeItems',
        'resourceOwnerId'               => 'ResourceOwnerId',
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
        if (null !== $this->DBInstanceEndpointDescription) {
            $res['DBInstanceEndpointDescription'] = $this->DBInstanceEndpointDescription;
        }
        if (null !== $this->DBInstanceEndpointId) {
            $res['DBInstanceEndpointId'] = $this->DBInstanceEndpointId;
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
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceEndpointDescription'])) {
            $model->DBInstanceEndpointDescription = $map['DBInstanceEndpointDescription'];
        }
        if (isset($map['DBInstanceEndpointId'])) {
            $model->DBInstanceEndpointId = $map['DBInstanceEndpointId'];
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
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
