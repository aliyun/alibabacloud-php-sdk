<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceConnectionStringRequest extends Model
{
    /**
     * @description The current endpoint of the instance.
     *
     * This parameter is required.
     * @example r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com
     *
     * @var string
     */
    public $currentConnectionString;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The network type of the endpoint. Valid values:
     *
     *   **Private**: internal network
     *   **Public**: Internet
     *
     * @example Public
     *
     * @var string
     */
    public $IPType;

    /**
     * @description The prefix of the new endpoint. Specify the endpoint in the `<prefix>.redis.rds.aliyuncs.com` format. The prefix must be 8 to 40 characters in length and can contain lowercase letters and digits. It must start with a lowercase letter.
     *
     * >  You must specify one of the **NewConnectionString** and **Port** parameters.
     * @example standardredis
     *
     * @var string
     */
    public $newConnectionString;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The port number that is used to connect to the instance. Valid values: **1024** to **65535**.
     *
     * > You must specify one of the **NewConnectionString** and **Port** parameters.
     * @example 6379
     *
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'currentConnectionString' => 'CurrentConnectionString',
        'DBInstanceId'            => 'DBInstanceId',
        'IPType'                  => 'IPType',
        'newConnectionString'     => 'NewConnectionString',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'port'                    => 'Port',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'securityToken'           => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentConnectionString) {
            $res['CurrentConnectionString'] = $this->currentConnectionString;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }
        if (null !== $this->newConnectionString) {
            $res['NewConnectionString'] = $this->newConnectionString;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceConnectionStringRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentConnectionString'])) {
            $model->currentConnectionString = $map['CurrentConnectionString'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }
        if (isset($map['NewConnectionString'])) {
            $model->newConnectionString = $map['NewConnectionString'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
