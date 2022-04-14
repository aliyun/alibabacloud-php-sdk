<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters\apiServer;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters\clusterInfo;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters\endpoints;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters\network;
use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @var apiServer
     */
    public $apiServer;

    /**
     * @var clusterInfo
     */
    public $clusterInfo;

    /**
     * @var endpoints
     */
    public $endpoints;

    /**
     * @var network
     */
    public $network;
    protected $_name = [
        'apiServer'   => 'ApiServer',
        'clusterInfo' => 'ClusterInfo',
        'endpoints'   => 'Endpoints',
        'network'     => 'Network',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiServer) {
            $res['ApiServer'] = null !== $this->apiServer ? $this->apiServer->toMap() : null;
        }
        if (null !== $this->clusterInfo) {
            $res['ClusterInfo'] = null !== $this->clusterInfo ? $this->clusterInfo->toMap() : null;
        }
        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toMap() : null;
        }
        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiServer'])) {
            $model->apiServer = apiServer::fromMap($map['ApiServer']);
        }
        if (isset($map['ClusterInfo'])) {
            $model->clusterInfo = clusterInfo::fromMap($map['ClusterInfo']);
        }
        if (isset($map['Endpoints'])) {
            $model->endpoints = endpoints::fromMap($map['Endpoints']);
        }
        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }

        return $model;
    }
}
