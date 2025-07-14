<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class GetAgentProfileTemplateRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example default-survey
     *
     * @var string
     */
    public $agentProfileTemplateId;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $appIp;
    protected $_name = [
        'agentProfileTemplateId' => 'AgentProfileTemplateId',
        'appIp' => 'AppIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentProfileTemplateId) {
            $res['AgentProfileTemplateId'] = $this->agentProfileTemplateId;
        }
        if (null !== $this->appIp) {
            $res['AppIp'] = $this->appIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAgentProfileTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentProfileTemplateId'])) {
            $model->agentProfileTemplateId = $map['AgentProfileTemplateId'];
        }
        if (isset($map['AppIp'])) {
            $model->appIp = $map['AppIp'];
        }

        return $model;
    }
}
