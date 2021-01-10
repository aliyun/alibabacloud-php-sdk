<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\DetectUserFaceByUrlResponseBody\data\data;

use AlibabaCloud\Tea\Model;

class landmarks extends Model
{
    /**
     * @var string[]
     */
    public $landmarksData;
    protected $_name = [
        'landmarksData' => 'LandmarksData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->landmarksData) {
            $res['LandmarksData'] = $this->landmarksData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return landmarks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LandmarksData'])) {
            if (!empty($map['LandmarksData'])) {
                $model->landmarksData = $map['LandmarksData'];
            }
        }

        return $model;
    }
}
