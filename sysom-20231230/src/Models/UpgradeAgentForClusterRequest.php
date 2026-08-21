<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class UpgradeAgentForClusterRequest extends Model
{
    /**
     * @var string
     */
    public $xDebugId;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $xSysomInvokeSource;
    protected $_name = [
        'xDebugId' => 'X-Debug-Id',
        'agentId' => 'agent_id',
        'agentVersion' => 'agent_version',
        'clusterId' => 'cluster_id',
        'xSysomInvokeSource' => 'x-sysom-invoke-source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->xDebugId) {
            $res['X-Debug-Id'] = $this->xDebugId;
        }

        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }

        if (null !== $this->agentVersion) {
            $res['agent_version'] = $this->agentVersion;
        }

        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }

        if (null !== $this->xSysomInvokeSource) {
            $res['x-sysom-invoke-source'] = $this->xSysomInvokeSource;
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
        if (isset($map['X-Debug-Id'])) {
            $model->xDebugId = $map['X-Debug-Id'];
        }

        if (isset($map['agent_id'])) {
            $model->agentId = $map['agent_id'];
        }

        if (isset($map['agent_version'])) {
            $model->agentVersion = $map['agent_version'];
        }

        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }

        if (isset($map['x-sysom-invoke-source'])) {
            $model->xSysomInvokeSource = $map['x-sysom-invoke-source'];
        }

        return $model;
    }
}
