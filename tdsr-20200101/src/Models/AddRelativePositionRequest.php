<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class AddRelativePositionRequest extends Model
{
    /**
     * @var string
     */
    public $relativePosition;

    /**
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'relativePosition' => 'RelativePosition',
        'sceneId'          => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relativePosition) {
            $res['RelativePosition'] = $this->relativePosition;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
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
        if (isset($map['RelativePosition'])) {
            $model->relativePosition = $map['RelativePosition'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
