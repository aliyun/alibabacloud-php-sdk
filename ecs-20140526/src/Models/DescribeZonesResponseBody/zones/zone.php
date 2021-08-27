<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableDedicatedHostTypes;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableDiskCategories;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableInstanceTypes;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResourceCreation;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableVolumeCategories;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\dedicatedHostGenerations;
use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var availableResources
     */
    public $availableResources;

    /**
     * @var availableResourceCreation
     */
    public $availableResourceCreation;

    /**
     * @var dedicatedHostGenerations
     */
    public $dedicatedHostGenerations;

    /**
     * @var availableInstanceTypes
     */
    public $availableInstanceTypes;

    /**
     * @var availableDiskCategories
     */
    public $availableDiskCategories;

    /**
     * @var availableDedicatedHostTypes
     */
    public $availableDedicatedHostTypes;

    /**
     * @var availableVolumeCategories
     */
    public $availableVolumeCategories;
    protected $_name = [
        'zoneId'                      => 'ZoneId',
        'localName'                   => 'LocalName',
        'availableResources'          => 'AvailableResources',
        'availableResourceCreation'   => 'AvailableResourceCreation',
        'dedicatedHostGenerations'    => 'DedicatedHostGenerations',
        'availableInstanceTypes'      => 'AvailableInstanceTypes',
        'availableDiskCategories'     => 'AvailableDiskCategories',
        'availableDedicatedHostTypes' => 'AvailableDedicatedHostTypes',
        'availableVolumeCategories'   => 'AvailableVolumeCategories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->availableResources) {
            $res['AvailableResources'] = null !== $this->availableResources ? $this->availableResources->toMap() : null;
        }
        if (null !== $this->availableResourceCreation) {
            $res['AvailableResourceCreation'] = null !== $this->availableResourceCreation ? $this->availableResourceCreation->toMap() : null;
        }
        if (null !== $this->dedicatedHostGenerations) {
            $res['DedicatedHostGenerations'] = null !== $this->dedicatedHostGenerations ? $this->dedicatedHostGenerations->toMap() : null;
        }
        if (null !== $this->availableInstanceTypes) {
            $res['AvailableInstanceTypes'] = null !== $this->availableInstanceTypes ? $this->availableInstanceTypes->toMap() : null;
        }
        if (null !== $this->availableDiskCategories) {
            $res['AvailableDiskCategories'] = null !== $this->availableDiskCategories ? $this->availableDiskCategories->toMap() : null;
        }
        if (null !== $this->availableDedicatedHostTypes) {
            $res['AvailableDedicatedHostTypes'] = null !== $this->availableDedicatedHostTypes ? $this->availableDedicatedHostTypes->toMap() : null;
        }
        if (null !== $this->availableVolumeCategories) {
            $res['AvailableVolumeCategories'] = null !== $this->availableVolumeCategories ? $this->availableVolumeCategories->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['AvailableResources'])) {
            $model->availableResources = availableResources::fromMap($map['AvailableResources']);
        }
        if (isset($map['AvailableResourceCreation'])) {
            $model->availableResourceCreation = availableResourceCreation::fromMap($map['AvailableResourceCreation']);
        }
        if (isset($map['DedicatedHostGenerations'])) {
            $model->dedicatedHostGenerations = dedicatedHostGenerations::fromMap($map['DedicatedHostGenerations']);
        }
        if (isset($map['AvailableInstanceTypes'])) {
            $model->availableInstanceTypes = availableInstanceTypes::fromMap($map['AvailableInstanceTypes']);
        }
        if (isset($map['AvailableDiskCategories'])) {
            $model->availableDiskCategories = availableDiskCategories::fromMap($map['AvailableDiskCategories']);
        }
        if (isset($map['AvailableDedicatedHostTypes'])) {
            $model->availableDedicatedHostTypes = availableDedicatedHostTypes::fromMap($map['AvailableDedicatedHostTypes']);
        }
        if (isset($map['AvailableVolumeCategories'])) {
            $model->availableVolumeCategories = availableVolumeCategories::fromMap($map['AvailableVolumeCategories']);
        }

        return $model;
    }
}
