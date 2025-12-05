<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\AdjustPtsSceneSpeedRequest;

use AlibabaCloud\Dara\Model;

class apiSpeedList extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var int
     */
    public $speed;
    protected $_name = [
        'apiId' => 'ApiId',
        'speed' => 'Speed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
