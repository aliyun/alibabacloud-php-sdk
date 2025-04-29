<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeLensMonitorDisksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeLensMonitorDisksResponseBody\diskInfos\tags;

class diskInfos extends Model
{
    /**
     * @var int
     */
    public $bps;

    /**
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @var string
     */
    public $diskCategory;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var string
     */
    public $diskName;

    /**
     * @var string
     */
    public $diskStatus;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var int
     */
    public $iops;

    /**
     * @var string[]
     */
    public $lensTags;

    /**
     * @var string
     */
    public $performanceLevel;

    /**
     * @var int
     */
    public $provisionedIops;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sharingEnabled;

    /**
     * @var int
     */
    public $size;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'bps' => 'Bps',
        'burstingEnabled' => 'BurstingEnabled',
        'diskCategory' => 'DiskCategory',
        'diskId' => 'DiskId',
        'diskName' => 'DiskName',
        'diskStatus' => 'DiskStatus',
        'diskType' => 'DiskType',
        'iops' => 'Iops',
        'lensTags' => 'LensTags',
        'performanceLevel' => 'PerformanceLevel',
        'provisionedIops' => 'ProvisionedIops',
        'regionId' => 'RegionId',
        'sharingEnabled' => 'SharingEnabled',
        'size' => 'Size',
        'tags' => 'Tags',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->lensTags)) {
            Model::validateArray($this->lensTags);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->lensTags)) {
                $res['LensTags'] = [];
                $n1 = 0;
                foreach ($this->lensTags as $item1) {
                    $res['LensTags'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->sharingEnabled) {
            $res['SharingEnabled'] = $this->sharingEnabled;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->lensTags = [];
                $n1 = 0;
                foreach ($map['LensTags'] as $item1) {
                    $model->lensTags[$n1++] = $item1;
                }
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

        if (isset($map['SharingEnabled'])) {
            $model->sharingEnabled = $map['SharingEnabled'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
