<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class StartInstanceRequest extends Model
{
    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   true: performs a dry run. The system checks your AccessKey pair, the permissions of the RAM user, and the required parameters. If the request fails the dry run, the corresponding error message is returned. If the request passes the dry run, the DryRunOperation error code is returned.
     *   false: performs a dry run and sends the request. If the request passes the dry run, a 2XX HTTP status code is returned and the request is made.
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies whether to restore the instance to its initial health state. This parameter is applicable to instances that are equipped with local disks, such as d1, i1, and i2 instances. If a local disk of a d1, i1, or i2 instance fails, you can use this parameter to specify whether to restore the instance to its initial health state on startup. Valid values:
     *
     *   true: restores the instance to its initial health state on startup. After the instance is restored to its initial health state, data stored on the local disks of the instance is lost.
     *   false: does not perform operations and keeps the instance in the current state.
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $initLocalDisk;

    /**
     * @description The ID of the instance that you want to start.
     *
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $instanceId;

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
        'dryRun'               => 'DryRun',
        'initLocalDisk'        => 'InitLocalDisk',
        'instanceId'           => 'InstanceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->initLocalDisk) {
            $res['InitLocalDisk'] = $this->initLocalDisk;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return StartInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['InitLocalDisk'])) {
            $model->initLocalDisk = $map['InitLocalDisk'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
