<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class review extends Model
{
    /**
     * @var int
     */
    public $expired;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $tps;
    protected $_name = [
        'expired'   => 'Expired',
        'progress'  => 'Progress',
        'startTime' => 'StartTime',
        'total'     => 'Total',
        'tps'       => 'Tps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->tps) {
            $res['Tps'] = $this->tps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return review
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Tps'])) {
            $model->tps = $map['Tps'];
        }

        return $model;
    }
}
