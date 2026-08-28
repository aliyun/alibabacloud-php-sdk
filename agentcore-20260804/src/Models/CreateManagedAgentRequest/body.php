<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentRequest\body\environment;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentRequest\body\model_;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentRequest\body\network;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentRequest\body\runtime;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentRequest\body\skills;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentRequest\body\subAgents;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentRequest\body\template;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentRequest\body\tools;

class body extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var environment
     */
    public $environment;

    /**
     * @var string
     */
    public $instruction;

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
     * @var runtime
     */
    public $runtime;

    /**
     * @var skills[]
     */
    public $skills;

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
    protected $_name = [
        'description' => 'description',
        'environment' => 'environment',
        'instruction' => 'instruction',
        'model' => 'model',
        'name' => 'name',
        'network' => 'network',
        'runtime' => 'runtime',
        'skills' => 'skills',
        'subAgents' => 'subAgents',
        'template' => 'template',
        'tools' => 'tools',
    ];

    public function validate()
    {
        if (null !== $this->environment) {
            $this->environment->validate();
        }
        if (null !== $this->model) {
            $this->model->validate();
        }
        if (null !== $this->network) {
            $this->network->validate();
        }
        if (null !== $this->runtime) {
            $this->runtime->validate();
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
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->environment) {
            $res['environment'] = null !== $this->environment ? $this->environment->toArray($noStream) : $this->environment;
        }

        if (null !== $this->instruction) {
            $res['instruction'] = $this->instruction;
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

        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toArray($noStream) : $this->runtime;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['environment'])) {
            $model->environment = environment::fromMap($map['environment']);
        }

        if (isset($map['instruction'])) {
            $model->instruction = $map['instruction'];
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

        if (isset($map['runtime'])) {
            $model->runtime = runtime::fromMap($map['runtime']);
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

        return $model;
    }
}
