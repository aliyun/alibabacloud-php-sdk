<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity\localStorageCapacities;

use AlibabaCloud\Dara\Model;

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
        'availableDisk' => 'AvailableDisk',
        'dataDiskCategory' => 'DataDiskCategory',
        'totalDisk' => 'TotalDisk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
