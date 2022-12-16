<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationListWithMetircsResponseBody\data\result;

use AlibabaCloud\Tea\Model;

class curMetrics extends Model
{
    /**
     * @var float
     */
    public $blockQps;

    /**
     * @var float
     */
    public $expQps;

    /**
     * @var float
     */
    public $passQps;

    /**
     * @example 895
     *
     * @var float
     */
    public $qps;

    /**
     * @description Rt。
     *
     * @example 109
     *
     * @var float
     */
    public $rt;

    /**
     * @example 1
     *
     * @var float
     */
    public $thread;

    /**
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
