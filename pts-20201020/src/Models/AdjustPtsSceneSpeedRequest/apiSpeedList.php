<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\AdjustPtsSceneSpeedRequest;

use AlibabaCloud\Tea\Model;

class apiSpeedList extends Model
{
    /**
     * @example DYXXX12H
     *
     * @var string
     */
    public $apiId;

    /**
     * @example 30
     *
     * @var int
     */
    public $speed;
    protected $_name = [
        'apiId' => 'ApiId',
        'speed' => 'Speed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiSpeedList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }

        return $model;
    }
}
