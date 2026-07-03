<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\UpdateDataAgentAccuracyTestResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accuracyTest;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $dataset;

    /**
     * @var string
     */
    public $evaluationPrompt;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var int
     */
    public $mode;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accuracyTest' => 'AccuracyTest',
        'agentId' => 'AgentId',
        'dataset' => 'Dataset',
        'evaluationPrompt' => 'EvaluationPrompt',
        'fileId' => 'FileId',
        'mode' => 'Mode',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accuracyTest) {
            $res['AccuracyTest'] = $this->accuracyTest;
        }

        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->dataset) {
            $res['Dataset'] = $this->dataset;
        }

        if (null !== $this->evaluationPrompt) {
            $res['EvaluationPrompt'] = $this->evaluationPrompt;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AccuracyTest'])) {
            $model->accuracyTest = $map['AccuracyTest'];
        }

        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['Dataset'])) {
            $model->dataset = $map['Dataset'];
        }

        if (isset($map['EvaluationPrompt'])) {
            $model->evaluationPrompt = $map['EvaluationPrompt'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
