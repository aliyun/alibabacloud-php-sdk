<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListSceneParametersResponseBody;

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
        'sceneId' => 'sceneId',
        'traceId' => 'traceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sceneId'])) {
            if (!empty($map['sceneId'])) {
                $model->sceneId = $map['sceneId'];
            }
        }
        if (isset($map['traceId'])) {
            if (!empty($map['traceId'])) {
                $model->traceId = $map['traceId'];
            }
        }

        return $model;
    }
}
