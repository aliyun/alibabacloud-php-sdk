<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DeleteAgentProfilesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentProfileIdsShrink;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $appIp;
    protected $_name = [
        'agentProfileIdsShrink' => 'AgentProfileIds',
        'appIp' => 'AppIp',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DeleteAgentProfilesShrinkRequest
     */
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
