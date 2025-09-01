<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class GetHotspotCompareRequest extends Model
{
    /**
     * @var int
     */
    public $beg1End;

    /**
     * @var int
     */
    public $beg1Start;

    /**
     * @var int
     */
    public $beg2End;

    /**
     * @var int
     */
    public $beg2Start;

    /**
     * @var string
     */
    public $hotType;

    /**
     * @var string
     */
    public $instance1;

    /**
     * @var string
     */
    public $instance2;

    /**
     * @var int
     */
    public $pid1;

    /**
     * @var int
     */
    public $pid2;

    /**
     * @var string
     */
    public $table;
    protected $_name = [
        'beg1End' => 'beg1_end',
        'beg1Start' => 'beg1_start',
        'beg2End' => 'beg2_end',
        'beg2Start' => 'beg2_start',
        'hotType' => 'hot_type',
        'instance1' => 'instance1',
        'instance2' => 'instance2',
        'pid1' => 'pid1',
        'pid2' => 'pid2',
        'table' => 'table',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beg1End) {
            $res['beg1_end'] = $this->beg1End;
        }

        if (null !== $this->beg1Start) {
            $res['beg1_start'] = $this->beg1Start;
        }

        if (null !== $this->beg2End) {
            $res['beg2_end'] = $this->beg2End;
        }

        if (null !== $this->beg2Start) {
            $res['beg2_start'] = $this->beg2Start;
        }

        if (null !== $this->hotType) {
            $res['hot_type'] = $this->hotType;
        }

        if (null !== $this->instance1) {
            $res['instance1'] = $this->instance1;
        }

        if (null !== $this->instance2) {
            $res['instance2'] = $this->instance2;
        }

        if (null !== $this->pid1) {
            $res['pid1'] = $this->pid1;
        }

        if (null !== $this->pid2) {
            $res['pid2'] = $this->pid2;
        }

        if (null !== $this->table) {
            $res['table'] = $this->table;
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
        if (isset($map['beg1_end'])) {
            $model->beg1End = $map['beg1_end'];
        }

        if (isset($map['beg1_start'])) {
            $model->beg1Start = $map['beg1_start'];
        }

        if (isset($map['beg2_end'])) {
            $model->beg2End = $map['beg2_end'];
        }

        if (isset($map['beg2_start'])) {
            $model->beg2Start = $map['beg2_start'];
        }

        if (isset($map['hot_type'])) {
            $model->hotType = $map['hot_type'];
        }

        if (isset($map['instance1'])) {
            $model->instance1 = $map['instance1'];
        }

        if (isset($map['instance2'])) {
            $model->instance2 = $map['instance2'];
        }

        if (isset($map['pid1'])) {
            $model->pid1 = $map['pid1'];
        }

        if (isset($map['pid2'])) {
            $model->pid2 = $map['pid2'];
        }

        if (isset($map['table'])) {
            $model->table = $map['table'];
        }

        return $model;
    }
}
