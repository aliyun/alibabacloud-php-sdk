<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\SearchBodyTraceAdvanceRequest;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class images extends Model
{
    /**
     * @var int[]
     */
    public $imageData;

    /**
     * @var Stream
     */
    public $imageURLObject;
    protected $_name = [
        'imageData'      => 'ImageData',
        'imageURLObject' => 'ImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageData) {
            $res['ImageData'] = $this->imageData;
        }
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
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
        if (isset($map['ImageData'])) {
            $model->imageData = $map['ImageData'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }

        return $model;
    }
}
