<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class ExportIntervenesRequest extends Model
{
    /**
     * @example fed6555ec9e24b92aeecc34be484b887_p_efm
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
     * @return ExportIntervenesRequest
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
