<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterNetworkResponseBody\clusterNetwork;

class DescribeClusterNetworkResponseBody extends Model
{
    /**
     * @var clusterNetwork
     */
    public $clusterNetwork;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterNetwork' => 'ClusterNetwork',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->clusterNetwork) {
            $this->clusterNetwork->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterNetwork) {
            $res['ClusterNetwork'] = null !== $this->clusterNetwork ? $this->clusterNetwork->toArray($noStream) : $this->clusterNetwork;
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
        if (isset($map['ClusterNetwork'])) {
            $model->clusterNetwork = clusterNetwork::fromMap($map['ClusterNetwork']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
