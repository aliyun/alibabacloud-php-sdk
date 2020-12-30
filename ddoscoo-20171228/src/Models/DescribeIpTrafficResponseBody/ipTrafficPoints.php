<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeIpTrafficResponseBody;

use AlibabaCloud\Tea\Model;

class ipTrafficPoints extends Model
{
    /**
     * @var int
     */
    public $actConns;

    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $inactConns;

    /**
     * @var int
     */
    public $maxInbps;

    /**
     * @var int
     */
    public $maxOutbps;

    /**
     * @var int
     */
    public $cps;
    protected $_name = [
        'actConns'   => 'ActConns',
        'time'       => 'Time',
        'inactConns' => 'InactConns',
        'maxInbps'   => 'MaxInbps',
        'maxOutbps'  => 'MaxOutbps',
        'cps'        => 'Cps',
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
        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
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
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
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
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }

        return $model;
    }
}
