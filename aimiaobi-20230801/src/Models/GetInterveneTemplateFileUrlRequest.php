<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class GetInterveneTemplateFileUrlRequest extends Model
{
    /**
     * @example c160c841c8e54295bf2f441432785944_p_efm
     *
     * @var string
     */
    public $agentKey;
    protected $_name = [
        'agentKey' => 'AgentKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInterveneTemplateFileUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        return $model;
    }
}
