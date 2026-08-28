<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentResponseBody\data\effectiveResult;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentResponseBody\data\externalAgentStatus;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentResponseBody\data\model_;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentResponseBody\data\skills;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentResponseBody\data\template;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentResponseBody\data\tools;

class data extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $createMode;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var effectiveResult
     */
    public $effectiveResult;

    /**
     * @var int
     */
    public $effectiveSpecVersion;

    /**
     * @var externalAgentStatus
     */
    public $externalAgentStatus;

    /**
     * @var string
     */
    public $instruction;

    /**
     * @var int
     */
    public $latestSpecVersion;

    /**
     * @var string
     */
    public $latestVersionStatus;

    /**
     * @var model_
     */
    public $model;

    /**
     * @var string
     */
    public $modelSource;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $runtime;

    /**
     * @var skills[]
     */
    public $skills;

    /**
     * @var string
     */
    public $status;

    /**
     * @var template
     */
    public $template;

    /**
     * @var tools[]
     */
    public $tools;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'agentId' => 'agentId',
        'createMode' => 'createMode',
        'createdAt' => 'createdAt',
        'deployType' => 'deployType',
        'description' => 'description',
        'effectiveResult' => 'effectiveResult',
        'effectiveSpecVersion' => 'effectiveSpecVersion',
        'externalAgentStatus' => 'externalAgentStatus',
        'instruction' => 'instruction',
        'latestSpecVersion' => 'latestSpecVersion',
        'latestVersionStatus' => 'latestVersionStatus',
        'model' => 'model',
        'modelSource' => 'modelSource',
        'name' => 'name',
        'regionId' => 'regionId',
        'runtime' => 'runtime',
        'skills' => 'skills',
        'status' => 'status',
        'template' => 'template',
        'tools' => 'tools',
        'updatedAt' => 'updatedAt',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (null !== $this->effectiveResult) {
            $this->effectiveResult->validate();
        }
        if (null !== $this->externalAgentStatus) {
            $this->externalAgentStatus->validate();
        }
        if (null !== $this->model) {
            $this->model->validate();
        }
        if (\is_array($this->skills)) {
            Model::validateArray($this->skills);
        }
        if (null !== $this->template) {
            $this->template->validate();
        }
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->createMode) {
            $res['createMode'] = $this->createMode;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->deployType) {
            $res['deployType'] = $this->deployType;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->effectiveResult) {
            $res['effectiveResult'] = null !== $this->effectiveResult ? $this->effectiveResult->toArray($noStream) : $this->effectiveResult;
        }

        if (null !== $this->effectiveSpecVersion) {
            $res['effectiveSpecVersion'] = $this->effectiveSpecVersion;
        }

        if (null !== $this->externalAgentStatus) {
            $res['externalAgentStatus'] = null !== $this->externalAgentStatus ? $this->externalAgentStatus->toArray($noStream) : $this->externalAgentStatus;
        }

        if (null !== $this->instruction) {
            $res['instruction'] = $this->instruction;
        }

        if (null !== $this->latestSpecVersion) {
            $res['latestSpecVersion'] = $this->latestSpecVersion;
        }

        if (null !== $this->latestVersionStatus) {
            $res['latestVersionStatus'] = $this->latestVersionStatus;
        }

        if (null !== $this->model) {
            $res['model'] = null !== $this->model ? $this->model->toArray($noStream) : $this->model;
        }

        if (null !== $this->modelSource) {
            $res['modelSource'] = $this->modelSource;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->runtime) {
            $res['runtime'] = $this->runtime;
        }

        if (null !== $this->skills) {
            if (\is_array($this->skills)) {
                $res['skills'] = [];
                $n1 = 0;
                foreach ($this->skills as $item1) {
                    $res['skills'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->template) {
            $res['template'] = null !== $this->template ? $this->template->toArray($noStream) : $this->template;
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    $res['tools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['createMode'])) {
            $model->createMode = $map['createMode'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['deployType'])) {
            $model->deployType = $map['deployType'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['effectiveResult'])) {
            $model->effectiveResult = effectiveResult::fromMap($map['effectiveResult']);
        }

        if (isset($map['effectiveSpecVersion'])) {
            $model->effectiveSpecVersion = $map['effectiveSpecVersion'];
        }

        if (isset($map['externalAgentStatus'])) {
            $model->externalAgentStatus = externalAgentStatus::fromMap($map['externalAgentStatus']);
        }

        if (isset($map['instruction'])) {
            $model->instruction = $map['instruction'];
        }

        if (isset($map['latestSpecVersion'])) {
            $model->latestSpecVersion = $map['latestSpecVersion'];
        }

        if (isset($map['latestVersionStatus'])) {
            $model->latestVersionStatus = $map['latestVersionStatus'];
        }

        if (isset($map['model'])) {
            $model->model = model_::fromMap($map['model']);
        }

        if (isset($map['modelSource'])) {
            $model->modelSource = $map['modelSource'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['runtime'])) {
            $model->runtime = $map['runtime'];
        }

        if (isset($map['skills'])) {
            if (!empty($map['skills'])) {
                $model->skills = [];
                $n1 = 0;
                foreach ($map['skills'] as $item1) {
                    $model->skills[$n1] = skills::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['template'])) {
            $model->template = template::fromMap($map['template']);
        }

        if (isset($map['tools'])) {
            if (!empty($map['tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['tools'] as $item1) {
                    $model->tools[$n1] = tools::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
