<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RecognizeBusinessCardRequest extends Model
{
    /**
     * @var int
     */
    public $imageType;

    /**
     * @var string
     */
    public $imageURL;
    protected $_name = [
        'imageType' => 'ImageType',
        'imageURL'  => 'ImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeBusinessCardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        return $model;
    }
}
