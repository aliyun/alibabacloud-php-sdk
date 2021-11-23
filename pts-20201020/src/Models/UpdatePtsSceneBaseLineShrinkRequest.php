<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

class UpdatePtsSceneBaseLineShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apiBaselinesShrink;

    /**
     * @var string
     */
    public $sceneBaselineShrink;

    /**
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'apiBaselinesShrink'  => 'ApiBaselines',
        'sceneBaselineShrink' => 'SceneBaseline',
        'sceneId'             => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiBaselinesShrink) {
            $res['ApiBaselines'] = $this->apiBaselinesShrink;
        }
        if (null !== $this->sceneBaselineShrink) {
            $res['SceneBaseline'] = $this->sceneBaselineShrink;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePtsSceneBaseLineShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiBaselines'])) {
            $model->apiBaselinesShrink = $map['ApiBaselines'];
        }
        if (isset($map['SceneBaseline'])) {
            $model->sceneBaselineShrink = $map['SceneBaseline'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
