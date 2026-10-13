<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentRequest\body\agenticFsMounts;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentRequest\body\environment;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentRequest\body\harness;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentRequest\body\model_;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentRequest\body\network;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentRequest\body\ossMounts;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentRequest\body\runtime;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentRequest\body\skills;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentRequest\body\subAgents;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentRequest\body\template;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentRequest\body\tools;

class body extends Model
{
    /**
     * @var agenticFsMounts[]
     */
    public $agenticFsMounts;

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
        'agenticFsMounts' => 'agenticFsMounts',
        'description' => 'description',
        'environment' => 'environment',
        'harness' => 'harness',
        'instruction' => 'instruction',
        'model' => 'model',
        'name' => 'name',
        'network' => 'network',
        'ossMounts' => 'ossMounts',
        'runtime' => 'runtime',
        'skills' => 'skills',
        'subAgents' => 'subAgents',
        'template' => 'template',
        'tools' => 'tools',
    ];

    public function validate()
    {
        if (\is_array($this->agenticFsMounts)) {
            Model::validateArray($this->agenticFsMounts);
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
