<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeIpTrafficResponseBody;

use AlibabaCloud\Dara\Model;

class ipTrafficPoints extends Model
{
    /**
     * @var int
     */
    public $actConns;

    /**
     * @var int
     */
    public $cps;

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
    public $time;
    protected $_name = [
        'actConns' => 'ActConns',
        'cps' => 'Cps',
        'inactConns' => 'InactConns',
        'maxInbps' => 'MaxInbps',
        'maxOutbps' => 'MaxOutbps',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
