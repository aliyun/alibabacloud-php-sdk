<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterBasicInfoResponseBody\clusterInfo;
use AlibabaCloud\Tea\Model;

class DescribeClusterBasicInfoResponseBody extends Model
{
    /**
     * @var clusterInfo
     */
    public $clusterInfo;

    /**
     * @example 24A20733-10A0-4AF6-BE6B-E3322413BB68
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterInfo' => 'ClusterInfo',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterInfo) {
            $res['ClusterInfo'] = null !== $this->clusterInfo ? $this->clusterInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterBasicInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterInfo'])) {
            $model->clusterInfo = clusterInfo::fromMap($map['ClusterInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
