<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardDetailsResponseBody;

use AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardDetailsResponseBody\result\metricRes;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var metricRes
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
            $res['MetricRes'] = null !== $this->metricRes ? $this->metricRes->toMap() : null;
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricRes'])) {
            $model->metricRes = metricRes::fromMap($map['MetricRes']);
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
