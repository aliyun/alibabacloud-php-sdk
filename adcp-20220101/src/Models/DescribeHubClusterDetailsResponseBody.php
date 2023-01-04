<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster;
use AlibabaCloud\Tea\Model;

class DescribeHubClusterDetailsResponseBody extends Model
{
    /**
     * @description The details about the master instance.
     *
     * @var cluster
     */
    public $cluster;

    /**
     * @description The ID of the request.
     *
     * @example 52C1B7DF-96C1-5214-97B6-1B0859FEAFE5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cluster'   => 'Cluster',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['Cluster'] = null !== $this->cluster ? $this->cluster->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHubClusterDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cluster'])) {
            $model->cluster = cluster::fromMap($map['Cluster']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
