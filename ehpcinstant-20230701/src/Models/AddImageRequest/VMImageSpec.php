<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\AddImageRequest;

use AlibabaCloud\Tea\Model;

class VMImageSpec extends Model
{
    /**
     * @example m-bp1akkkr1rkxtb******
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
     * @return VMImageSpec
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
