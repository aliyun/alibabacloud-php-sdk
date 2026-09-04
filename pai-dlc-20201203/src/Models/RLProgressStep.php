<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLProgressStep extends Model
{
    /**
     * @var int
     */
    public $current;

    /**
     * @var int
     */
    public $etaSec;

    /**
     * @var float
     */
    public $paceSec;

    /**
     * @var float
     */
    public $pct;

    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'current' => 'Current',
        'etaSec' => 'EtaSec',
        'paceSec' => 'PaceSec',
        'pct' => 'Pct',
        'time' => 'Time',
        'total' => 'Total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->etaSec) {
            $res['EtaSec'] = $this->etaSec;
        }

        if (null !== $this->paceSec) {
            $res['PaceSec'] = $this->paceSec;
        }

        if (null !== $this->pct) {
            $res['Pct'] = $this->pct;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }

        if (isset($map['EtaSec'])) {
            $model->etaSec = $map['EtaSec'];
        }

        if (isset($map['PaceSec'])) {
            $model->paceSec = $map['PaceSec'];
        }

        if (isset($map['Pct'])) {
            $model->pct = $map['Pct'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
