<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ImitatePhotoStyleAdvanceRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ImitatePhotoStyle/ImitatePhotoStyle1.jpg
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ImitatePhotoStyle/ImitatePhotoStyle7.jpg
     *
     * @var Stream
     */
    public $styleUrlObject;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'styleUrlObject' => 'StyleUrl',
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
        if (null !== $this->styleUrlObject) {
            $res['StyleUrl'] = $this->styleUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImitatePhotoStyleAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['StyleUrl'])) {
            $model->styleUrlObject = $map['StyleUrl'];
        }

        return $model;
    }
}
