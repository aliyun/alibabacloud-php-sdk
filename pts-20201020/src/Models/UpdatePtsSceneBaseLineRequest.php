<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Dara\Model;

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
        'apiBaselines' => 'ApiBaselines',
        'sceneBaseline' => 'SceneBaseline',
        'sceneId' => 'SceneId',
    ];

    public function validate()
    {
        if (\is_array($this->apiBaselines)) {
            Model::validateArray($this->apiBaselines);
        }
        if (\is_array($this->sceneBaseline)) {
            Model::validateArray($this->sceneBaseline);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiBaselines) {
            if (\is_array($this->apiBaselines)) {
                $res['ApiBaselines'] = [];
                foreach ($this->apiBaselines as $key1 => $value1) {
                    $res['ApiBaselines'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sceneBaseline) {
            if (\is_array($this->sceneBaseline)) {
                $res['SceneBaseline'] = [];
                foreach ($this->sceneBaseline as $key1 => $value1) {
                    $res['SceneBaseline'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiBaselines'])) {
            if (!empty($map['ApiBaselines'])) {
                $model->apiBaselines = [];
                foreach ($map['ApiBaselines'] as $key1 => $value1) {
                    $model->apiBaselines[$key1] = $value1;
                }
            }
        }

        if (isset($map['SceneBaseline'])) {
            if (!empty($map['SceneBaseline'])) {
                $model->sceneBaseline = [];
                foreach ($map['SceneBaseline'] as $key1 => $value1) {
                    $model->sceneBaseline[$key1] = $value1;
                }
            }
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
