<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20201112\Models\DetectFaceAttributesResponseBody;

use AlibabaCloud\SDK\Cloudauth\V20201112\Models\DetectFaceAttributesResponseBody\resultObject\faceInfos;
use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $imgHeight;

    /**
     * @var int
     */
    public $imgWidth;

    /**
     * @var faceInfos
     */
    public $faceInfos;
    protected $_name = [
        'imgHeight' => 'ImgHeight',
        'imgWidth'  => 'ImgWidth',
        'faceInfos' => 'FaceInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imgHeight) {
            $res['ImgHeight'] = $this->imgHeight;
        }
        if (null !== $this->imgWidth) {
            $res['ImgWidth'] = $this->imgWidth;
        }
        if (null !== $this->faceInfos) {
            $res['FaceInfos'] = null !== $this->faceInfos ? $this->faceInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImgHeight'])) {
            $model->imgHeight = $map['ImgHeight'];
        }
        if (isset($map['ImgWidth'])) {
            $model->imgWidth = $map['ImgWidth'];
        }
        if (isset($map['FaceInfos'])) {
            $model->faceInfos = faceInfos::fromMap($map['FaceInfos']);
        }

        return $model;
    }
}
