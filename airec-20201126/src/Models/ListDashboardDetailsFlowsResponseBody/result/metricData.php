<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListDashboardDetailsFlowsResponseBody\result;

use AlibabaCloud\Tea\Model;

class metricData extends Model
{
    /**
     * @example xxx
     *
     * @var mixed[]
     */
    public $metricRes;

    /**
     * @example test
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description trace_id
     *
     * @example Alibaba
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'metricRes' => 'metricRes',
        'sceneId'   => 'sceneId',
        'traceId'   => 'traceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricRes) {
            $res['metricRes'] = $this->metricRes;
        }
        if (null !== $this->sceneId) {
            $res['sceneId'] = $this->sceneId;
        }
        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['metricRes'])) {
            $model->metricRes = $map['metricRes'];
        }
        if (isset($map['sceneId'])) {
            $model->sceneId = $map['sceneId'];
        }
        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }

        return $model;
    }
}
