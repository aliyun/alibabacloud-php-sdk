<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyResponseBody\image;
use AlibabaCloud\Tea\Model;

class DescribeImageFromFamilyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var image
     */
    public $image;
    protected $_name = [
        'requestId' => 'RequestId',
        'image'     => 'Image',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageFromFamilyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Image'])) {
            $model->image = image::fromMap($map['Image']);
        }

        return $model;
    }
}
