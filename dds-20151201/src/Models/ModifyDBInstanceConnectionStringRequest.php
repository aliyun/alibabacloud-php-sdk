<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceConnectionStringRequest extends Model
{
    /**
     * @description The current endpoint that is to be modified.
     *
     * This parameter is required.
     * @example s-bpxxxxxxxx.mongodb.rds.aliyuncs.com
     *
     * @var string
     */
    public $currentConnectionString;

    /**
     * @description The instance ID.
     *
     * > If you set this parameter to the ID of a sharded cluster instance, you must also specify the **NodeId** parameter.
     *
     * This parameter is required.
     * @example dds-bpxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The new endpoint. It must be 8 to 64 characters in length and can contain letters and digits. It must start with a lowercase letter.
     *
     * This parameter is required.
     * @example aliyuntest111
     *
     * @var string
     */
    public $newConnectionString;

    /**
     * @description The new port number of the instance. The port number must be within the range from 1000 to 65535.
     *
     * >  This parameter is available only when you set the **DBInstanceId** parameter to the ID of an instance that uses cloud disks.
     * @example 3310
     *
     * @var int
     */
    public $newPort;

    /**
     * @description The ID of the mongos in the specified sharded cluster instance. Only one mongos ID can be specified in each call.
     *
     * > This parameter is valid only when you specify the **DBInstanceId** parameter to the ID of a sharded cluster instance.
     * @example s-bpxxxxxxxx
     *
     * @var string
     */
    public $nodeId;

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
        'currentConnectionString' => 'CurrentConnectionString',
        'DBInstanceId'            => 'DBInstanceId',
        'newConnectionString'     => 'NewConnectionString',
        'newPort'                 => 'NewPort',
        'nodeId'                  => 'NodeId',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
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
        if (null !== $this->newConnectionString) {
            $res['NewConnectionString'] = $this->newConnectionString;
        }
        if (null !== $this->newPort) {
            $res['NewPort'] = $this->newPort;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['NewConnectionString'])) {
            $model->newConnectionString = $map['NewConnectionString'];
        }
        if (isset($map['NewPort'])) {
            $model->newPort = $map['NewPort'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
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
