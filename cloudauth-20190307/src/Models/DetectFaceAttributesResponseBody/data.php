<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var faceInfos
     */
    public $faceInfos;

    /**
     * @example 1920
     *
     * @var int
     */
    public $imgHeight;

    /**
     * @example 1080
     *
     * @var int
     */
    public $imgWidth;
    protected $_name = [
        'faceInfos' => 'FaceInfos',
        'imgHeight' => 'ImgHeight',
        'imgWidth'  => 'ImgWidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceInfos) {
            $res['FaceInfos'] = null !== $this->faceInfos ? $this->faceInfos->toMap() : null;
        }
        if (null !== $this->imgHeight) {
            $res['ImgHeight'] = $this->imgHeight;
        }
        if (null !== $this->imgWidth) {
            $res['ImgWidth'] = $this->imgWidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceInfos'])) {
            $model->faceInfos = faceInfos::fromMap($map['FaceInfos']);
        }
        if (isset($map['ImgHeight'])) {
            $model->imgHeight = $map['ImgHeight'];
        }
        if (isset($map['ImgWidth'])) {
            $model->imgWidth = $map['ImgWidth'];
        }

        return $model;
    }
}
