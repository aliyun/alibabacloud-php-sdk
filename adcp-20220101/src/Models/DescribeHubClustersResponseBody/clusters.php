<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters\apiServer;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters\clusterInfo;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters\conditions;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters\endpoints;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters\logConfig;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters\meshConfig;
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
     * @var conditions[]
     */
    public $conditions;

    /**
     * @var endpoints
     */
    public $endpoints;

    /**
     * @var logConfig
     */
    public $logConfig;

    /**
     * @var meshConfig
     */
    public $meshConfig;

    /**
     * @var network
     */
    public $network;
    protected $_name = [
        'apiServer'   => 'ApiServer',
        'clusterInfo' => 'ClusterInfo',
        'conditions'  => 'Conditions',
        'endpoints'   => 'Endpoints',
        'logConfig'   => 'LogConfig',
        'meshConfig'  => 'MeshConfig',
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
        if (null !== $this->conditions) {
            $res['Conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['Conditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toMap() : null;
        }
        if (null !== $this->logConfig) {
            $res['LogConfig'] = null !== $this->logConfig ? $this->logConfig->toMap() : null;
        }
        if (null !== $this->meshConfig) {
            $res['MeshConfig'] = null !== $this->meshConfig ? $this->meshConfig->toMap() : null;
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
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n                 = 0;
                foreach ($map['Conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? conditions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Endpoints'])) {
            $model->endpoints = endpoints::fromMap($map['Endpoints']);
        }
        if (isset($map['LogConfig'])) {
            $model->logConfig = logConfig::fromMap($map['LogConfig']);
        }
        if (isset($map['MeshConfig'])) {
            $model->meshConfig = meshConfig::fromMap($map['MeshConfig']);
        }
        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }

        return $model;
    }
}
