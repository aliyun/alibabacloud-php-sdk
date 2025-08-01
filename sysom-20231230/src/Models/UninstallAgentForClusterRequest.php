<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class UninstallAgentForClusterRequest extends Model
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
     * @example c822f83bb45994ddbac9326b4c2f04f35
     *
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'agentId' => 'agent_id',
        'agentVersion' => 'agent_version',
        'clusterId' => 'cluster_id',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UninstallAgentForClusterRequest
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

        return $model;
    }
}
