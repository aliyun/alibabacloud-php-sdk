<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody\data;

use AlibabaCloud\Tea\Model;

class hdd extends Model
{
    /**
     * @var bool
     */
    public $display;

    /**
     * @var int
     */
    public $oversellRatio;

    /**
     * @var int
     */
    public $remain;

    /**
     * @var bool
     */
    public $reserveDisable;

    /**
     * @var int
     */
    public $reserveDisableTotal;

    /**
     * @var int
     */
    public $reserved;

    /**
     * @var bool
     */
    public $statusDisable;

    /**
     * @var int
     */
    public $statusDisableTotal;

    /**
     * @var int
     */
    public $total;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $used;

    /**
     * @var int
     */
    public $usedRatio;
    protected $_name = [
        'display'             => 'Display',
        'oversellRatio'       => 'OversellRatio',
        'remain'              => 'Remain',
        'reserveDisable'      => 'ReserveDisable',
        'reserveDisableTotal' => 'ReserveDisableTotal',
        'reserved'            => 'Reserved',
        'statusDisable'       => 'StatusDisable',
        'statusDisableTotal'  => 'StatusDisableTotal',
        'total'               => 'Total',
        'type'                => 'Type',
        'used'                => 'Used',
        'usedRatio'           => 'UsedRatio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->display) {
            $res['Display'] = $this->display;
        }
        if (null !== $this->oversellRatio) {
            $res['OversellRatio'] = $this->oversellRatio;
        }
        if (null !== $this->remain) {
            $res['Remain'] = $this->remain;
        }
        if (null !== $this->reserveDisable) {
            $res['ReserveDisable'] = $this->reserveDisable;
        }
        if (null !== $this->reserveDisableTotal) {
            $res['ReserveDisableTotal'] = $this->reserveDisableTotal;
        }
        if (null !== $this->reserved) {
            $res['Reserved'] = $this->reserved;
        }
        if (null !== $this->statusDisable) {
            $res['StatusDisable'] = $this->statusDisable;
        }
        if (null !== $this->statusDisableTotal) {
            $res['StatusDisableTotal'] = $this->statusDisableTotal;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->used) {
            $res['Used'] = $this->used;
        }
        if (null !== $this->usedRatio) {
            $res['UsedRatio'] = $this->usedRatio;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hdd
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Display'])) {
            $model->display = $map['Display'];
        }
        if (isset($map['OversellRatio'])) {
            $model->oversellRatio = $map['OversellRatio'];
        }
        if (isset($map['Remain'])) {
            $model->remain = $map['Remain'];
        }
        if (isset($map['ReserveDisable'])) {
            $model->reserveDisable = $map['ReserveDisable'];
        }
        if (isset($map['ReserveDisableTotal'])) {
            $model->reserveDisableTotal = $map['ReserveDisableTotal'];
        }
        if (isset($map['Reserved'])) {
            $model->reserved = $map['Reserved'];
        }
        if (isset($map['StatusDisable'])) {
            $model->statusDisable = $map['StatusDisable'];
        }
        if (isset($map['StatusDisableTotal'])) {
            $model->statusDisableTotal = $map['StatusDisableTotal'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Used'])) {
            $model->used = $map['Used'];
        }
        if (isset($map['UsedRatio'])) {
            $model->usedRatio = $map['UsedRatio'];
        }

        return $model;
    }
}
