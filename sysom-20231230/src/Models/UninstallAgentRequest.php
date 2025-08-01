<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\SDK\SysOM\V20231230\Models\UninstallAgentRequest\instances;
use AlibabaCloud\Tea\Model;

class UninstallAgentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $agentId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $agentVersion;

    /**
     * @description This parameter is required.
     *
     * @var instances[]
     */
    public $instances;
    protected $_name = [
        'agentId' => 'agent_id',
        'agentVersion' => 'agent_version',
        'instances' => 'instances',
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
        if (null !== $this->instances) {
            $res['instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UninstallAgentRequest
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
        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = [];
                $n = 0;
                foreach ($map['instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
