<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class DeleteAgentProfilesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentProfileIdsShrink;

    /**
     * @var string
     */
    public $appIp;
    protected $_name = [
        'agentProfileIdsShrink' => 'AgentProfileIds',
        'appIp' => 'AppIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentProfileIdsShrink) {
            $res['AgentProfileIds'] = $this->agentProfileIdsShrink;
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
        if (isset($map['AgentProfileIds'])) {
            $model->agentProfileIdsShrink = $map['AgentProfileIds'];
        }

        if (isset($map['AppIp'])) {
            $model->appIp = $map['AppIp'];
        }

        return $model;
    }
}
