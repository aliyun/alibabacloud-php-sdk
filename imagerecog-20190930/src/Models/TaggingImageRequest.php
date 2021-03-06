<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models;

use AlibabaCloud\Tea\Model;

class TaggingImageRequest extends Model
{
    /**
     * @var int
     */
    public $imageType;

    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var bool
     */
    public $async;
    protected $_name = [
        'imageType' => 'ImageType',
        'imageURL'  => 'ImageURL',
        'async'     => 'Async',
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
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaggingImageRequest
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
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }

        return $model;
    }
}
