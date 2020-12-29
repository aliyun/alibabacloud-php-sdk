<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeFlowgraphResponseBody;

use AlibabaCloud\Tea\Model;

class flowgraphs extends Model
{
    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $bps;

    /**
     * @var int
     */
    public $pps;
    protected $_name = [
        'time' => 'Time',
        'bps'  => 'Bps',
        'pps'  => 'Pps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowgraphs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }

        return $model;
    }
}
