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
    public $minor;

    /**
     * @var int
     */
    public $temperature;

    /**
     * @var int
     */
    public $powerUsage;

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
     * @var int
     */
    public $memoryUsed;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'model'       => 'Model',
        'minor'       => 'Minor',
        'temperature' => 'Temperature',
        'powerUsage'  => 'PowerUsage',
        'memoryTotal' => 'MemoryTotal',
        'make'        => 'Make',
        'dutyCycle'   => 'DutyCycle',
        'memoryUsed'  => 'MemoryUsed',
        'id'          => 'Id',
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
        if (null !== $this->minor) {
            $res['Minor'] = $this->minor;
        }
        if (null !== $this->temperature) {
            $res['Temperature'] = $this->temperature;
        }
        if (null !== $this->powerUsage) {
            $res['PowerUsage'] = $this->powerUsage;
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
        if (null !== $this->memoryUsed) {
            $res['MemoryUsed'] = $this->memoryUsed;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Minor'])) {
            $model->minor = $map['Minor'];
        }
        if (isset($map['Temperature'])) {
            $model->temperature = $map['Temperature'];
        }
        if (isset($map['PowerUsage'])) {
            $model->powerUsage = $map['PowerUsage'];
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
        if (isset($map['MemoryUsed'])) {
            $model->memoryUsed = $map['MemoryUsed'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
