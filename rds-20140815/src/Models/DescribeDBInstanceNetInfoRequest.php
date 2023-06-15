<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceNetInfoRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOC*****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5*****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The type of the endpoint. Valid values:
     *
     *   **Normal**: regular endpoint
     *   **ReadWriteSplitting**: read/write splitting endpoint
     *
     * > By default, the system returns both types of endpoints.
     * @example Normal
     *
     * @var string
     */
    public $DBInstanceNetRWSplitType;

    /**
     * @description A reserved parameter.
     *
     * @example None
     *
     * @var int
     */
    public $flag;

    /**
     * @description The name of the dedicated cluster to which the instance belongs. This parameter takes effect only when the instance runs MySQL on RDS Standard Edition and is created in a dedicated cluster.
     *
     * @example rgc-2ze*****
     *
     * @var string
     */
    public $generalGroupName;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'clientToken'              => 'ClientToken',
        'DBInstanceId'             => 'DBInstanceId',
        'DBInstanceNetRWSplitType' => 'DBInstanceNetRWSplitType',
        'flag'                     => 'Flag',
        'generalGroupName'         => 'GeneralGroupName',
        'ownerAccount'             => 'OwnerAccount',
        'ownerId'                  => 'OwnerId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceNetRWSplitType) {
            $res['DBInstanceNetRWSplitType'] = $this->DBInstanceNetRWSplitType;
        }
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->generalGroupName) {
            $res['GeneralGroupName'] = $this->generalGroupName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
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
     * @return DescribeDBInstanceNetInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceNetRWSplitType'])) {
            $model->DBInstanceNetRWSplitType = $map['DBInstanceNetRWSplitType'];
        }
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['GeneralGroupName'])) {
            $model->generalGroupName = $map['GeneralGroupName'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
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
