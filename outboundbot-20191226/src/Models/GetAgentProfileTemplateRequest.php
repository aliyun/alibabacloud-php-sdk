<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class GetAgentProfileTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $agentProfileTemplateId;

    /**
     * @var string
     */
    public $appIp;
    protected $_name = [
        'agentProfileTemplateId' => 'AgentProfileTemplateId',
        'appIp' => 'AppIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
