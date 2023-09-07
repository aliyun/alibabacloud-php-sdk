<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeClassListResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The specifications of the cluster.
     *
     * @example polar.mysql.x4.medium
     *
     * @var string
     */
    public $classCode;

    /**
     * @description The instance family of the cluster. Valid values:
     *
     *   Exclusive package: dedicated
     *   Exclusive physical machine: dedicated host
     *   Beginner: starter
     *   Historical specifications: historical
     *
     * @example Exclusive package
     *
     * @var string
     */
    public $classGroup;

    /**
     * @description The specification type of the cluster.
     *
     * @example enterprise
     *
     * @var string
     */
    public $classTypeLevel;

    /**
     * @description The number of vCPU cores. Unit: cores.
     *
     * @example 8
     *
     * @var string
     */
    public $cpu;

    /**
     * @description The maximum number of concurrent connections in the cluster.
     *
     * @example 8000
     *
     * @var string
     */
    public $maxConnections;

    /**
     * @description The maximum IOPS. Unit: operations per second.
     *
     * @example 32000
     *
     * @var string
     */
    public $maxIOPS;

    /**
     * @description The maximum storage capacity. Unit: TB.
     *
     * @example 20
     *
     * @var string
     */
    public $maxStorageCapacity;

    /**
     * @description The memory size. Unit: GB.
     *
     * @example 32
     *
     * @var string
     */
    public $memoryClass;

    /**
     * @description The maximum IOPS of an enhanced SSD (ESSD) of performance level 1 (PL1). Unit: operations per second.
     *
     * @example 50000
     *
     * @var string
     */
    public $pl1MaxIOPS;

    /**
     * @description The maximum IOPS of an ESSD of performance level 2 (PL2). Unit: operations per second.
     *
     * @example 100000
     *
     * @var string
     */
    public $pl2MaxIOPS;

    /**
     * @description The maximum IOPS of an ESSD of performance level 3 (PL3). Unit: operations per second.
     *
     * @example 1000000
     *
     * @var string
     */
    public $pl3MaxIOPS;

    /**
     * @description The maximum Input/output operations per second (IOPS) for PolarStore Level 4 (PSL4). Unit: operations per second.
     *
     * @example 48000
     *
     * @var string
     */
    public $psl4MaxIOPS;

    /**
     * @description The maximum IOPS for PolarStore Level 5 (PSL5). Unit: operations per second.
     *
     * @example 96000
     *
     * @var string
     */
    public $psl5MaxIOPS;

    /**
     * @description The additional price.
     *
     * >- If you set MasterHa to cluster or single, the value of ReferenceExtPrice is the price of the single-node cluster.
     * @example 200000
     *
     * @var string
     */
    public $referenceExtPrice;

    /**
     * @description The price.
     *
     * >- If you set CommodityCode to a commodity that uses the subscription billing method, ReferencePrice indicates the monthly fee that you need to pay.
     * @example 200000
     *
     * @var string
     */
    public $referencePrice;
    protected $_name = [
        'classCode'          => 'ClassCode',
        'classGroup'         => 'ClassGroup',
        'classTypeLevel'     => 'ClassTypeLevel',
        'cpu'                => 'Cpu',
        'maxConnections'     => 'MaxConnections',
        'maxIOPS'            => 'MaxIOPS',
        'maxStorageCapacity' => 'MaxStorageCapacity',
        'memoryClass'        => 'MemoryClass',
        'pl1MaxIOPS'         => 'Pl1MaxIOPS',
        'pl2MaxIOPS'         => 'Pl2MaxIOPS',
        'pl3MaxIOPS'         => 'Pl3MaxIOPS',
        'psl4MaxIOPS'        => 'Psl4MaxIOPS',
        'psl5MaxIOPS'        => 'Psl5MaxIOPS',
        'referenceExtPrice'  => 'ReferenceExtPrice',
        'referencePrice'     => 'ReferencePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }
        if (null !== $this->classGroup) {
            $res['ClassGroup'] = $this->classGroup;
        }
        if (null !== $this->classTypeLevel) {
            $res['ClassTypeLevel'] = $this->classTypeLevel;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }
        if (null !== $this->maxStorageCapacity) {
            $res['MaxStorageCapacity'] = $this->maxStorageCapacity;
        }
        if (null !== $this->memoryClass) {
            $res['MemoryClass'] = $this->memoryClass;
        }
        if (null !== $this->pl1MaxIOPS) {
            $res['Pl1MaxIOPS'] = $this->pl1MaxIOPS;
        }
        if (null !== $this->pl2MaxIOPS) {
            $res['Pl2MaxIOPS'] = $this->pl2MaxIOPS;
        }
        if (null !== $this->pl3MaxIOPS) {
            $res['Pl3MaxIOPS'] = $this->pl3MaxIOPS;
        }
        if (null !== $this->psl4MaxIOPS) {
            $res['Psl4MaxIOPS'] = $this->psl4MaxIOPS;
        }
        if (null !== $this->psl5MaxIOPS) {
            $res['Psl5MaxIOPS'] = $this->psl5MaxIOPS;
        }
        if (null !== $this->referenceExtPrice) {
            $res['ReferenceExtPrice'] = $this->referenceExtPrice;
        }
        if (null !== $this->referencePrice) {
            $res['ReferencePrice'] = $this->referencePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }
        if (isset($map['ClassGroup'])) {
            $model->classGroup = $map['ClassGroup'];
        }
        if (isset($map['ClassTypeLevel'])) {
            $model->classTypeLevel = $map['ClassTypeLevel'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }
        if (isset($map['MaxStorageCapacity'])) {
            $model->maxStorageCapacity = $map['MaxStorageCapacity'];
        }
        if (isset($map['MemoryClass'])) {
            $model->memoryClass = $map['MemoryClass'];
        }
        if (isset($map['Pl1MaxIOPS'])) {
            $model->pl1MaxIOPS = $map['Pl1MaxIOPS'];
        }
        if (isset($map['Pl2MaxIOPS'])) {
            $model->pl2MaxIOPS = $map['Pl2MaxIOPS'];
        }
        if (isset($map['Pl3MaxIOPS'])) {
            $model->pl3MaxIOPS = $map['Pl3MaxIOPS'];
        }
        if (isset($map['Psl4MaxIOPS'])) {
            $model->psl4MaxIOPS = $map['Psl4MaxIOPS'];
        }
        if (isset($map['Psl5MaxIOPS'])) {
            $model->psl5MaxIOPS = $map['Psl5MaxIOPS'];
        }
        if (isset($map['ReferenceExtPrice'])) {
            $model->referenceExtPrice = $map['ReferenceExtPrice'];
        }
        if (isset($map['ReferencePrice'])) {
            $model->referencePrice = $map['ReferencePrice'];
        }

        return $model;
    }
}
