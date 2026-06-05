<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAgentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAgentResponseBody\agent\callableAgents;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAgentResponseBody\agent\model_;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAgentResponseBody\agent\skills;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAgentResponseBody\agent\tools;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAgentResponseBody\agent\visibilityScope;

class agent extends Model
{
    /**
     * @var callableAgents[]
     */
    public $callableAgents;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var model_
     */
    public $model;

    /**
     * @var string
     */
    public $modifierId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $requiredRuntime;

    /**
     * @var skills[]
     */
    public $skills;

    /**
     * @var string
     */
    public $systemPrompt;

    /**
     * @var tools[]
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
        'creatorId' => 'CreatorId',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'metadata' => 'Metadata',
        'model' => 'Model',
        'modifierId' => 'ModifierId',
        'name' => 'Name',
        'requiredRuntime' => 'RequiredRuntime',
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
        if (null !== $this->model) {
            $this->model->validate();
        }
        if (\is_array($this->requiredRuntime)) {
            Model::validateArray($this->requiredRuntime);
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
                    $res['CallableAgents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
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
            $res['Model'] = null !== $this->model ? $this->model->toArray($noStream) : $this->model;
        }

        if (null !== $this->modifierId) {
            $res['ModifierId'] = $this->modifierId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->requiredRuntime) {
            if (\is_array($this->requiredRuntime)) {
                $res['RequiredRuntime'] = [];
                $n1 = 0;
                foreach ($this->requiredRuntime as $item1) {
                    $res['RequiredRuntime'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skills) {
            if (\is_array($this->skills)) {
                $res['Skills'] = [];
                $n1 = 0;
                foreach ($this->skills as $item1) {
                    $res['Skills'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                    $res['Tools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                    $model->callableAgents[$n1] = callableAgents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
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
            $model->model = model_::fromMap($map['Model']);
        }

        if (isset($map['ModifierId'])) {
            $model->modifierId = $map['ModifierId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RequiredRuntime'])) {
            if (!empty($map['RequiredRuntime'])) {
                $model->requiredRuntime = [];
                $n1 = 0;
                foreach ($map['RequiredRuntime'] as $item1) {
                    $model->requiredRuntime[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Skills'])) {
            if (!empty($map['Skills'])) {
                $model->skills = [];
                $n1 = 0;
                foreach ($map['Skills'] as $item1) {
                    $model->skills[$n1] = skills::fromMap($item1);
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
                    $model->tools[$n1] = tools::fromMap($item1);
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
