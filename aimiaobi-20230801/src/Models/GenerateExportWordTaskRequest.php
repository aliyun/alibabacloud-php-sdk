<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class GenerateExportWordTaskRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var int
     */
    public $generatedContentId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'generatedContentId' => 'GeneratedContentId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
