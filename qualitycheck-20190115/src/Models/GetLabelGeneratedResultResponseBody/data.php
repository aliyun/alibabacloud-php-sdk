<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetLabelGeneratedResultResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $inputTokens;

    /**
     * @var int
     */
    public $llmCallNum;

    /**
     * @var int
     */
    public $outputTokens;

    /**
     * @var string
     */
    public $resultFileUrl;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'inputTokens' => 'InputTokens',
        'llmCallNum' => 'LlmCallNum',
        'outputTokens' => 'OutputTokens',
        'resultFileUrl' => 'ResultFileUrl',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputTokens) {
            $res['InputTokens'] = $this->inputTokens;
        }

        if (null !== $this->llmCallNum) {
            $res['LlmCallNum'] = $this->llmCallNum;
        }

        if (null !== $this->outputTokens) {
            $res['OutputTokens'] = $this->outputTokens;
        }

        if (null !== $this->resultFileUrl) {
            $res['ResultFileUrl'] = $this->resultFileUrl;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['InputTokens'])) {
            $model->inputTokens = $map['InputTokens'];
        }

        if (isset($map['LlmCallNum'])) {
            $model->llmCallNum = $map['LlmCallNum'];
        }

        if (isset($map['OutputTokens'])) {
            $model->outputTokens = $map['OutputTokens'];
        }

        if (isset($map['ResultFileUrl'])) {
            $model->resultFileUrl = $map['ResultFileUrl'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
