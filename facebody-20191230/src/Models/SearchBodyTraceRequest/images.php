<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\SearchBodyTraceRequest;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @description Trace图片URL
     *
     * @var string
     */
    public $imageURL;

    /**
     * @description 图片Base64数据
     *
     * @var int[]
     */
    public $imageData;
    protected $_name = [
        'imageURL'  => 'ImageURL',
        'imageData' => 'ImageData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->imageData) {
            $res['ImageData'] = $this->imageData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['ImageData'])) {
            $model->imageData = $map['ImageData'];
        }

        return $model;
    }
}
