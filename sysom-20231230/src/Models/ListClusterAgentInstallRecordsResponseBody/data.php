<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListClusterAgentInstallRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $agentConfigId;

    /**
     * @var string
     */
    public $agentConfigName;

    /**
     * @example cbf7a37bc905d4682a3338b3744810269
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 2024-12-25T15:08:19
     *
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $grayscaleConfig;

    /**
     * @example 74a86327-3170-412c-8e67-da3389ec56a9
     *
     * @var string
     */
    public $pluginId;

    /**
     * @example 3.4.0-1
     *
     * @var string
     */
    public $pluginVersion;

    /**
     * @example 2024-12-25T15:08:19
     *
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'agentConfigId' => 'agent_config_id',
        'agentConfigName' => 'agent_config_name',
        'clusterId' => 'cluster_id',
        'createdAt' => 'created_at',
        'grayscaleConfig' => 'grayscale_config',
        'pluginId' => 'plugin_id',
        'pluginVersion' => 'plugin_version',
        'updatedAt' => 'updated_at',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentConfigId) {
            $res['agent_config_id'] = $this->agentConfigId;
        }
        if (null !== $this->agentConfigName) {
            $res['agent_config_name'] = $this->agentConfigName;
        }
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->grayscaleConfig) {
            $res['grayscale_config'] = $this->grayscaleConfig;
        }
        if (null !== $this->pluginId) {
            $res['plugin_id'] = $this->pluginId;
        }
        if (null !== $this->pluginVersion) {
            $res['plugin_version'] = $this->pluginVersion;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agent_config_id'])) {
            $model->agentConfigId = $map['agent_config_id'];
        }
        if (isset($map['agent_config_name'])) {
            $model->agentConfigName = $map['agent_config_name'];
        }
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['grayscale_config'])) {
            $model->grayscaleConfig = $map['grayscale_config'];
        }
        if (isset($map['plugin_id'])) {
            $model->pluginId = $map['plugin_id'];
        }
        if (isset($map['plugin_version'])) {
            $model->pluginVersion = $map['plugin_version'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        return $model;
    }
}
