<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanRequest;

use AlibabaCloud\Tea\Model;

class metric extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $concurrent;

    /**
     * @var int
     */
    public $throughput;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $peakQps;

    /**
     * @var int
     */
    public $averageQps;

    /**
     * @var int
     */
    public $responseTime;
    protected $_name = [
        'code'         => 'code',
        'concurrent'   => 'concurrent',
        'throughput'   => 'throughput',
        'type'         => 'type',
        'peakQps'      => 'peakQps',
        'averageQps'   => 'averageQps',
        'responseTime' => 'responseTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->concurrent) {
            $res['concurrent'] = $this->concurrent;
        }
        if (null !== $this->throughput) {
            $res['throughput'] = $this->throughput;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->peakQps) {
            $res['peakQps'] = $this->peakQps;
        }
        if (null !== $this->averageQps) {
            $res['averageQps'] = $this->averageQps;
        }
        if (null !== $this->responseTime) {
            $res['responseTime'] = $this->responseTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metric
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['concurrent'])) {
            $model->concurrent = $map['concurrent'];
        }
        if (isset($map['throughput'])) {
            $model->throughput = $map['throughput'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['peakQps'])) {
            $model->peakQps = $map['peakQps'];
        }
        if (isset($map['averageQps'])) {
            $model->averageQps = $map['averageQps'];
        }
        if (isset($map['responseTime'])) {
            $model->responseTime = $map['responseTime'];
        }

        return $model;
    }
}
