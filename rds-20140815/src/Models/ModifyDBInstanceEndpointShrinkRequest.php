<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceEndpointShrinkRequest extends Model
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
     * @description The endpoint ID of the instance. You can call the [DescribeDBInstanceEndpoints](~~610488~~) operation to query the endpoint ID of the instance.
     *
     * @example ep-****
     *
     * @var string
     */
    public $DBInstanceEndpointId;

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
     * @var string
     */
    public $nodeItemsShrink;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'clientToken'                   => 'ClientToken',
        'DBInstanceEndpointDescription' => 'DBInstanceEndpointDescription',
        'DBInstanceEndpointId'          => 'DBInstanceEndpointId',
        'DBInstanceId'                  => 'DBInstanceId',
        'nodeItemsShrink'               => 'NodeItems',
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
        if (null !== $this->nodeItemsShrink) {
            $res['NodeItems'] = $this->nodeItemsShrink;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceEndpointShrinkRequest
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
            $model->nodeItemsShrink = $map['NodeItems'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
