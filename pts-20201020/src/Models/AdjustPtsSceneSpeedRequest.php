<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PTS\V20201020\Models\AdjustPtsSceneSpeedRequest\apiSpeedList;

class AdjustPtsSceneSpeedRequest extends Model
{
    /**
     * @var apiSpeedList[]
     */
    public $apiSpeedList;

    /**
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'apiSpeedList' => 'ApiSpeedList',
        'sceneId' => 'SceneId',
    ];

    public function validate()
    {
        if (\is_array($this->apiSpeedList)) {
            Model::validateArray($this->apiSpeedList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiSpeedList) {
            if (\is_array($this->apiSpeedList)) {
                $res['ApiSpeedList'] = [];
                $n1 = 0;
                foreach ($this->apiSpeedList as $item1) {
                    $res['ApiSpeedList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ApiSpeedList'])) {
            if (!empty($map['ApiSpeedList'])) {
                $model->apiSpeedList = [];
                $n1 = 0;
                foreach ($map['ApiSpeedList'] as $item1) {
                    $model->apiSpeedList[$n1] = apiSpeedList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
