<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorImageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 1
     *
     * @var string[]
     */
    public $imageList;
    protected $_name = [
        'imageList' => 'ImageList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageList) {
            $res['ImageList'] = $this->imageList;
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
        if (isset($map['ImageList'])) {
            if (!empty($map['ImageList'])) {
                $model->imageList = $map['ImageList'];
            }
        }

        return $model;
    }
}
