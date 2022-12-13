<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GeneratePictureLinkResponseBody\data;

use AlibabaCloud\Tea\Model;

class links extends Model
{
    /**
     * @description oss key
     *
     * @example problem/38b2a36d-484d-4242-b9cf-d243e53a82c6
     *
     * @var string
     */
    public $key;

    /**
     * @description url
     *
     * @example http://gam-objects-bucket.oss-cn-shanghai.aliyuncs.com/problem/38b2a36d-484d-4242-b9cf-d243e53a82c6?Expires=1625662477&OSSAccessKeyId=LTAI5tEoRVPw8GMy1iLRCno7&Signature=1NFnt%2BnudD%2F%2BHVc31b6v5%2FFxoqg%3D
     *
     * @var string
     */
    public $link;
    protected $_name = [
        'key'  => 'key',
        'link' => 'link',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->link) {
            $res['link'] = $this->link;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return links
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['link'])) {
            $model->link = $map['link'];
        }

        return $model;
    }
}
