<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\availableResources;
use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @var string[]
     */
    public $availableResourceCreation;

    /**
     * @var string[]
     */
    public $dedicatedHostGenerations;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var string[]
     */
    public $availableInstanceTypes;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string[]
     */
    public $availableDiskCategories;

    /**
     * @var string[]
     */
    public $availableDedicatedHostTypes;

    /**
     * @var string[]
     */
    public $availableVolumeCategories;

    /**
     * @var availableResources[]
     */
    public $availableResources;
    protected $_name = [
        'availableResourceCreation'   => 'AvailableResourceCreation',
        'dedicatedHostGenerations'    => 'DedicatedHostGenerations',
        'localName'                   => 'LocalName',
        'availableInstanceTypes'      => 'AvailableInstanceTypes',
        'zoneId'                      => 'ZoneId',
        'availableDiskCategories'     => 'AvailableDiskCategories',
        'availableDedicatedHostTypes' => 'AvailableDedicatedHostTypes',
        'availableVolumeCategories'   => 'AvailableVolumeCategories',
        'availableResources'          => 'AvailableResources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableResourceCreation) {
            $res['AvailableResourceCreation'] = $this->availableResourceCreation;
        }
        if (null !== $this->dedicatedHostGenerations) {
            $res['DedicatedHostGenerations'] = $this->dedicatedHostGenerations;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->availableInstanceTypes) {
            $res['AvailableInstanceTypes'] = $this->availableInstanceTypes;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->availableDiskCategories) {
            $res['AvailableDiskCategories'] = $this->availableDiskCategories;
        }
        if (null !== $this->availableDedicatedHostTypes) {
            $res['AvailableDedicatedHostTypes'] = $this->availableDedicatedHostTypes;
        }
        if (null !== $this->availableVolumeCategories) {
            $res['AvailableVolumeCategories'] = $this->availableVolumeCategories;
        }
        if (null !== $this->availableResources) {
            $res['AvailableResources'] = [];
            if (null !== $this->availableResources && \is_array($this->availableResources)) {
                $n = 0;
                foreach ($this->availableResources as $item) {
                    $res['AvailableResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableResourceCreation'])) {
            if (!empty($map['AvailableResourceCreation'])) {
                $model->availableResourceCreation = $map['AvailableResourceCreation'];
            }
        }
        if (isset($map['DedicatedHostGenerations'])) {
            if (!empty($map['DedicatedHostGenerations'])) {
                $model->dedicatedHostGenerations = $map['DedicatedHostGenerations'];
            }
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['AvailableInstanceTypes'])) {
            if (!empty($map['AvailableInstanceTypes'])) {
                $model->availableInstanceTypes = $map['AvailableInstanceTypes'];
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['AvailableDiskCategories'])) {
            if (!empty($map['AvailableDiskCategories'])) {
                $model->availableDiskCategories = $map['AvailableDiskCategories'];
            }
        }
        if (isset($map['AvailableDedicatedHostTypes'])) {
            if (!empty($map['AvailableDedicatedHostTypes'])) {
                $model->availableDedicatedHostTypes = $map['AvailableDedicatedHostTypes'];
            }
        }
        if (isset($map['AvailableVolumeCategories'])) {
            if (!empty($map['AvailableVolumeCategories'])) {
                $model->availableVolumeCategories = $map['AvailableVolumeCategories'];
            }
        }
        if (isset($map['AvailableResources'])) {
            if (!empty($map['AvailableResources'])) {
                $model->availableResources = [];
                $n                         = 0;
                foreach ($map['AvailableResources'] as $item) {
                    $model->availableResources[$n++] = null !== $item ? availableResources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
