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
    public $datasource;

    /**
     * @var string
     */
    public $desc;

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
    public $maxConcurrent;

    /**
     * @var int
     */
    public $mode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $needDelete;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accuracyTest' => 'AccuracyTest',
        'agentId' => 'AgentId',
        'dataset' => 'Dataset',
        'datasource' => 'Datasource',
        'desc' => 'Desc',
        'evaluationPrompt' => 'EvaluationPrompt',
        'fileId' => 'FileId',
        'maxConcurrent' => 'MaxConcurrent',
        'mode' => 'Mode',
        'name' => 'Name',
        'needDelete' => 'NeedDelete',
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

        if (null !== $this->datasource) {
            $res['Datasource'] = $this->datasource;
        }

        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->evaluationPrompt) {
            $res['EvaluationPrompt'] = $this->evaluationPrompt;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->maxConcurrent) {
            $res['MaxConcurrent'] = $this->maxConcurrent;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->needDelete) {
            $res['NeedDelete'] = $this->needDelete;
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

        if (isset($map['Datasource'])) {
            $model->datasource = $map['Datasource'];
        }

        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['EvaluationPrompt'])) {
            $model->evaluationPrompt = $map['EvaluationPrompt'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['MaxConcurrent'])) {
            $model->maxConcurrent = $map['MaxConcurrent'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NeedDelete'])) {
            $model->needDelete = $map['NeedDelete'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
