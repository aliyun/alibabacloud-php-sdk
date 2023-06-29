<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailResponseBody\ossObjectDetail;
use AlibabaCloud\Tea\Model;

class DescribeOssObjectDetailResponseBody extends Model
{
    /**
     * @description The details of the OSS object.
     *
     * @var ossObjectDetail
     */
    public $ossObjectDetail;

    /**
     * @description The ID of the request.
     *
     * @example 769FB3C1-F4C9-42DF-9B72-7077A8989C13
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ossObjectDetail' => 'OssObjectDetail',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossObjectDetail) {
            $res['OssObjectDetail'] = null !== $this->ossObjectDetail ? $this->ossObjectDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOssObjectDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssObjectDetail'])) {
            $model->ossObjectDetail = ossObjectDetail::fromMap($map['OssObjectDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
