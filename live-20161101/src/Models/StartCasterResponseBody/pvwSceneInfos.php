<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponseBody\pvwSceneInfos\sceneInfo;
use AlibabaCloud\Tea\Model;

class pvwSceneInfos extends Model
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneInfo) {
            $res['SceneInfo'] = [];
            if (null !== $this->sceneInfo && \is_array($this->sceneInfo)) {
                $n = 0;
                foreach ($this->sceneInfo as $item) {
                    $res['SceneInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pvwSceneInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneInfo'])) {
            if (!empty($map['SceneInfo'])) {
                $model->sceneInfo = [];
                $n                = 0;
                foreach ($map['SceneInfo'] as $item) {
                    $model->sceneInfo[$n++] = null !== $item ? sceneInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
