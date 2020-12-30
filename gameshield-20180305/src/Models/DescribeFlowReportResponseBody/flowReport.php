<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlowReportResponseBody;

use AlibabaCloud\Tea\Model;

class flowReport extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $actConns;

    /**
     * @var int
     */
    public $inactConns;

    /**
     * @var int
     */
    public $inBps;

    /**
     * @var int
     */
    public $outBps;
    protected $_name = [
        'index'      => 'Index',
        'actConns'   => 'ActConns',
        'inactConns' => 'InactConns',
        'inBps'      => 'InBps',
        'outBps'     => 'OutBps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->actConns) {
            $res['ActConns'] = $this->actConns;
        }
        if (null !== $this->inactConns) {
            $res['InactConns'] = $this->inactConns;
        }
        if (null !== $this->inBps) {
            $res['InBps'] = $this->inBps;
        }
        if (null !== $this->outBps) {
            $res['OutBps'] = $this->outBps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowReport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['ActConns'])) {
            $model->actConns = $map['ActConns'];
        }
        if (isset($map['InactConns'])) {
            $model->inactConns = $map['InactConns'];
        }
        if (isset($map['InBps'])) {
            $model->inBps = $map['InBps'];
        }
        if (isset($map['OutBps'])) {
            $model->outBps = $map['OutBps'];
        }

        return $model;
    }
}
