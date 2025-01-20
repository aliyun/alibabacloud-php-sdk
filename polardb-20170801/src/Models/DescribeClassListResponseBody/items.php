<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeClassListResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $classCode;
    /**
     * @var string
     */
    public $classGroup;
    /**
     * @var string
     */
    public $classTypeLevel;
    /**
     * @var string
     */
    public $cpu;
    /**
     * @var string
     */
    public $essdMaxStorageCapacity;
    /**
     * @var string
     */
    public $maxConnections;
    /**
     * @var string
     */
    public $maxIOPS;
    /**
     * @var string
     */
    public $maxStorageCapacity;
    /**
     * @var string
     */
    public $memoryClass;
    /**
     * @var string
     */
    public $pl1MaxIOPS;
    /**
     * @var string
     */
    public $pl2MaxIOPS;
    /**
     * @var string
     */
    public $pl3MaxIOPS;
    /**
     * @var string
     */
    public $polarStoreMaxStorageCapacity;
    /**
     * @var string
     */
    public $psl4MaxIOPS;
    /**
     * @var string
     */
    public $psl5MaxIOPS;
    /**
     * @var string
     */
    public $referenceExtPrice;
    /**
     * @var string
     */
    public $referencePrice;
    protected $_name = [
        'classCode'                    => 'ClassCode',
        'classGroup'                   => 'ClassGroup',
        'classTypeLevel'               => 'ClassTypeLevel',
        'cpu'                          => 'Cpu',
        'essdMaxStorageCapacity'       => 'EssdMaxStorageCapacity',
        'maxConnections'               => 'MaxConnections',
        'maxIOPS'                      => 'MaxIOPS',
        'maxStorageCapacity'           => 'MaxStorageCapacity',
        'memoryClass'                  => 'MemoryClass',
        'pl1MaxIOPS'                   => 'Pl1MaxIOPS',
        'pl2MaxIOPS'                   => 'Pl2MaxIOPS',
        'pl3MaxIOPS'                   => 'Pl3MaxIOPS',
        'polarStoreMaxStorageCapacity' => 'PolarStoreMaxStorageCapacity',
        'psl4MaxIOPS'                  => 'Psl4MaxIOPS',
        'psl5MaxIOPS'                  => 'Psl5MaxIOPS',
        'referenceExtPrice'            => 'ReferenceExtPrice',
        'referencePrice'               => 'ReferencePrice',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->essdMaxStorageCapacity) {
            $res['EssdMaxStorageCapacity'] = $this->essdMaxStorageCapacity;
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

        if (null !== $this->polarStoreMaxStorageCapacity) {
            $res['PolarStoreMaxStorageCapacity'] = $this->polarStoreMaxStorageCapacity;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['EssdMaxStorageCapacity'])) {
            $model->essdMaxStorageCapacity = $map['EssdMaxStorageCapacity'];
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

        if (isset($map['PolarStoreMaxStorageCapacity'])) {
            $model->polarStoreMaxStorageCapacity = $map['PolarStoreMaxStorageCapacity'];
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
