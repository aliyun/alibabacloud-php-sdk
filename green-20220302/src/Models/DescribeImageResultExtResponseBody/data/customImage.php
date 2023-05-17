<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageResultExtResponseBody\data;

use AlibabaCloud\Tea\Model;

class customImage extends Model
{
    /**
     * @description 图片ID。
     *
     * @example 123456
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 图库ID。
     *
     * @example 123456
     *
     * @var string
     */
    public $libId;

    /**
     * @description 图库名。
     *
     * @example 图库123
     *
     * @var string
     */
    public $libName;
    protected $_name = [
        'imageId' => 'ImageId',
        'libId'   => 'LibId',
        'libName' => 'LibName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }
        if (null !== $this->libName) {
            $res['LibName'] = $this->libName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customImage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }
        if (isset($map['LibName'])) {
            $model->libName = $map['LibName'];
        }

        return $model;
    }
}
