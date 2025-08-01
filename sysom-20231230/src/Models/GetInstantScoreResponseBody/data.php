<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetInstantScoreResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100
     *
     * @var float
     */
    public $error;

    /**
     * @example 100
     *
     * @var float
     */
    public $latency;

    /**
     * @example 100
     *
     * @var float
     */
    public $load;

    /**
     * @example 100
     *
     * @var float
     */
    public $saturation;

    /**
     * @var float
     */
    public $total;
    protected $_name = [
        'error' => 'error',
        'latency' => 'latency',
        'load' => 'load',
        'saturation' => 'saturation',
        'total' => 'total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->error) {
            $res['error'] = $this->error;
        }
        if (null !== $this->latency) {
            $res['latency'] = $this->latency;
        }
        if (null !== $this->load) {
            $res['load'] = $this->load;
        }
        if (null !== $this->saturation) {
            $res['saturation'] = $this->saturation;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['error'])) {
            $model->error = $map['error'];
        }
        if (isset($map['latency'])) {
            $model->latency = $map['latency'];
        }
        if (isset($map['load'])) {
            $model->load = $map['load'];
        }
        if (isset($map['saturation'])) {
            $model->saturation = $map['saturation'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
