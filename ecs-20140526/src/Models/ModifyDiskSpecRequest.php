<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskSpecRequest\performanceControlOptions;
use AlibabaCloud\Tea\Model;

class ModifyDiskSpecRequest extends Model
{
    /**
     * @description The new category of the disk. Default value: PL1. Valid values:
     *
     *   cloud_essd: ESSD.
     *   cloud_auto: ESSD AutoPL disk.
     *   cloud_ssd: The system creates an SSD.
     *   cloud_efficiency: The system creates an ultra disk.
     *
     * > The preceding values are listed in descending order of disk performance. The performance level of a subscription cloud disk cannot be downgraded.
     * @example cloud_essd
     *
     * @var string
     */
    public $diskCategory;

    /**
     * @description The disk ID.
     *
     * @example d-bp131n0q38u3a4zi****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description Specifies whether to perform only a dry run without performing the actual request. Default value: PL1. Valid values:
     *
     *   true: performs only a dry run. The system checks the required parameters, request syntax, service limits, and available ECS resources. If the request fails the dry run, the corresponding error message is returned. If the check succeeds, the `DryRunOperation` error code is returned.
     *   false: The validity of the request is checked. If the check succeeds, a 2xx HTTP status code is returned and the request is made.
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description 磁盘性能控制参数集合
     *
     * @var performanceControlOptions
     */
    public $performanceControlOptions;

    /**
     * @description The new performance level of the ESSD. Default value: PL1. Valid values:
     *
     *   PL0: An ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: An ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: An ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: An ESSD delivers up to 1,000,000 random read/write IOPS.
     *
     * Default value: PL1
     * @example PL2
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The provisioned read/write IOPS of the ESSD AutoPL disk. Valid values: 0 to min{50,000, 1,000 × Capacity - Baseline IOPS}
     *
     * > This parameter is available only if you set DiskCategory to cloud_auto. For more information, see [ESSD AutoPL disks](~~368372~~) and [Modify the performance configurations of an ESSD AutoPL disk](~~413275~~).
     * @example 50000
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'diskCategory'              => 'DiskCategory',
        'diskId'                    => 'DiskId',
        'dryRun'                    => 'DryRun',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'performanceControlOptions' => 'PerformanceControlOptions',
        'performanceLevel'          => 'PerformanceLevel',
        'provisionedIops'           => 'ProvisionedIops',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->performanceControlOptions) {
            $res['PerformanceControlOptions'] = null !== $this->performanceControlOptions ? $this->performanceControlOptions->toMap() : null;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
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
     * @return ModifyDiskSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PerformanceControlOptions'])) {
            $model->performanceControlOptions = performanceControlOptions::fromMap($map['PerformanceControlOptions']);
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
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
