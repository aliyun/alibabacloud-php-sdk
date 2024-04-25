<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeLensMonitorDisksResponseBody;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeLensMonitorDisksResponseBody\diskInfos\tags;
use AlibabaCloud\Tea\Model;

class diskInfos extends Model
{
    /**
     * @description The BPS.
     *
     * @example 300
     *
     * @var int
     */
    public $bps;

    /**
     * @description Indicates whether the performance burst feature is enabled. Valid values:
     *
     *   true
     *   false
     *
     * This parameter is available only if you set `DiskCategory` to `cloud_auto`. For more information, see [ESSD AutoPL disks](~~368372~~).
     * @example true
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The type of the disk. Valid values:
     * - cloud_essd_entry
     * @example cloud_essd
     *
     * @var string
     */
    public $diskCategory;

    /**
     * @description The ID of the disk.
     *
     * @example d-cd401****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The name of the disk.
     *
     * @example disk-28c6b****
     *
     * @var string
     */
    public $diskName;

    /**
     * @description The disk status. Valid values:
     *
     * - Deleted
     * @example Available
     *
     * @var string
     */
    public $diskStatus;

    /**
     * @description The disk type. Valid values:
     *   system: system disk
     *   data: data disk
     *
     * @example system
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The IOPS.
     *
     * @example 4000
     *
     * @var int
     */
    public $iops;

    /**
     * @description Lens tags of the disk.
     *
     * @var string[]
     */
    public $lensTags;

    /**
     * @description The new performance level of the ESSD. Valid values:
     *
     *   PL0: An ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: An ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: An ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: An ESSD delivers up to 1,000,000 random read/write IOPS.
     *
     * @example PL0
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The provisioned read/write IOPS of the ESSD AutoPL disk. Valid values: 0 to min{50,000, 1,000 × Capacity - Baseline IOPS}
     *
     * >  This parameter is available only if the DiskCategory parameter is set to cloud_auto. For more information, see [ESSD AutoPL disks](https://www.alibabacloud.com/help/en/ecs/user-guide/essd-autopl-disks)
     * @example 4000
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The region ID of the disk.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The size of the disk. Unit: GiB.
     *
     * @example 64
     *
     * @var int
     */
    public $size;

    /**
     * @description Tags of the disk.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'bps'              => 'Bps',
        'burstingEnabled'  => 'BurstingEnabled',
        'diskCategory'     => 'DiskCategory',
        'diskId'           => 'DiskId',
        'diskName'         => 'DiskName',
        'diskStatus'       => 'DiskStatus',
        'diskType'         => 'DiskType',
        'iops'             => 'Iops',
        'lensTags'         => 'LensTags',
        'performanceLevel' => 'PerformanceLevel',
        'provisionedIops'  => 'ProvisionedIops',
        'regionId'         => 'RegionId',
        'size'             => 'Size',
        'tags'             => 'Tags',
        'zoneId'           => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->diskStatus) {
            $res['DiskStatus'] = $this->diskStatus;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->iops) {
            $res['Iops'] = $this->iops;
        }
        if (null !== $this->lensTags) {
            $res['LensTags'] = $this->lensTags;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['DiskStatus'])) {
            $model->diskStatus = $map['DiskStatus'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['Iops'])) {
            $model->iops = $map['Iops'];
        }
        if (isset($map['LensTags'])) {
            if (!empty($map['LensTags'])) {
                $model->lensTags = $map['LensTags'];
            }
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
