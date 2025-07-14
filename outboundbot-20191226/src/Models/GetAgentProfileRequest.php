<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class GetAgentProfileRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 37ca3ca1ac4b4e57adf3da5b5d939d04
     *
     * @var string
     */
    public $agentProfileId;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $appIp;

    /**
     * @description This parameter is required.
     *
     * @example 0ec0c897-b92c-40e4-9ad7-e6e4f5ce13bb
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'agentProfileId' => 'AgentProfileId',
        'appIp' => 'AppIp',
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentProfileId) {
            $res['AgentProfileId'] = $this->agentProfileId;
        }
        if (null !== $this->appIp) {
            $res['AppIp'] = $this->appIp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAgentProfileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentProfileId'])) {
            $model->agentProfileId = $map['AgentProfileId'];
        }
        if (isset($map['AppIp'])) {
            $model->appIp = $map['AppIp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
