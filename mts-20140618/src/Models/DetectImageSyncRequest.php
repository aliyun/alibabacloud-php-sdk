<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class DetectImageSyncRequest extends Model
{
    /**
     * @description 图片url链接
     *
     * @var string
     */
    public $image;
    protected $_name = [
        'image' => 'Image',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectImageSyncRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        return $model;
    }
}
