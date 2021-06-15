<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class AddRelativePositionRequest extends Model
{
    /**
     * @description 场景ID
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description 相对位置信息
     *
     * @var string
     */
    public $relativePosition;
    protected $_name = [
        'sceneId'          => 'SceneId',
        'relativePosition' => 'RelativePosition',
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
        if (null !== $this->relativePosition) {
            $res['RelativePosition'] = $this->relativePosition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddRelativePositionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['RelativePosition'])) {
            $model->relativePosition = $map['RelativePosition'];
        }

        return $model;
    }
}
