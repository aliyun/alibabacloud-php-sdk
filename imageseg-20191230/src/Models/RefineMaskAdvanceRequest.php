<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RefineMaskAdvanceRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/RefineMask/RefineMask1.jpg
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/RefineMask/RefineMask6.jpg
     *
     * @var Stream
     */
    public $maskImageURLObject;
    protected $_name = [
        'imageURLObject'     => 'ImageURL',
        'maskImageURLObject' => 'MaskImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }
        if (null !== $this->maskImageURLObject) {
            $res['MaskImageURL'] = $this->maskImageURLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefineMaskAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['MaskImageURL'])) {
            $model->maskImageURLObject = $map['MaskImageURL'];
        }

        return $model;
    }
}
