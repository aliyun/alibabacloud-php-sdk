<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseRequest;

use AlibabaCloud\Tea\Model;

class ECSClassList extends Model
{
    /**
     * @var string
     */
    public $dataDiskPerformanceLevel;

    /**
     * @var int
     */
    public $diskCapacity;

    /**
     * @var int
     */
    public $diskCount;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var int
     */
    public $sysDiskCapacity;

    /**
     * @var string
     */
    public $sysDiskType;

    /**
     * @var string
     */
    public $systemDiskPerformanceLevel;
    protected $_name = [
        'dataDiskPerformanceLevel'   => 'dataDiskPerformanceLevel',
        'diskCapacity'               => 'diskCapacity',
        'diskCount'                  => 'diskCount',
        'diskType'                   => 'diskType',
        'instanceType'               => 'instanceType',
        'nodeCount'                  => 'nodeCount',
        'sysDiskCapacity'            => 'sysDiskCapacity',
        'sysDiskType'                => 'sysDiskType',
        'systemDiskPerformanceLevel' => 'systemDiskPerformanceLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDiskPerformanceLevel) {
            $res['dataDiskPerformanceLevel'] = $this->dataDiskPerformanceLevel;
        }
        if (null !== $this->diskCapacity) {
            $res['diskCapacity'] = $this->diskCapacity;
        }
        if (null !== $this->diskCount) {
            $res['diskCount'] = $this->diskCount;
        }
        if (null !== $this->diskType) {
            $res['diskType'] = $this->diskType;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->nodeCount) {
            $res['nodeCount'] = $this->nodeCount;
        }
        if (null !== $this->sysDiskCapacity) {
            $res['sysDiskCapacity'] = $this->sysDiskCapacity;
        }
        if (null !== $this->sysDiskType) {
            $res['sysDiskType'] = $this->sysDiskType;
        }
        if (null !== $this->systemDiskPerformanceLevel) {
            $res['systemDiskPerformanceLevel'] = $this->systemDiskPerformanceLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ECSClassList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataDiskPerformanceLevel'])) {
            $model->dataDiskPerformanceLevel = $map['dataDiskPerformanceLevel'];
        }
        if (isset($map['diskCapacity'])) {
            $model->diskCapacity = $map['diskCapacity'];
        }
        if (isset($map['diskCount'])) {
            $model->diskCount = $map['diskCount'];
        }
        if (isset($map['diskType'])) {
            $model->diskType = $map['diskType'];
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['nodeCount'])) {
            $model->nodeCount = $map['nodeCount'];
        }
        if (isset($map['sysDiskCapacity'])) {
            $model->sysDiskCapacity = $map['sysDiskCapacity'];
        }
        if (isset($map['sysDiskType'])) {
            $model->sysDiskType = $map['sysDiskType'];
        }
        if (isset($map['systemDiskPerformanceLevel'])) {
            $model->systemDiskPerformanceLevel = $map['systemDiskPerformanceLevel'];
        }

        return $model;
    }
}
