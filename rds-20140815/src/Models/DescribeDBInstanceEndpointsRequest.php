<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceEndpointsRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests.
     *
     * The token can contain only ASCII characters and cannot exceed 64 characters in length.
     * @example ETnLKlblzczshOTUbOC****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The endpoint ID of the instance.
     *
     * >  If this parameter is not specified, the information about all endpoints is returned.
     * @example ep-****-ro
     *
     * @var string
     */
    public $DBInstanceEndpointId;

    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * This parameter is required.
     * @example rm-u****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'DBInstanceEndpointId' => 'DBInstanceEndpointId',
        'DBInstanceId'         => 'DBInstanceId',
        'resourceOwnerId'      => 'ResourceOwnerId',
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
        if (null !== $this->DBInstanceEndpointId) {
            $res['DBInstanceEndpointId'] = $this->DBInstanceEndpointId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceEndpointsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceEndpointId'])) {
            $model->DBInstanceEndpointId = $map['DBInstanceEndpointId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
