<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeExportImageStatusRequest extends Model
{
    /**
     * @description The ID of the image.
     *
     * @example centos_6_08_64_20G_alibase_****
     *
     * @var string
     */
    public $imageId;
    protected $_name = [
        'imageId' => 'ImageId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExportImageStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        return $model;
    }
}
