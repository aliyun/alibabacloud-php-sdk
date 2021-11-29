<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceResponseBody\serviceInfo;
use AlibabaCloud\Tea\Model;

class DescribeClusterServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceInfo
     */
    public $serviceInfo;
    protected $_name = [
        'requestId'   => 'RequestId',
        'serviceInfo' => 'ServiceInfo',
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
        if (null !== $this->serviceInfo) {
            $res['ServiceInfo'] = null !== $this->serviceInfo ? $this->serviceInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceInfo'])) {
            $model->serviceInfo = serviceInfo::fromMap($map['ServiceInfo']);
        }

        return $model;
    }
}
