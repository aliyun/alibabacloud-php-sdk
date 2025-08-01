<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class InstallAgentForClusterRequest extends Model
{
    /**
     * @example 74a86327-3170-412c-8e67-da3389ec56a9
     *
     * @var string
     */
    public $agentId;

    /**
     * @example 3.4.0-1
     *
     * @var string
     */
    public $agentVersion;

    /**
     * @example c9d7f3fc3d42942afbcb65c1100ffb19d
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $configId;

    /**
     * @var string
     */
    public $grayscaleConfig;
    protected $_name = [
        'agentId' => 'agent_id',
        'agentVersion' => 'agent_version',
        'clusterId' => 'cluster_id',
        'configId' => 'config_id',
        'grayscaleConfig' => 'grayscale_config',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        if (null !== $this->agentVersion) {
            $res['agent_version'] = $this->agentVersion;
        }
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->configId) {
            $res['config_id'] = $this->configId;
        }
        if (null !== $this->grayscaleConfig) {
            $res['grayscale_config'] = $this->grayscaleConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallAgentForClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agent_id'])) {
            $model->agentId = $map['agent_id'];
        }
        if (isset($map['agent_version'])) {
            $model->agentVersion = $map['agent_version'];
        }
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['config_id'])) {
            $model->configId = $map['config_id'];
        }
        if (isset($map['grayscale_config'])) {
            $model->grayscaleConfig = $map['grayscale_config'];
        }

        return $model;
    }
}
