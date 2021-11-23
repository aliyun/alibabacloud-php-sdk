<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

class UpdatePtsSceneBaseLineRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $apiBaselines;

    /**
     * @var mixed[]
     */
    public $sceneBaseline;

    /**
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'apiBaselines'  => 'ApiBaselines',
        'sceneBaseline' => 'SceneBaseline',
        'sceneId'       => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiBaselines) {
            $res['ApiBaselines'] = $this->apiBaselines;
        }
        if (null !== $this->sceneBaseline) {
            $res['SceneBaseline'] = $this->sceneBaseline;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePtsSceneBaseLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiBaselines'])) {
            $model->apiBaselines = $map['ApiBaselines'];
        }
        if (isset($map['SceneBaseline'])) {
            $model->sceneBaseline = $map['SceneBaseline'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
