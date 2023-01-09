<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationListWithMetircsResponseBody\data\result;

use AlibabaCloud\Tea\Model;

class curMetrics extends Model
{
    /**
     * @description The number of blocked QPS.
     *
     * @example 100
     *
     * @var float
     */
    public $blockQps;

    /**
     * @description The number of abnormal QPS.
     *
     * @example 100
     *
     * @var float
     */
    public $expQps;

    /**
     * @description The number of passed QPS.
     *
     * @example 100
     *
     * @var float
     */
    public $passQps;

    /**
     * @description The number of queries per second (QPS).
     *
     * @example 895
     *
     * @var float
     */
    public $qps;

    /**
     * @description The response time (RT).
     *
     * @example 109
     *
     * @var float
     */
    public $rt;

    /**
     * @description The number of threads.
     *
     * @example 1
     *
     * @var float
     */
    public $thread;

    /**
     * @description The timestamp.
     *
     * @example 1666764426528
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'blockQps'  => 'BlockQps',
        'expQps'    => 'ExpQps',
        'passQps'   => 'PassQps',
        'qps'       => 'Qps',
        'rt'        => 'Rt',
        'thread'    => 'Thread',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockQps) {
            $res['BlockQps'] = $this->blockQps;
        }
        if (null !== $this->expQps) {
            $res['ExpQps'] = $this->expQps;
        }
        if (null !== $this->passQps) {
            $res['PassQps'] = $this->passQps;
        }
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
        }
        if (null !== $this->thread) {
            $res['Thread'] = $this->thread;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return curMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockQps'])) {
            $model->blockQps = $map['BlockQps'];
        }
        if (isset($map['ExpQps'])) {
            $model->expQps = $map['ExpQps'];
        }
        if (isset($map['PassQps'])) {
            $model->passQps = $map['PassQps'];
        }
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['Rt'])) {
            $model->rt = $map['Rt'];
        }
        if (isset($map['Thread'])) {
            $model->thread = $map['Thread'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
