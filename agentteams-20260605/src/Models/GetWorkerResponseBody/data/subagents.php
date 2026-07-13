<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerResponseBody\data\subagents\skills;

class subagents extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $hasAgentsMd;

    /**
     * @var string
     */
    public $name;

    /**
     * @var skills[]
     */
    public $skills;

    /**
     * @var string
     */
    public $sourcePath;

    /**
     * @var string
     */
    public $subagentId;
    protected $_name = [
        'description' => 'Description',
        'hasAgentsMd' => 'HasAgentsMd',
        'name' => 'Name',
        'skills' => 'Skills',
        'sourcePath' => 'SourcePath',
        'subagentId' => 'SubagentId',
    ];

    public function validate()
    {
        if (\is_array($this->skills)) {
            Model::validateArray($this->skills);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->hasAgentsMd) {
            $res['HasAgentsMd'] = $this->hasAgentsMd;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (null !== $this->sourcePath) {
            $res['SourcePath'] = $this->sourcePath;
        }

        if (null !== $this->subagentId) {
            $res['SubagentId'] = $this->subagentId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['HasAgentsMd'])) {
            $model->hasAgentsMd = $map['HasAgentsMd'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

        if (isset($map['SourcePath'])) {
            $model->sourcePath = $map['SourcePath'];
        }

        if (isset($map['SubagentId'])) {
            $model->subagentId = $map['SubagentId'];
        }

        return $model;
    }
}
