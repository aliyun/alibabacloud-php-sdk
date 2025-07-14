<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DeleteAgentProfilesRequest extends Model
{
    /**
     * @var string[]
     */
    public $agentProfileIds;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $appIp;
    protected $_name = [
        'agentProfileIds' => 'AgentProfileIds',
        'appIp' => 'AppIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentProfileIds) {
            $res['AgentProfileIds'] = $this->agentProfileIds;
        }
        if (null !== $this->appIp) {
            $res['AppIp'] = $this->appIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAgentProfilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentProfileIds'])) {
            if (!empty($map['AgentProfileIds'])) {
                $model->agentProfileIds = $map['AgentProfileIds'];
            }
        }
        if (isset($map['AppIp'])) {
            $model->appIp = $map['AppIp'];
        }

        return $model;
    }
}
