<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeContainerInstanceIdResponseBody\instanceDetail;
use AlibabaCloud\Tea\Model;

class DescribeContainerInstanceIdResponseBody extends Model
{
    /**
     * @var instanceDetail
     */
    public $instanceDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceDetail' => 'InstanceDetail',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceDetail) {
            $res['InstanceDetail'] = null !== $this->instanceDetail ? $this->instanceDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerInstanceIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceDetail'])) {
            $model->instanceDetail = instanceDetail::fromMap($map['InstanceDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
