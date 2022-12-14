<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class ErasePersonRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ErasePerson/ErasePerson1.jpg
     *
     * @var string
     */
    public $imageURL;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ErasePerson/ErasePerson6.jpg
     *
     * @var string
     */
    public $userMask;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'userMask' => 'UserMask',
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
        if (null !== $this->userMask) {
            $res['UserMask'] = $this->userMask;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ErasePersonRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['UserMask'])) {
            $model->userMask = $map['UserMask'];
        }

        return $model;
    }
}
