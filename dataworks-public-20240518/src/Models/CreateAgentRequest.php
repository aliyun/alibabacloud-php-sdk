<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAgentRequest\visibilityScope;

class CreateAgentRequest extends Model
{
    /**
     * @var string[]
     */
    public $callableAgents;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var mixed[]
     */
    public $model;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $skills;

    /**
     * @var string
     */
    public $systemPrompt;

    /**
     * @var string[]
     */
    public $tools;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var visibilityScope
     */
    public $visibilityScope;
    protected $_name = [
        'callableAgents' => 'CallableAgents',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'metadata' => 'Metadata',
        'model' => 'Model',
        'name' => 'Name',
        'skills' => 'Skills',
        'systemPrompt' => 'SystemPrompt',
        'tools' => 'Tools',
        'visibility' => 'Visibility',
        'visibilityScope' => 'VisibilityScope',
    ];

    public function validate()
    {
        if (\is_array($this->callableAgents)) {
            Model::validateArray($this->callableAgents);
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (\is_array($this->model)) {
            Model::validateArray($this->model);
        }
        if (\is_array($this->skills)) {
            Model::validateArray($this->skills);
        }
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        if (null !== $this->visibilityScope) {
            $this->visibilityScope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callableAgents) {
            if (\is_array($this->callableAgents)) {
                $res['CallableAgents'] = [];
                $n1 = 0;
                foreach ($this->callableAgents as $item1) {
                    $res['CallableAgents'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['Metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->model) {
            if (\is_array($this->model)) {
                $res['Model'] = [];
                foreach ($this->model as $key1 => $value1) {
                    $res['Model'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->skills) {
            if (\is_array($this->skills)) {
                $res['Skills'] = [];
                $n1 = 0;
                foreach ($this->skills as $item1) {
                    $res['Skills'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->systemPrompt) {
            $res['SystemPrompt'] = $this->systemPrompt;
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['Tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    $res['Tools'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        if (null !== $this->visibilityScope) {
            $res['VisibilityScope'] = null !== $this->visibilityScope ? $this->visibilityScope->toArray($noStream) : $this->visibilityScope;
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
        if (isset($map['CallableAgents'])) {
            if (!empty($map['CallableAgents'])) {
                $model->callableAgents = [];
                $n1 = 0;
                foreach ($map['CallableAgents'] as $item1) {
                    $model->callableAgents[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                foreach ($map['Metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['Model'])) {
            if (!empty($map['Model'])) {
                $model->model = [];
                foreach ($map['Model'] as $key1 => $value1) {
                    $model->model[$key1] = $value1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Skills'])) {
            if (!empty($map['Skills'])) {
                $model->skills = [];
                $n1 = 0;
                foreach ($map['Skills'] as $item1) {
                    $model->skills[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SystemPrompt'])) {
            $model->systemPrompt = $map['SystemPrompt'];
        }

        if (isset($map['Tools'])) {
            if (!empty($map['Tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['Tools'] as $item1) {
                    $model->tools[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        if (isset($map['VisibilityScope'])) {
            $model->visibilityScope = visibilityScope::fromMap($map['VisibilityScope']);
        }

        return $model;
    }
}
