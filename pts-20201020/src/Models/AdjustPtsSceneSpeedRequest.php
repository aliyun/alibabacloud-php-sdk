<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\SDK\PTS\V20201020\Models\AdjustPtsSceneSpeedRequest\apiSpeedList;
use AlibabaCloud\Tea\Model;

class AdjustPtsSceneSpeedRequest extends Model
{
    /**
     * @var apiSpeedList[]
     */
    public $apiSpeedList;

    /**
     * @example DYXXX12H
     *
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'apiSpeedList' => 'ApiSpeedList',
        'sceneId'      => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiSpeedList) {
            $res['ApiSpeedList'] = [];
            if (null !== $this->apiSpeedList && \is_array($this->apiSpeedList)) {
                $n = 0;
                foreach ($this->apiSpeedList as $item) {
                    $res['ApiSpeedList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AdjustPtsSceneSpeedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiSpeedList'])) {
            if (!empty($map['ApiSpeedList'])) {
                $model->apiSpeedList = [];
                $n                   = 0;
                foreach ($map['ApiSpeedList'] as $item) {
                    $model->apiSpeedList[$n++] = null !== $item ? apiSpeedList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
