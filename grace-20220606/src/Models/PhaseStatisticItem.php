<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Grace\V20220606\Models;

use AlibabaCloud\Tea\Model;

class PhaseStatisticItem extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var float
     */
    public $durationAvg;

    /**
     * @var float
     */
    public $durationMax;

    /**
     * @var float
     */
    public $durationTotal;

    /**
     * @var float
     */
    public $intervalAvg;

    /**
     * @var float
     */
    public $intervalMin;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'count'         => 'count',
        'durationAvg'   => 'durationAvg',
        'durationMax'   => 'durationMax',
        'durationTotal' => 'durationTotal',
        'intervalAvg'   => 'intervalAvg',
        'intervalMin'   => 'intervalMin',
        'name'          => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->durationAvg) {
            $res['durationAvg'] = $this->durationAvg;
        }
        if (null !== $this->durationMax) {
            $res['durationMax'] = $this->durationMax;
        }
        if (null !== $this->durationTotal) {
            $res['durationTotal'] = $this->durationTotal;
        }
        if (null !== $this->intervalAvg) {
            $res['intervalAvg'] = $this->intervalAvg;
        }
        if (null !== $this->intervalMin) {
            $res['intervalMin'] = $this->intervalMin;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PhaseStatisticItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['durationAvg'])) {
            $model->durationAvg = $map['durationAvg'];
        }
        if (isset($map['durationMax'])) {
            $model->durationMax = $map['durationMax'];
        }
        if (isset($map['durationTotal'])) {
            $model->durationTotal = $map['durationTotal'];
        }
        if (isset($map['intervalAvg'])) {
            $model->intervalAvg = $map['intervalAvg'];
        }
        if (isset($map['intervalMin'])) {
            $model->intervalMin = $map['intervalMin'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
