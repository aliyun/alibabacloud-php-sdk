<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos\faceAttributesDetectInfo;
use AlibabaCloud\Tea\Model;

class faceInfos extends Model
{
    /**
     * @var faceAttributesDetectInfo[]
     */
    public $faceAttributesDetectInfo;
    protected $_name = [
        'faceAttributesDetectInfo' => 'FaceAttributesDetectInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceAttributesDetectInfo) {
            $res['FaceAttributesDetectInfo'] = [];
            if (null !== $this->faceAttributesDetectInfo && \is_array($this->faceAttributesDetectInfo)) {
                $n = 0;
                foreach ($this->faceAttributesDetectInfo as $item) {
                    $res['FaceAttributesDetectInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceAttributesDetectInfo'])) {
            if (!empty($map['FaceAttributesDetectInfo'])) {
                $model->faceAttributesDetectInfo = [];
                $n                               = 0;
                foreach ($map['FaceAttributesDetectInfo'] as $item) {
                    $model->faceAttributesDetectInfo[$n++] = null !== $item ? faceAttributesDetectInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
