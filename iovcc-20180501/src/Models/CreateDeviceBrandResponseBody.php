<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CreateDeviceBrandResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $brandId;
    protected $_name = [
        'requestId' => 'RequestId',
        'brandId'   => 'BrandId',
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
        if (null !== $this->brandId) {
            $res['BrandId'] = $this->brandId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeviceBrandResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BrandId'])) {
            $model->brandId = $map['BrandId'];
        }

        return $model;
    }
}
