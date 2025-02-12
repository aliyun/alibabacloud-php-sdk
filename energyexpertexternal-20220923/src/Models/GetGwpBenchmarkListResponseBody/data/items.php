<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpBenchmarkListResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var float
     */
    public $activeReduction;
    /**
     * @var float
     */
    public $benchmarkEmission;
    /**
     * @var string
     */
    public $benchmarkName;
    /**
     * @var float
     */
    public $carbonEmission;
    /**
     * @var string
     */
    public $name;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
