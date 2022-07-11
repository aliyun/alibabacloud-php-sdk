<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity\localStorageCapacities;

use AlibabaCloud\Tea\Model;

class localStorageCapacity extends Model
{
    /**
     * @var int
     */
    public $availableDisk;

    /**
     * @var string
     */
    public $dataDiskCategory;

    /**
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
