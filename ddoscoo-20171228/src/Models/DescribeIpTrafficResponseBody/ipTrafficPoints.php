<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeIpTrafficResponseBody;

use AlibabaCloud\Tea\Model;

class ipTrafficPoints extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $actConns;

    /**
     * @example 100
     *
     * @var int
     */
    public $cps;

    /**
     * @example 100
     *
     * @var int
     */
    public $inactConns;

    /**
     * @example 10000
     *
     * @var int
     */
    public $maxInbps;

    /**
     * @example 10000
     *
     * @var int
     */
    public $maxOutbps;

    /**
     * @example 1536734112
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'actConns'   => 'ActConns',
        'cps'        => 'Cps',
        'inactConns' => 'InactConns',
        'maxInbps'   => 'MaxInbps',
        'maxOutbps'  => 'MaxOutbps',
        'time'       => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actConns) {
            $res['ActConns'] = $this->actConns;
        }
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->inactConns) {
            $res['InactConns'] = $this->inactConns;
        }
        if (null !== $this->maxInbps) {
            $res['MaxInbps'] = $this->maxInbps;
        }
        if (null !== $this->maxOutbps) {
            $res['MaxOutbps'] = $this->maxOutbps;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipTrafficPoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActConns'])) {
            $model->actConns = $map['ActConns'];
        }
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['InactConns'])) {
            $model->inactConns = $map['InactConns'];
        }
        if (isset($map['MaxInbps'])) {
            $model->maxInbps = $map['MaxInbps'];
        }
        if (isset($map['MaxOutbps'])) {
            $model->maxOutbps = $map['MaxOutbps'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
