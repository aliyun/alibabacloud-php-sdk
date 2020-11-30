<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeIpTrafficResponse;

use AlibabaCloud\Tea\Model;

class ipTrafficPoints extends Model
{
    /**
     * @var int
     */
    public $time;

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

    /**
     * @var int
     */
    public $actConns;

    /**
     * @var int
     */
    public $inactConns;
    protected $_name = [
        'time'       => 'Time',
        'maxInbps'   => 'MaxInbps',
        'maxOutbps'  => 'MaxOutbps',
        'cps'        => 'Cps',
        'actConns'   => 'ActConns',
        'inactConns' => 'InactConns',
    ];

    public function validate()
    {
        Model::validateRequired('time', $this->time, true);
        Model::validateRequired('maxInbps', $this->maxInbps, true);
        Model::validateRequired('maxOutbps', $this->maxOutbps, true);
        Model::validateRequired('cps', $this->cps, true);
        Model::validateRequired('actConns', $this->actConns, true);
        Model::validateRequired('inactConns', $this->inactConns, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (null !== $this->actConns) {
            $res['ActConns'] = $this->actConns;
        }
        if (null !== $this->inactConns) {
            $res['InactConns'] = $this->inactConns;
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
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
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
        if (isset($map['ActConns'])) {
            $model->actConns = $map['ActConns'];
        }
        if (isset($map['InactConns'])) {
            $model->inactConns = $map['InactConns'];
        }

        return $model;
    }
}
