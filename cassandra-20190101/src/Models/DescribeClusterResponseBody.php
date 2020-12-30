<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterResponseBody\cluster;
use AlibabaCloud\Tea\Model;

class DescribeClusterResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var cluster
     */
    public $cluster;
    protected $_name = [
        'requestId' => 'RequestId',
        'cluster'   => 'Cluster',
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
        if (null !== $this->cluster) {
            $res['Cluster'] = null !== $this->cluster ? $this->cluster->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Cluster'])) {
            $model->cluster = cluster::fromMap($map['Cluster']);
        }

        return $model;
    }
}
