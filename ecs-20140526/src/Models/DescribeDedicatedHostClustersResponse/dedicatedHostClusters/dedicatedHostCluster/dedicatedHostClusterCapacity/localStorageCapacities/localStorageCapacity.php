<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponse\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity\localStorageCapacities;

use AlibabaCloud\Tea\Model;

class localStorageCapacity extends Model
{
    /**
     * @var int
     */
    public $totalDisk;

    /**
     * @var int
     */
    public $availableDisk;

    /**
     * @var string
     */
    public $dataDiskCategory;
    protected $_name = [
        'totalDisk'        => 'TotalDisk',
        'availableDisk'    => 'AvailableDisk',
        'dataDiskCategory' => 'DataDiskCategory',
    ];

    public function validate()
    {
        Model::validateRequired('totalDisk', $this->totalDisk, true);
        Model::validateRequired('availableDisk', $this->availableDisk, true);
        Model::validateRequired('dataDiskCategory', $this->dataDiskCategory, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalDisk) {
            $res['TotalDisk'] = $this->totalDisk;
        }
        if (null !== $this->availableDisk) {
            $res['AvailableDisk'] = $this->availableDisk;
        }
        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
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
        if (isset($map['TotalDisk'])) {
            $model->totalDisk = $map['TotalDisk'];
        }
        if (isset($map['AvailableDisk'])) {
            $model->availableDisk = $map['AvailableDisk'];
        }
        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }

        return $model;
    }
}
