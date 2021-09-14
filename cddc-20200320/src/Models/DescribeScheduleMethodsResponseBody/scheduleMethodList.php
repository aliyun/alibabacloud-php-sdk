<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeScheduleMethodsResponseBody;

use AlibabaCloud\Tea\Model;

class scheduleMethodList extends Model
{
    /**
     * @var string
     */
    public $zonesOrder;

    /**
     * @var string
     */
    public $zoneDistribution;

    /**
     * @var int
     */
    public $CPUUtilityThreshold;

    /**
     * @var string
     */
    public $dedicatedHostGroupDesc;

    /**
     * @var int
     */
    public $memoryUtilityThreshold;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $instanceDistribution;

    /**
     * @var int
     */
    public $localDiskUtilityThreshold;

    /**
     * @var string
     */
    public $dedicatedHostGroupId;
    protected $_name = [
        'zonesOrder'                => 'ZonesOrder',
        'zoneDistribution'          => 'ZoneDistribution',
        'CPUUtilityThreshold'       => 'CPUUtilityThreshold',
        'dedicatedHostGroupDesc'    => 'DedicatedHostGroupDesc',
        'memoryUtilityThreshold'    => 'MemoryUtilityThreshold',
        'engine'                    => 'Engine',
        'instanceDistribution'      => 'InstanceDistribution',
        'localDiskUtilityThreshold' => 'LocalDiskUtilityThreshold',
        'dedicatedHostGroupId'      => 'DedicatedHostGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zonesOrder) {
            $res['ZonesOrder'] = $this->zonesOrder;
        }
        if (null !== $this->zoneDistribution) {
            $res['ZoneDistribution'] = $this->zoneDistribution;
        }
        if (null !== $this->CPUUtilityThreshold) {
            $res['CPUUtilityThreshold'] = $this->CPUUtilityThreshold;
        }
        if (null !== $this->dedicatedHostGroupDesc) {
            $res['DedicatedHostGroupDesc'] = $this->dedicatedHostGroupDesc;
        }
        if (null !== $this->memoryUtilityThreshold) {
            $res['MemoryUtilityThreshold'] = $this->memoryUtilityThreshold;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->instanceDistribution) {
            $res['InstanceDistribution'] = $this->instanceDistribution;
        }
        if (null !== $this->localDiskUtilityThreshold) {
            $res['LocalDiskUtilityThreshold'] = $this->localDiskUtilityThreshold;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduleMethodList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZonesOrder'])) {
            $model->zonesOrder = $map['ZonesOrder'];
        }
        if (isset($map['ZoneDistribution'])) {
            $model->zoneDistribution = $map['ZoneDistribution'];
        }
        if (isset($map['CPUUtilityThreshold'])) {
            $model->CPUUtilityThreshold = $map['CPUUtilityThreshold'];
        }
        if (isset($map['DedicatedHostGroupDesc'])) {
            $model->dedicatedHostGroupDesc = $map['DedicatedHostGroupDesc'];
        }
        if (isset($map['MemoryUtilityThreshold'])) {
            $model->memoryUtilityThreshold = $map['MemoryUtilityThreshold'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['InstanceDistribution'])) {
            $model->instanceDistribution = $map['InstanceDistribution'];
        }
        if (isset($map['LocalDiskUtilityThreshold'])) {
            $model->localDiskUtilityThreshold = $map['LocalDiskUtilityThreshold'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }

        return $model;
    }
}
