<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAgentSessionRequest\params\meta;

use AlibabaCloud\Dara\Model;

class initialConfigOptions extends Model
{
    /**
     * @var string
     */
    public $executionLane;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $reasoningEffort;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $skills;
    protected $_name = [
        'executionLane' => 'ExecutionLane',
        'mode' => 'Mode',
        'model' => 'Model',
        'projectId' => 'ProjectId',
        'reasoningEffort' => 'ReasoningEffort',
        'resourceGroupId' => 'ResourceGroupId',
        'skills' => 'Skills',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executionLane) {
            $res['ExecutionLane'] = $this->executionLane;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->reasoningEffort) {
            $res['ReasoningEffort'] = $this->reasoningEffort;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->skills) {
            $res['Skills'] = $this->skills;
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
        if (isset($map['ExecutionLane'])) {
            $model->executionLane = $map['ExecutionLane'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ReasoningEffort'])) {
            $model->reasoningEffort = $map['ReasoningEffort'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Skills'])) {
            $model->skills = $map['Skills'];
        }

        return $model;
    }
}
