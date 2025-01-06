<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeDDoSBpsListResponseBody;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @example 9000000000
     *
     * @var int
     */
    public $attackBps;

    /**
     * @example 9000000
     *
     * @var int
     */
    public $attackPps;

    /**
     * @example 1000000000
     *
     * @var int
     */
    public $normalBps;

    /**
     * @example 1000000
     *
     * @var int
     */
    public $normalPps;

    /**
     * @example 2023-05-14T17:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @example 10000000000
     *
     * @var int
     */
    public $totalBps;

    /**
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
        'totalBps'  => 'TotalBps',
        'totalPps'  => 'TotalPps',
    ];

    public function validate()
    {
    }

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
