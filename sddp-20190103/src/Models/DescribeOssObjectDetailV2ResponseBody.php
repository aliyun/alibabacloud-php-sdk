<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailV2ResponseBody\ossObjectDetail;

class DescribeOssObjectDetailV2ResponseBody extends Model
{
    /**
     * @var ossObjectDetail
     */
    public $ossObjectDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ossObjectDetail' => 'OssObjectDetail',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->ossObjectDetail) {
            $this->ossObjectDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossObjectDetail) {
            $res['OssObjectDetail'] = null !== $this->ossObjectDetail ? $this->ossObjectDetail->toArray($noStream) : $this->ossObjectDetail;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
