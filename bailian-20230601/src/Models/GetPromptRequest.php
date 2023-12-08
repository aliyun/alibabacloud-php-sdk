<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class GetPromptRequest extends Model
{
    /**
     * @example c160c841c8e54295bf2f441432785944_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example marketCopy
     *
     * @var string
     */
    public $promptId;

    /**
     * @var string
     */
    public $vars;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'promptId' => 'PromptId',
        'vars'     => 'Vars',
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
        if (null !== $this->promptId) {
            $res['PromptId'] = $this->promptId;
        }
        if (null !== $this->vars) {
            $res['Vars'] = $this->vars;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPromptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['PromptId'])) {
            $model->promptId = $map['PromptId'];
        }
        if (isset($map['Vars'])) {
            $model->vars = $map['Vars'];
        }

        return $model;
    }
}
