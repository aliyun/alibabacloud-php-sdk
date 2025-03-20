<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeDDoSBpsListResponseBody;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description Attack bandwidth, in bps.
     *
     * @example 9000000000
     *
     * @var int
     */
    public $attackBps;

    /**
     * @description Attack PPS.
     *
     * @example 9000000
     *
     * @var int
     */
    public $attackPps;

    /**
     * @description Normal business bandwidth, in bps.
     *
     * @example 1000000000
     *
     * @var int
     */
    public $normalBps;

    /**
     * @description Normal business PPS.
     *
     * @example 1000000
     *
     * @var int
     */
    public $normalPps;

    /**
     * @description The timestamp of this data, in ISO8601 format, using UTC+0, formatted as: yyyy-MM-ddTHH:mm:ssZ.
     *
     * @example 2023-05-14T17:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description Total bandwidth, in bps.
     *
     * @example 10000000000
     *
     * @var int
     */
    public $totalBps;

    /**
     * @description Total PPS.
     *
     * @example 100000000
     *
     * @var int
     */
    public $totalPps;
    protected $_name = [
        'attackBps' => 'AttackBps',
        'attackPps' => 'AttackPps',
        'normalBps' => 'NormalBps',
        'normalPps' => 'NormalPps',
        'timeStamp' => 'TimeStamp',
        'totalBps' => 'TotalBps',
        'totalPps' => 'TotalPps',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackBps) {
            $res['AttackBps'] = $this->attackBps;
        }
        if (null !== $this->attackPps) {
            $res['AttackPps'] = $this->attackPps;
        }
        if (null !== $this->normalBps) {
            $res['NormalBps'] = $this->normalBps;
        }
        if (null !== $this->normalPps) {
            $res['NormalPps'] = $this->normalPps;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->totalBps) {
            $res['TotalBps'] = $this->totalBps;
        }
        if (null !== $this->totalPps) {
            $res['TotalPps'] = $this->totalPps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackBps'])) {
            $model->attackBps = $map['AttackBps'];
        }
        if (isset($map['AttackPps'])) {
            $model->attackPps = $map['AttackPps'];
        }
        if (isset($map['NormalBps'])) {
            $model->normalBps = $map['NormalBps'];
        }
        if (isset($map['NormalPps'])) {
            $model->normalPps = $map['NormalPps'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['TotalBps'])) {
            $model->totalBps = $map['TotalBps'];
        }
        if (isset($map['TotalPps'])) {
            $model->totalPps = $map['TotalPps'];
        }

        return $model;
    }
}
