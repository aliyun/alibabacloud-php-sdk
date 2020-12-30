<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardDetailsFlowsResponseBody\result;

use AlibabaCloud\Tea\Model;

class metricData extends Model
{
    /**
     * @var mixed[]
     */
    public $metricRes;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'metricRes' => 'MetricRes',
        'sceneId'   => 'SceneId',
        'traceId'   => 'TraceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricRes) {
            $res['MetricRes'] = $this->metricRes;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
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
        if (isset($map['MetricRes'])) {
            $model->metricRes = $map['MetricRes'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
