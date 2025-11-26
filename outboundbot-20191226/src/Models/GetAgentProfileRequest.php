<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class GetAgentProfileRequest extends Model
{
    /**
     * @var string
     */
    public $agentProfileId;

    /**
     * @var string
     */
    public $appIp;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'agentProfileId' => 'AgentProfileId',
        'appIp' => 'AppIp',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
