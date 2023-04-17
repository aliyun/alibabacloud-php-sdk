<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskSpecRequest\performanceControlOptions;
use AlibabaCloud\Tea\Model;

class ModifyDiskSpecRequest extends Model
{
    /**
     * @description The new category of the disk. Valid values:
     *
     *   cloud_essd: ESSD
     *   cloud_ssd: standard SSD
     *   cloud_efficiency: ultra disk
     *
     * >  The preceding values are listed in descending order of disk performance. The disk cannot be downgraded if it is a subscription disk.
     * @example cloud_essd
     *
     * @var string
     */
    public $diskCategory;

    /**
     * @description The ID of the disk.
     *
     * @example d-bp131n0q38u3a4zi****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description Specifies whether to check the validity of the request without actually making the request. Valid values:
     *
     *   true: The validity of the request is checked but the request is not made. Check items include the required parameters, request format, service limits, and available ECS resources. If the check fails, the corresponding error message is returned. If the check succeeds, the `DryRunOperation` error code is returned.
     *   false: The validity of the request is checked. If the check succeeds, a 2xx HTTP status code is returned and the request is made.
     *
     * Default value: false.
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
     * @var performanceControlOptions
     */
    public $performanceControlOptions;

    /**
     * @description The new performance level of the ESSD. Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * Default value: PL1.
     * @example PL2
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description 是否修改ESSD AutoPL云盘预配置读写IOPS。取值范围：0~min{50000, 1000*容量-基准性能}。
     *
     * 基准性能=min{1,800+50*容量, 50,000}
     *
     * > 当DiskCategory取值为cloud_auto时才支持设置该参数。更多信息，请参见[ESSD AutoPL云盘](~~368372~~)和[修改ESSD AutoPL云盘预配置信息](~~413275~~)。
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
