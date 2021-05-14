<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class fullRevise extends Model
{
    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var int
     */
    public $tps;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $expired;
    protected $_name = [
        'startTime' => 'StartTime',
        'progress'  => 'Progress',
        'tps'       => 'Tps',
        'total'     => 'Total',
        'expired'   => 'Expired',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->tps) {
            $res['Tps'] = $this->tps;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fullRevise
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Tps'])) {
            $model->tps = $map['Tps'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        return $model;
    }
}
