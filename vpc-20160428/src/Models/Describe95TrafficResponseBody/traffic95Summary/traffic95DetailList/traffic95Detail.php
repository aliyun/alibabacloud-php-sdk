<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\Describe95TrafficResponseBody\traffic95Summary\traffic95DetailList;

use AlibabaCloud\Tea\Model;

class traffic95Detail extends Model
{
    /**
     * @description The sampled bandwidth value, which is the larger bandwidth value in the inbound and outbound directions within a sampling interval. Unit: Mbit/s.
     *
     * @example 118.5090322113037
     *
     * @var string
     */
    public $billBandwidth;

    /**
     * @description The inbound bandwidth. Unit: Mbit/s.
     *
     * @example 118.5090322113037
     *
     * @var string
     */
    public $inBandwidth;

    /**
     * @description The outbound bandwidth. Unit: Mbit/s.
     *
     * @example 96.41217480977376
     *
     * @var string
     */
    public $outBandwidth;

    /**
     * @description The statistical time. The value is a string.
     *
     * @example 2024-01-01T00:00:00Z
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'billBandwidth' => 'BillBandwidth',
        'inBandwidth'   => 'InBandwidth',
        'outBandwidth'  => 'OutBandwidth',
        'time'          => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billBandwidth) {
            $res['BillBandwidth'] = $this->billBandwidth;
        }
        if (null !== $this->inBandwidth) {
            $res['InBandwidth'] = $this->inBandwidth;
        }
        if (null !== $this->outBandwidth) {
            $res['OutBandwidth'] = $this->outBandwidth;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return traffic95Detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillBandwidth'])) {
            $model->billBandwidth = $map['BillBandwidth'];
        }
        if (isset($map['InBandwidth'])) {
            $model->inBandwidth = $map['InBandwidth'];
        }
        if (isset($map['OutBandwidth'])) {
            $model->outBandwidth = $map['OutBandwidth'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
