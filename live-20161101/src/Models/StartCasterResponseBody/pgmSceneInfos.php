<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponseBody\pgmSceneInfos\sceneInfo;

class pgmSceneInfos extends Model
{
    /**
     * @var sceneInfo[]
     */
    public $sceneInfo;
    protected $_name = [
        'sceneInfo' => 'SceneInfo',
    ];

    public function validate()
    {
        if (\is_array($this->sceneInfo)) {
            Model::validateArray($this->sceneInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sceneInfo) {
            if (\is_array($this->sceneInfo)) {
                $res['SceneInfo'] = [];
                $n1 = 0;
                foreach ($this->sceneInfo as $item1) {
                    $res['SceneInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SceneInfo'])) {
            if (!empty($map['SceneInfo'])) {
                $model->sceneInfo = [];
                $n1 = 0;
                foreach ($map['SceneInfo'] as $item1) {
                    $model->sceneInfo[$n1] = sceneInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
