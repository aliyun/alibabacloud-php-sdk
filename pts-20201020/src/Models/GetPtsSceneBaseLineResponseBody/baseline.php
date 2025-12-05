<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneBaseLineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneBaseLineResponseBody\baseline\apiBaselines;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneBaseLineResponseBody\baseline\sceneBaseline;

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
        'apiBaselines' => 'ApiBaselines',
        'name' => 'Name',
        'sceneBaseline' => 'SceneBaseline',
    ];

    public function validate()
    {
        if (\is_array($this->apiBaselines)) {
            Model::validateArray($this->apiBaselines);
        }
        if (null !== $this->sceneBaseline) {
            $this->sceneBaseline->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiBaselines) {
            if (\is_array($this->apiBaselines)) {
                $res['ApiBaselines'] = [];
                $n1 = 0;
                foreach ($this->apiBaselines as $item1) {
                    $res['ApiBaselines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sceneBaseline) {
            $res['SceneBaseline'] = null !== $this->sceneBaseline ? $this->sceneBaseline->toArray($noStream) : $this->sceneBaseline;
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
                $n1 = 0;
                foreach ($map['ApiBaselines'] as $item1) {
                    $model->apiBaselines[$n1] = apiBaselines::fromMap($item1);
                    ++$n1;
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
