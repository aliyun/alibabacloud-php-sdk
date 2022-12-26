<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterNetworkResponseBody\clusterNetwork;
use AlibabaCloud\Tea\Model;

class DescribeClusterNetworkResponseBody extends Model
{
    /**
     * @var clusterNetwork
     */
    public $clusterNetwork;

    /**
     * @example C286491D-4A2F-589A-B63B-D2AD3DA9BD71
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterNetwork' => 'ClusterNetwork',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterNetwork) {
            $res['ClusterNetwork'] = null !== $this->clusterNetwork ? $this->clusterNetwork->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterNetworkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterNetwork'])) {
            $model->clusterNetwork = clusterNetwork::fromMap($map['ClusterNetwork']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
