<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeClassListResponseBody;

use AlibabaCloud\Tea\Model;

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
    public $maxConnections;

    /**
     * @var string
     */
    public $maxIOPS;

    /**
     * @var string
     */
    public $memoryClass;

    /**
     * @var string
     */
    public $referencePrice;
    protected $_name = [
        'classCode'      => 'ClassCode',
        'classGroup'     => 'ClassGroup',
        'classTypeLevel' => 'ClassTypeLevel',
        'cpu'            => 'Cpu',
        'maxConnections' => 'MaxConnections',
        'maxIOPS'        => 'MaxIOPS',
        'memoryClass'    => 'MemoryClass',
        'referencePrice' => 'ReferencePrice',
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
        if (null !== $this->memoryClass) {
            $res['MemoryClass'] = $this->memoryClass;
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
        if (isset($map['MemoryClass'])) {
            $model->memoryClass = $map['MemoryClass'];
        }
        if (isset($map['ReferencePrice'])) {
            $model->referencePrice = $map['ReferencePrice'];
        }

        return $model;
    }
}
