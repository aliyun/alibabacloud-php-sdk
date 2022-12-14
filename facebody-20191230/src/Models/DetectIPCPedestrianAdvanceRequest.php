<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class DetectIPCPedestrianAdvanceRequest extends Model
{
    /**
     * @example 288
     *
     * @var int
     */
    public $height;

    /**
     * @example 3AAQSkZJRgABAQAAAQABA******
     *
     * @var string
     */
    public $imageData;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/cc/RecognizeHandGesture1.jpg
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @example 512
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'height'         => 'Height',
        'imageData'      => 'ImageData',
        'imageURLObject' => 'ImageURL',
        'width'          => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->imageData) {
            $res['ImageData'] = $this->imageData;
        }
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectIPCPedestrianAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['ImageData'])) {
            $model->imageData = $map['ImageData'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
