<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\images;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @example centos_6_08_64_20G_a****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example centos_6_08_64_20G_a****
     *
     * @var string
     */
    public $imageName;

    /**
     * @example 20
     *
     * @var int
     */
    public $imageSize;
    protected $_name = [
        'imageId'   => 'ImageId',
        'imageName' => 'ImageName',
        'imageSize' => 'ImageSize',
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
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return image
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }

        return $model;
    }
}
