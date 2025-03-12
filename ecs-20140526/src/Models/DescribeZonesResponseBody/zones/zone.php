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
     * @description The supported dedicated host types.
     *
     * @var availableDedicatedHostTypes
     */
    public $availableDedicatedHostTypes;

    /**
     * @description The supported disk categories. Valid values:
     *
     *   cloud: basic disk
     *   cloud_ssd: standard SSD
     *   cloud_efficiency: ultra disk
     *   cloud_essd: ESSD
     *
     * @var availableDiskCategories
     */
    public $availableDiskCategories;

    /**
     * @description The supported instance types.
     *
     * @var availableInstanceTypes
     */
    public $availableInstanceTypes;

    /**
     * @description The types of resources that can be created. Valid values:
     *
     *   VSwitch: vSwitch
     *   IoOptimized: I/O optimized instance
     *   Instance: instance
     *   DedicatedHost: dedicated host
     *   disk: disk
     *
     * @var availableResourceCreation
     */
    public $availableResourceCreation;

    /**
     * @description Details about the resources that can be created in the zone.
     *
     * @var availableResources
     */
    public $availableResources;

    /**
     * @description The supported Shared Block Storage device categories.
     *
     * @var availableVolumeCategories
     */
    public $availableVolumeCategories;

    /**
     * @description The supported generations of dedicated hosts.
     *
     * @var dedicatedHostGenerations
     */
    public $dedicatedHostGenerations;

    /**
     * @description The name of the zone in the local language.
     *
     * @example Hangzhou Zone G
     *
     * @var string
     */
    public $localName;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The type of the zone. Valid values:
     *
     *   AvailabilityZone: zone for the Alibaba Cloud public cloud
     *   CloudBoxZone: zone for CloudBox
     *
     * @example AvailabilityZone
     *
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'availableDedicatedHostTypes' => 'AvailableDedicatedHostTypes',
        'availableDiskCategories'     => 'AvailableDiskCategories',
        'availableInstanceTypes'      => 'AvailableInstanceTypes',
        'availableResourceCreation'   => 'AvailableResourceCreation',
        'availableResources'          => 'AvailableResources',
        'availableVolumeCategories'   => 'AvailableVolumeCategories',
        'dedicatedHostGenerations'    => 'DedicatedHostGenerations',
        'localName'                   => 'LocalName',
        'zoneId'                      => 'ZoneId',
        'zoneType'                    => 'ZoneType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableDedicatedHostTypes) {
            $res['AvailableDedicatedHostTypes'] = null !== $this->availableDedicatedHostTypes ? $this->availableDedicatedHostTypes->toMap() : null;
        }
        if (null !== $this->availableDiskCategories) {
            $res['AvailableDiskCategories'] = null !== $this->availableDiskCategories ? $this->availableDiskCategories->toMap() : null;
        }
        if (null !== $this->availableInstanceTypes) {
            $res['AvailableInstanceTypes'] = null !== $this->availableInstanceTypes ? $this->availableInstanceTypes->toMap() : null;
        }
        if (null !== $this->availableResourceCreation) {
            $res['AvailableResourceCreation'] = null !== $this->availableResourceCreation ? $this->availableResourceCreation->toMap() : null;
        }
        if (null !== $this->availableResources) {
            $res['AvailableResources'] = null !== $this->availableResources ? $this->availableResources->toMap() : null;
        }
        if (null !== $this->availableVolumeCategories) {
            $res['AvailableVolumeCategories'] = null !== $this->availableVolumeCategories ? $this->availableVolumeCategories->toMap() : null;
        }
        if (null !== $this->dedicatedHostGenerations) {
            $res['DedicatedHostGenerations'] = null !== $this->dedicatedHostGenerations ? $this->dedicatedHostGenerations->toMap() : null;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneType) {
            $res['ZoneType'] = $this->zoneType;
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
        if (isset($map['AvailableDedicatedHostTypes'])) {
            $model->availableDedicatedHostTypes = availableDedicatedHostTypes::fromMap($map['AvailableDedicatedHostTypes']);
        }
        if (isset($map['AvailableDiskCategories'])) {
            $model->availableDiskCategories = availableDiskCategories::fromMap($map['AvailableDiskCategories']);
        }
        if (isset($map['AvailableInstanceTypes'])) {
            $model->availableInstanceTypes = availableInstanceTypes::fromMap($map['AvailableInstanceTypes']);
        }
        if (isset($map['AvailableResourceCreation'])) {
            $model->availableResourceCreation = availableResourceCreation::fromMap($map['AvailableResourceCreation']);
        }
        if (isset($map['AvailableResources'])) {
            $model->availableResources = availableResources::fromMap($map['AvailableResources']);
        }
        if (isset($map['AvailableVolumeCategories'])) {
            $model->availableVolumeCategories = availableVolumeCategories::fromMap($map['AvailableVolumeCategories']);
        }
        if (isset($map['DedicatedHostGenerations'])) {
            $model->dedicatedHostGenerations = dedicatedHostGenerations::fromMap($map['DedicatedHostGenerations']);
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneType'])) {
            $model->zoneType = $map['ZoneType'];
        }

        return $model;
    }
}
