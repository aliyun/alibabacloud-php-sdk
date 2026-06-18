<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class SubmitAudioNoteRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var int
     */
    public $llmModelId;
    protected $_name = [
        'agentId' => 'AgentId',
        'bizId' => 'BizId',
        'filePath' => 'FilePath',
        'llmModelId' => 'LlmModelId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->llmModelId) {
            $res['LlmModelId'] = $this->llmModelId;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['LlmModelId'])) {
            $model->llmModelId = $map['LlmModelId'];
        }

        return $model;
    }
}
