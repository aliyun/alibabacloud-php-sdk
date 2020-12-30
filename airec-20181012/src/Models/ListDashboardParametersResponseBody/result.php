<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardParametersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $sceneId;

    /**
     * @var string[]
     */
    public $traceId;
    protected $_name = [
        'sceneId' => 'SceneId',
        'traceId' => 'TraceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['SceneId'])) {
            if (!empty($map['SceneId'])) {
                $model->sceneId = $map['SceneId'];
            }
        }
        if (isset($map['TraceId'])) {
            if (!empty($map['TraceId'])) {
                $model->traceId = $map['TraceId'];
            }
        }

        return $model;
    }
}
