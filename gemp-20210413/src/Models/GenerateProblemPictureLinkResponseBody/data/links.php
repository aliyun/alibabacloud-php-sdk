<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GenerateProblemPictureLinkResponseBody\data;

use AlibabaCloud\Tea\Model;

class links extends Model
{
    /**
     * @description oss key
     *
     * @var string
     */
    public $key;

    /**
     * @description 图片链接
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
