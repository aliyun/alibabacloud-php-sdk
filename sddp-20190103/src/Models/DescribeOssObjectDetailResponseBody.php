<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailResponseBody\ossObjectDetail;
use AlibabaCloud\Tea\Model;

class DescribeOssObjectDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ossObjectDetail
     */
    public $ossObjectDetail;
    protected $_name = [
        'requestId'       => 'RequestId',
        'ossObjectDetail' => 'OssObjectDetail',
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
        if (null !== $this->ossObjectDetail) {
            $res['OssObjectDetail'] = null !== $this->ossObjectDetail ? $this->ossObjectDetail->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OssObjectDetail'])) {
            $model->ossObjectDetail = ossObjectDetail::fromMap($map['OssObjectDetail']);
        }

        return $model;
    }
}
