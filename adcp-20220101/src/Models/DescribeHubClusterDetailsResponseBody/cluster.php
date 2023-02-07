<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\apiServer;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\clusterInfo;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\conditions;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\endpoints;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\logConfig;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\meshConfig;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\network;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\workflowConfig;
use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @description Information about the API server of the master instance.
     *
     * @var apiServer
     */
    public $apiServer;

    /**
     * @description The details about the master instance.
     *
     * @var clusterInfo
     */
    public $clusterInfo;

    /**
     * @description The list of the deletion conditions of the master instance.
     *
     * @var conditions[]
     */
    public $conditions;

    /**
     * @description The endpoint of the master instance.
     *
     * @var endpoints
     */
    public $endpoints;

    /**
     * @description The logging configuration.
     *
     * @var logConfig
     */
    public $logConfig;

    /**
     * @description The Service Mesh (ASM) configurations.
     *
     * @var meshConfig
     */
    public $meshConfig;

    /**
     * @description The network configurations of the master instance.
     *
     * @var network
     */
    public $network;

    /**
     * @var workflowConfig
     */
    public $workflowConfig;
    protected $_name = [
        'apiServer'      => 'ApiServer',
        'clusterInfo'    => 'ClusterInfo',
        'conditions'     => 'Conditions',
        'endpoints'      => 'Endpoints',
        'logConfig'      => 'LogConfig',
        'meshConfig'     => 'MeshConfig',
        'network'        => 'Network',
        'workflowConfig' => 'WorkflowConfig',
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
        if (null !== $this->workflowConfig) {
            $res['WorkflowConfig'] = null !== $this->workflowConfig ? $this->workflowConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cluster
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
        if (isset($map['WorkflowConfig'])) {
            $model->workflowConfig = workflowConfig::fromMap($map['WorkflowConfig']);
        }

        return $model;
    }
}
