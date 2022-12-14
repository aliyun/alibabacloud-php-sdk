<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ErasePersonAdvanceRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ErasePerson/ErasePerson1.jpg
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ErasePerson/ErasePerson6.jpg
     *
     * @var Stream
     */
    public $userMaskObject;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'userMaskObject' => 'UserMask',
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
        if (null !== $this->userMaskObject) {
            $res['UserMask'] = $this->userMaskObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ErasePersonAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['UserMask'])) {
            $model->userMaskObject = $map['UserMask'];
        }

        return $model;
    }
}
