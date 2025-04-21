<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos;

class data extends Model
{
    /**
     * @var faceInfos
     */
    public $faceInfos;

    /**
     * @var int
     */
    public $imgHeight;

    /**
     * @var int
     */
    public $imgWidth;
    protected $_name = [
        'faceInfos' => 'FaceInfos',
        'imgHeight' => 'ImgHeight',
        'imgWidth' => 'ImgWidth',
    ];

    public function validate()
    {
        if (null !== $this->faceInfos) {
            $this->faceInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceInfos) {
            $res['FaceInfos'] = null !== $this->faceInfos ? $this->faceInfos->toArray($noStream) : $this->faceInfos;
        }

        if (null !== $this->imgHeight) {
            $res['ImgHeight'] = $this->imgHeight;
        }

        if (null !== $this->imgWidth) {
            $res['ImgWidth'] = $this->imgWidth;
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
