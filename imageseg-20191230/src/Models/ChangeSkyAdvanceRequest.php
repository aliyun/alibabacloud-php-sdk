<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ChangeSkyAdvanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/ChangeSky/ChangeSky2.jpg
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @description This parameter is required.
     *
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/ChangeSky/ChangeSky6.jpg
     *
     * @var Stream
     */
    public $replaceImageURLObject;
    protected $_name = [
        'imageURLObject'        => 'ImageURL',
        'replaceImageURLObject' => 'ReplaceImageURL',
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
        if (null !== $this->replaceImageURLObject) {
            $res['ReplaceImageURL'] = $this->replaceImageURLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeSkyAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['ReplaceImageURL'])) {
            $model->replaceImageURLObject = $map['ReplaceImageURL'];
        }

        return $model;
    }
}
