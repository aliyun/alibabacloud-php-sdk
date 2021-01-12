<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostImageCategoriesResponseBody\images;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostImageCategoriesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var images
     */
    public $images;
    protected $_name = [
        'requestId' => 'RequestId',
        'images'    => 'Images',
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
        if (null !== $this->images) {
            $res['Images'] = null !== $this->images ? $this->images->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedHostImageCategoriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Images'])) {
            $model->images = images::fromMap($map['Images']);
        }

        return $model;
    }
}
