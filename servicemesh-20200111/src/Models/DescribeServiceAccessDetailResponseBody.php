<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceAccessDetailResponseBody\accessDetail;
use AlibabaCloud\Tea\Model;

class DescribeServiceAccessDetailResponseBody extends Model
{
    /**
     * @var accessDetail
     */
    public $accessDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessDetail' => 'AccessDetail',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDetail) {
            $res['AccessDetail'] = null !== $this->accessDetail ? $this->accessDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceAccessDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDetail'])) {
            $model->accessDetail = accessDetail::fromMap($map['AccessDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
