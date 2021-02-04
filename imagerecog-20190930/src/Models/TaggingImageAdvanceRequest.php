<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class TaggingImageAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var int
     */
    public $imageType;

    /**
     * @var bool
     */
    public $async;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'imageType'      => 'ImageType',
        'async'          => 'Async',
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
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaggingImageAdvanceRequest
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
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }

        return $model;
    }
}
