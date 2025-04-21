<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos\faceAttributesDetectInfo;

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
        if (\is_array($this->faceAttributesDetectInfo)) {
            Model::validateArray($this->faceAttributesDetectInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceAttributesDetectInfo) {
            if (\is_array($this->faceAttributesDetectInfo)) {
                $res['FaceAttributesDetectInfo'] = [];
                $n1 = 0;
                foreach ($this->faceAttributesDetectInfo as $item1) {
                    $res['FaceAttributesDetectInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FaceAttributesDetectInfo'])) {
            if (!empty($map['FaceAttributesDetectInfo'])) {
                $model->faceAttributesDetectInfo = [];
                $n1 = 0;
                foreach ($map['FaceAttributesDetectInfo'] as $item1) {
                    $model->faceAttributesDetectInfo[$n1++] = faceAttributesDetectInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
