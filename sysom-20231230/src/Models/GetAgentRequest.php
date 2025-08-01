<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class GetAgentRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;
    protected $_name = [
        'agentId' => 'agent_id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAgentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agent_id'])) {
            $model->agentId = $map['agent_id'];
        }

        return $model;
    }
}
