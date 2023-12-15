<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricRequest extends Model
{
    /**
     * @var string
     */
    public $bizid;

    /**
     * @var string
     */
    public $innerIp;

    /**
     * @var string
     */
    public $metric;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $timeArea;
    protected $_name = [
        'bizid'    => 'Bizid',
        'innerIp'  => 'InnerIp',
        'metric'   => 'Metric',
        'period'   => 'Period',
        'port'     => 'Port',
        'timeArea' => 'TimeArea',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->innerIp) {
            $res['InnerIp'] = $this->innerIp;
        }
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->timeArea) {
            $res['TimeArea'] = $this->timeArea;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['InnerIp'])) {
            $model->innerIp = $map['InnerIp'];
        }
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['TimeArea'])) {
            $model->timeArea = $map['TimeArea'];
        }

        return $model;
    }
}
