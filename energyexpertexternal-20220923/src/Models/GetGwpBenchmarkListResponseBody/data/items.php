<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpBenchmarkListResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description `activeReduction=benchmarkEmission-carbonEmission` Generally, baseline emissions are greater than inventory emissions. Maintain four decimal places. Unit pertains to a higher-level unit.
     *
     * @example 0.2169
     *
     * @var float
     */
    public $activeReduction;

    /**
     * @description Benchmark emissions. Maintain four decimal places. Unit pertains to a higher-level unit.
     *
     * @example 0.0108
     *
     * @var float
     */
    public $benchmarkEmission;

    /**
     * @description Benchmark name
     *
     * @example old-energy
     *
     * @var string
     */
    public $benchmarkName;

    /**
     * @description Inventory emissions. Maintain four decimal places. Unit pertains to a higher-level unit.
     *
     * @example -0.2061
     *
     * @var float
     */
    public $carbonEmission;

    /**
     * @description name
     *
     * @example new-energy
     *
     * @var string
     */
    public $name;

    /**
     * @description Unused temporarily.
     *
     * @example null
     *
     * @var string
     */
    public $percent;
    protected $_name = [
        'activeReduction'   => 'activeReduction',
        'benchmarkEmission' => 'benchmarkEmission',
        'benchmarkName'     => 'benchmarkName',
        'carbonEmission'    => 'carbonEmission',
        'name'              => 'name',
        'percent'           => 'percent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeReduction) {
            $res['activeReduction'] = $this->activeReduction;
        }
        if (null !== $this->benchmarkEmission) {
            $res['benchmarkEmission'] = $this->benchmarkEmission;
        }
        if (null !== $this->benchmarkName) {
            $res['benchmarkName'] = $this->benchmarkName;
        }
        if (null !== $this->carbonEmission) {
            $res['carbonEmission'] = $this->carbonEmission;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->percent) {
            $res['percent'] = $this->percent;
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
        if (isset($map['activeReduction'])) {
            $model->activeReduction = $map['activeReduction'];
        }
        if (isset($map['benchmarkEmission'])) {
            $model->benchmarkEmission = $map['benchmarkEmission'];
        }
        if (isset($map['benchmarkName'])) {
            $model->benchmarkName = $map['benchmarkName'];
        }
        if (isset($map['carbonEmission'])) {
            $model->carbonEmission = $map['carbonEmission'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['percent'])) {
            $model->percent = $map['percent'];
        }

        return $model;
    }
}
