<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunKeywordsExtractionGenerationRequest\referenceData;
use AlibabaCloud\Tea\Model;

class RunKeywordsExtractionGenerationRequest extends Model
{
    /**
     * @var string
     */
    public $prompt;

    /**
     * @description This parameter is required.
     *
     * @var referenceData
     */
    public $referenceData;

    /**
     * @example xxx
     *
     * @var string
     */
    public $taskId;

    /**
     * @description This parameter is required.
     *
     * @example llm-xxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'prompt' => 'Prompt',
        'referenceData' => 'ReferenceData',
        'taskId' => 'TaskId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->referenceData) {
            $res['ReferenceData'] = null !== $this->referenceData ? $this->referenceData->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunKeywordsExtractionGenerationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['ReferenceData'])) {
            $model->referenceData = referenceData::fromMap($map['ReferenceData']);
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
