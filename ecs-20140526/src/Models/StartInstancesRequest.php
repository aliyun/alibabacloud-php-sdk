<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class StartInstancesRequest extends Model
{
    /**
     * @description The batch operation mode. Valid values:
     *
     *   AllTogether: In this mode, a success message is returned if all ECS instances are started. If an ECS instance fails the check when you set the DryRun parameter to false, all the specified instances cannot be started and an error message is returned.
     *   SuccessFirst: In this mode, each ECS instance is separately started. The response contains the operation results of each ECS instance.
     *
     * Default value: AllTogether.
     * @example AllTogether
     *
     * @var string
     */
    public $batchOptimization;

    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   true: performs a dry run. The system checks the required parameters, request syntax, and instance status. If the request fails the dry run, an error message is returned. If the request passes the dry run, `DRYRUN.SUCCESS` is returned.
     *
     * > If you set the `BatchOptimization` parameter to `SuccessFirst` and the `DryRun` parameter to true, only `DRYRUN.SUCCESS` is returned regardless of whether the request passes the dry run.
     *
     *   false: performs a dry run and sends the request. If the request passes the dry run, the operation is performed.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The IDs of the ECS instances. You can specify up to 100 ECS instance IDs.
     *
     * @example i-bp67acfmxazb4p****
     *
     * @var string[]
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
     * @description The region ID of the ECS instance. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'batchOptimization'    => 'BatchOptimization',
        'dryRun'               => 'DryRun',
        'instanceId'           => 'InstanceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchOptimization) {
            $res['BatchOptimization'] = $this->batchOptimization;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return StartInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchOptimization'])) {
            $model->batchOptimization = $map['BatchOptimization'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = $map['InstanceId'];
            }
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
