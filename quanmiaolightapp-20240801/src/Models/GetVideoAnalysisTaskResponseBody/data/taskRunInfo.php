<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data;

use AlibabaCloud\Tea\Model;

class taskRunInfo extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $concurrentChargeEnable;

    /**
     * @example 1
     *
     * @var int
     */
    public $responseTime;
    protected $_name = [
        'concurrentChargeEnable' => 'concurrentChargeEnable',
        'responseTime'           => 'responseTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->concurrentChargeEnable) {
            $res['concurrentChargeEnable'] = $this->concurrentChargeEnable;
        }
        if (null !== $this->responseTime) {
            $res['responseTime'] = $this->responseTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskRunInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['concurrentChargeEnable'])) {
            $model->concurrentChargeEnable = $map['concurrentChargeEnable'];
        }
        if (isset($map['responseTime'])) {
            $model->responseTime = $map['responseTime'];
        }

        return $model;
    }
}
