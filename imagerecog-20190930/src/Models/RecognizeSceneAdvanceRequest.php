<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeSceneAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var int
     */
    public $imageType;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'imageType'      => 'ImageType',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURLObject'] = $this->imageURLObject;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeSceneAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }

        return $model;
    }
}
