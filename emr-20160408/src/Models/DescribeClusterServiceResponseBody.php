<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceResponseBody\serviceInfo;
use AlibabaCloud\Tea\Model;

class DescribeClusterServiceResponseBody extends Model
{
    /**
     * @var serviceInfo
     */
    public $serviceInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'serviceInfo' => 'ServiceInfo',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceInfo) {
            $res['ServiceInfo'] = null !== $this->serviceInfo ? $this->serviceInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ServiceInfo'])) {
            $model->serviceInfo = serviceInfo::fromMap($map['ServiceInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
