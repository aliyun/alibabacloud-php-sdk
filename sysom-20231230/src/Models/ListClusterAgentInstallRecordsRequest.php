<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class ListClusterAgentInstallRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $agentConfigId;

    /**
     * @example cbd80af02b9d6454ebdc579c5e022d0c8
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

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
    protected $_name = [
        'agentConfigId' => 'agent_config_id',
        'clusterId' => 'cluster_id',
        'current' => 'current',
        'pageSize' => 'pageSize',
        'pluginId' => 'plugin_id',
        'pluginVersion' => 'plugin_version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentConfigId) {
            $res['agent_config_id'] = $this->agentConfigId;
        }
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->pluginId) {
            $res['plugin_id'] = $this->pluginId;
        }
        if (null !== $this->pluginVersion) {
            $res['plugin_version'] = $this->pluginVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterAgentInstallRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agent_config_id'])) {
            $model->agentConfigId = $map['agent_config_id'];
        }
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['current'])) {
            $model->current = $map['current'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['plugin_id'])) {
            $model->pluginId = $map['plugin_id'];
        }
        if (isset($map['plugin_version'])) {
            $model->pluginVersion = $map['plugin_version'];
        }

        return $model;
    }
}
