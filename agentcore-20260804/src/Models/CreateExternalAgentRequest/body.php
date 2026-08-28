<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateExternalAgentRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateExternalAgentRequest\body\model_;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateExternalAgentRequest\body\skills;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateExternalAgentRequest\body\template;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateExternalAgentRequest\body\tools;

class body extends Model
{
    /**
     * @var string
     */
    public $description;

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
    public $modelSource;

    /**
     * @var string
     */
    public $name;

    /**
     * @var skills[]
     */
    public $skills;

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
        'instruction' => 'instruction',
        'model' => 'model',
        'modelSource' => 'modelSource',
        'name' => 'name',
        'skills' => 'skills',
        'template' => 'template',
        'tools' => 'tools',
    ];

    public function validate()
    {
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
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->instruction) {
            $res['instruction'] = $this->instruction;
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

        if (isset($map['instruction'])) {
            $model->instruction = $map['instruction'];
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
