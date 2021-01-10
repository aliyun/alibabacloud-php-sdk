<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CountDeviceBrandsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $brandCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'brandCount' => 'BrandCount',
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
        if (null !== $this->brandCount) {
            $res['BrandCount'] = $this->brandCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CountDeviceBrandsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BrandCount'])) {
            $model->brandCount = $map['BrandCount'];
        }

        return $model;
    }
}
