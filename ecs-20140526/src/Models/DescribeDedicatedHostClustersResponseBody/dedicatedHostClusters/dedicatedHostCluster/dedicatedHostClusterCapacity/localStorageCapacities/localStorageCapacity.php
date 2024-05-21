<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity\localStorageCapacities;

use AlibabaCloud\Tea\Model;

class localStorageCapacity extends Model
{
    /**
     * @description The available capacity of the local disk. Unit: GiB
     *
     * @example 20
     *
     * @var int
     */
    public $availableDisk;

    /**
     * @description The category of data disks. Valid values:
     *
     *   cloud: basic disk
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   ephemeral_ssd: local SSD
     *   cloud_essd: Enterprise SSD (ESSD)
     *
     * @example cloud
     *
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @description The total capacity of the local disk. Unit: GiB
     *
     * @example 40
     *
     * @var int
     */
    public $totalDisk;
    protected $_name = [
        'availableDisk'    => 'AvailableDisk',
        'dataDiskCategory' => 'DataDiskCategory',
        'totalDisk'        => 'TotalDisk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableDisk) {
            $res['AvailableDisk'] = $this->availableDisk;
        }
        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }
        if (null !== $this->totalDisk) {
            $res['TotalDisk'] = $this->totalDisk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return localStorageCapacity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableDisk'])) {
            $model->availableDisk = $map['AvailableDisk'];
        }
        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }
        if (isset($map['TotalDisk'])) {
            $model->totalDisk = $map['TotalDisk'];
        }

        return $model;
    }
}
