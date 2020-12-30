<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\Tea\Model;

class acceleratorStats extends Model
{
    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $memoryTotal;

    /**
     * @var string
     */
    public $make;

    /**
     * @var int
     */
    public $dutyCycle;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $memoryUsed;
    protected $_name = [
        'model'       => 'Model',
        'memoryTotal' => 'MemoryTotal',
        'make'        => 'Make',
        'dutyCycle'   => 'DutyCycle',
        'id'          => 'Id',
        'memoryUsed'  => 'MemoryUsed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->memoryTotal) {
            $res['MemoryTotal'] = $this->memoryTotal;
        }
        if (null !== $this->make) {
            $res['Make'] = $this->make;
        }
        if (null !== $this->dutyCycle) {
            $res['DutyCycle'] = $this->dutyCycle;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->memoryUsed) {
            $res['MemoryUsed'] = $this->memoryUsed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return acceleratorStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['MemoryTotal'])) {
            $model->memoryTotal = $map['MemoryTotal'];
        }
        if (isset($map['Make'])) {
            $model->make = $map['Make'];
        }
        if (isset($map['DutyCycle'])) {
            $model->dutyCycle = $map['DutyCycle'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MemoryUsed'])) {
            $model->memoryUsed = $map['MemoryUsed'];
        }

        return $model;
    }
}
