<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class GenerateExportWordTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xxxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $generatedContentId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'generatedContentId' => 'GeneratedContentId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->generatedContentId) {
            $res['GeneratedContentId'] = $this->generatedContentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateExportWordTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['GeneratedContentId'])) {
            $model->generatedContentId = $map['GeneratedContentId'];
        }

        return $model;
    }
}
