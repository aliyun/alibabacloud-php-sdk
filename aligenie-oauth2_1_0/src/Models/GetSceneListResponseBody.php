<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\GetSceneListResponseBody\sceneList;
use AlibabaCloud\Tea\Model;

class GetSceneListResponseBody extends Model
{
    /**
     * @example 435CF567-58DC-5761-AFA8-650772602E2D
     *
     * @var string
     */
    public $requestId;

    /**
     * @var sceneList[]
     */
    public $sceneList;
    protected $_name = [
        'requestId' => 'RequestId',
        'sceneList' => 'SceneList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sceneList) {
            $res['SceneList'] = [];
            if (null !== $this->sceneList && \is_array($this->sceneList)) {
                $n = 0;
                foreach ($this->sceneList as $item) {
                    $res['SceneList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSceneListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SceneList'])) {
            if (!empty($map['SceneList'])) {
                $model->sceneList = [];
                $n                = 0;
                foreach ($map['SceneList'] as $item) {
                    $model->sceneList[$n++] = null !== $item ? sceneList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
