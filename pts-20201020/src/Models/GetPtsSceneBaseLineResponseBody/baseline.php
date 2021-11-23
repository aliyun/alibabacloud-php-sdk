<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneBaseLineResponseBody;

use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneBaseLineResponseBody\baseline\apiBaselines;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneBaseLineResponseBody\baseline\sceneBaseline;
use AlibabaCloud\Tea\Model;

class baseline extends Model
{
    /**
     * @var apiBaselines[]
     */
    public $apiBaselines;

    /**
     * @var string
     */
    public $name;

    /**
     * @var sceneBaseline
     */
    public $sceneBaseline;
    protected $_name = [
        'apiBaselines'  => 'ApiBaselines',
        'name'          => 'Name',
        'sceneBaseline' => 'SceneBaseline',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiBaselines) {
            $res['ApiBaselines'] = [];
            if (null !== $this->apiBaselines && \is_array($this->apiBaselines)) {
                $n = 0;
                foreach ($this->apiBaselines as $item) {
                    $res['ApiBaselines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sceneBaseline) {
            $res['SceneBaseline'] = null !== $this->sceneBaseline ? $this->sceneBaseline->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baseline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiBaselines'])) {
            if (!empty($map['ApiBaselines'])) {
                $model->apiBaselines = [];
                $n                   = 0;
                foreach ($map['ApiBaselines'] as $item) {
                    $model->apiBaselines[$n++] = null !== $item ? apiBaselines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SceneBaseline'])) {
            $model->sceneBaseline = sceneBaseline::fromMap($map['SceneBaseline']);
        }

        return $model;
    }
}
