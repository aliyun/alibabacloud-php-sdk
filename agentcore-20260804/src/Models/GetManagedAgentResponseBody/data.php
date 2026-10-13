<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\agenticFsMounts;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\configuredSkills;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\environment;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\harness;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\model_;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\network;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\ossMounts;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\runtime;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\skills;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\subAgents;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\template;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\tools;

class data extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var agenticFsMounts[]
     */
    public $agenticFsMounts;

    /**
     * @var configuredSkills[]
     */
    public $configuredSkills;

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
     * @var environment
     */
    public $environment;

    /**
     * @var harness
     */
    public $harness;

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
    public $name;

    /**
     * @var network
     */
    public $network;

    /**
     * @var ossMounts[]
     */
    public $ossMounts;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var runtime
     */
    public $runtime;

    /**
     * @var int[]
     */
    public $sandboxPhaseCounts;

    /**
     * @var skills[]
     */
    public $skills;

    /**
     * @var string
     */
    public $status;

    /**
     * @var subAgents[]
     */
    public $subAgents;

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
        'agenticFsMounts' => 'agenticFsMounts',
        'configuredSkills' => 'configuredSkills',
        'createMode' => 'createMode',
        'createdAt' => 'createdAt',
        'deployType' => 'deployType',
        'description' => 'description',
        'environment' => 'environment',
        'harness' => 'harness',
        'instruction' => 'instruction',
        'latestSpecVersion' => 'latestSpecVersion',
        'latestVersionStatus' => 'latestVersionStatus',
        'model' => 'model',
        'name' => 'name',
        'network' => 'network',
        'ossMounts' => 'ossMounts',
        'regionId' => 'regionId',
        'runtime' => 'runtime',
        'sandboxPhaseCounts' => 'sandboxPhaseCounts',
        'skills' => 'skills',
        'status' => 'status',
        'subAgents' => 'subAgents',
        'template' => 'template',
        'tools' => 'tools',
        'updatedAt' => 'updatedAt',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->agenticFsMounts)) {
            Model::validateArray($this->agenticFsMounts);
        }
        if (\is_array($this->configuredSkills)) {
            Model::validateArray($this->configuredSkills);
        }
        if (null !== $this->environment) {
            $this->environment->validate();
        }
        if (null !== $this->harness) {
            $this->harness->validate();
        }
        if (null !== $this->model) {
            $this->model->validate();
        }
        if (null !== $this->network) {
            $this->network->validate();
        }
        if (\is_array($this->ossMounts)) {
            Model::validateArray($this->ossMounts);
        }
        if (null !== $this->runtime) {
            $this->runtime->validate();
        }
        if (\is_array($this->sandboxPhaseCounts)) {
            Model::validateArray($this->sandboxPhaseCounts);
        }
        if (\is_array($this->skills)) {
            Model::validateArray($this->skills);
        }
        if (\is_array($this->subAgents)) {
            Model::validateArray($this->subAgents);
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

        if (null !== $this->agenticFsMounts) {
            if (\is_array($this->agenticFsMounts)) {
                $res['agenticFsMounts'] = [];
                $n1 = 0;
                foreach ($this->agenticFsMounts as $item1) {
                    $res['agenticFsMounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->configuredSkills) {
            if (\is_array($this->configuredSkills)) {
                $res['configuredSkills'] = [];
                $n1 = 0;
                foreach ($this->configuredSkills as $item1) {
                    $res['configuredSkills'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->environment) {
            $res['environment'] = null !== $this->environment ? $this->environment->toArray($noStream) : $this->environment;
        }

        if (null !== $this->harness) {
            $res['harness'] = null !== $this->harness ? $this->harness->toArray($noStream) : $this->harness;
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

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->network) {
            $res['network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
        }

        if (null !== $this->ossMounts) {
            if (\is_array($this->ossMounts)) {
                $res['ossMounts'] = [];
                $n1 = 0;
                foreach ($this->ossMounts as $item1) {
                    $res['ossMounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toArray($noStream) : $this->runtime;
        }

        if (null !== $this->sandboxPhaseCounts) {
            if (\is_array($this->sandboxPhaseCounts)) {
                $res['sandboxPhaseCounts'] = [];
                foreach ($this->sandboxPhaseCounts as $key1 => $value1) {
                    $res['sandboxPhaseCounts'][$key1] = $value1;
                }
            }
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

        if (null !== $this->subAgents) {
            if (\is_array($this->subAgents)) {
                $res['subAgents'] = [];
                $n1 = 0;
                foreach ($this->subAgents as $item1) {
                    $res['subAgents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['agenticFsMounts'])) {
            if (!empty($map['agenticFsMounts'])) {
                $model->agenticFsMounts = [];
                $n1 = 0;
                foreach ($map['agenticFsMounts'] as $item1) {
                    $model->agenticFsMounts[$n1] = agenticFsMounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['configuredSkills'])) {
            if (!empty($map['configuredSkills'])) {
                $model->configuredSkills = [];
                $n1 = 0;
                foreach ($map['configuredSkills'] as $item1) {
                    $model->configuredSkills[$n1] = configuredSkills::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['environment'])) {
            $model->environment = environment::fromMap($map['environment']);
        }

        if (isset($map['harness'])) {
            $model->harness = harness::fromMap($map['harness']);
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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['network'])) {
            $model->network = network::fromMap($map['network']);
        }

        if (isset($map['ossMounts'])) {
            if (!empty($map['ossMounts'])) {
                $model->ossMounts = [];
                $n1 = 0;
                foreach ($map['ossMounts'] as $item1) {
                    $model->ossMounts[$n1] = ossMounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['runtime'])) {
            $model->runtime = runtime::fromMap($map['runtime']);
        }

        if (isset($map['sandboxPhaseCounts'])) {
            if (!empty($map['sandboxPhaseCounts'])) {
                $model->sandboxPhaseCounts = [];
                foreach ($map['sandboxPhaseCounts'] as $key1 => $value1) {
                    $model->sandboxPhaseCounts[$key1] = $value1;
                }
            }
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

        if (isset($map['subAgents'])) {
            if (!empty($map['subAgents'])) {
                $model->subAgents = [];
                $n1 = 0;
                foreach ($map['subAgents'] as $item1) {
                    $model->subAgents[$n1] = subAgents::fromMap($item1);
                    ++$n1;
                }
            }
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
