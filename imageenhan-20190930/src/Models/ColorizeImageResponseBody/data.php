<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\ColorizeImageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://algo-app-aic-vc-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/face-enhancement/2020_11_26/20201126_182812286268_079260.jpg?Expires=1606388292&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=f71Bx37g%2BGhM%2B6FOXM0EbNL8W4****
     *
     * @var string
     */
    public $imageURL;
    protected $_name = [
        'imageURL' => 'ImageURL',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        return $model;
    }
}
