<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateLoadForecastByFileUrlJobResponseBody\data;

use AlibabaCloud\Tea\Model;

class response extends Model
{
    /**
     * @example null
     *
     * @var mixed
     */
    public $debugInfo;

    /**
     * @example PowerForecast
     *
     * @var string
     */
    public $jobType;

    /**
     * @example {"runTime": \\"2025-01-01 00:00:00\\", "value": 0.0}
     *
     * @var mixed
     */
    public $result;
    protected $_name = [
        'debugInfo' => 'DebugInfo',
        'jobType' => 'JobType',
        'result' => 'Result',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->debugInfo) {
            $res['DebugInfo'] = $this->debugInfo;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return response
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DebugInfo'])) {
            $model->debugInfo = $map['DebugInfo'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
