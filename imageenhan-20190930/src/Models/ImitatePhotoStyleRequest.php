<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class ImitatePhotoStyleRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ImitatePhotoStyle/ImitatePhotoStyle1.jpg
     *
     * @var string
     */
    public $imageURL;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ImitatePhotoStyle/ImitatePhotoStyle7.jpg
     *
     * @var string
     */
    public $styleUrl;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'styleUrl' => 'StyleUrl',
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
        if (null !== $this->styleUrl) {
            $res['StyleUrl'] = $this->styleUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImitatePhotoStyleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['StyleUrl'])) {
            $model->styleUrl = $map['StyleUrl'];
        }

        return $model;
    }
}
