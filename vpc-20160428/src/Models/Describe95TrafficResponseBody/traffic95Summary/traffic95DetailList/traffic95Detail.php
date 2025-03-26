<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\Describe95TrafficResponseBody\traffic95Summary\traffic95DetailList;

use AlibabaCloud\Dara\Model;

class traffic95Detail extends Model
{
    /**
     * @var string
     */
    public $billBandwidth;

    /**
     * @var string
     */
    public $inBandwidth;

    /**
     * @var string
     */
    public $outBandwidth;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'billBandwidth' => 'BillBandwidth',
        'inBandwidth' => 'InBandwidth',
        'outBandwidth' => 'OutBandwidth',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
