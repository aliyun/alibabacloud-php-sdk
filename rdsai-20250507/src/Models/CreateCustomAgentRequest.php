<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class CreateCustomAgentRequest extends Model
{
    /**
     * @var bool
     */
    public $enableTools;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $skillIds;

    /**
     * @var string
     */
    public $systemPrompt;

    /**
     * @var string[]
     */
    public $tools;
    protected $_name = [
        'enableTools' => 'EnableTools',
        'name' => 'Name',
        'skillIds' => 'SkillIds',
        'systemPrompt' => 'SystemPrompt',
        'tools' => 'Tools',
    ];

    public function validate()
    {
        if (\is_array($this->skillIds)) {
            Model::validateArray($this->skillIds);
        }
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableTools) {
            $res['EnableTools'] = $this->enableTools;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->skillIds) {
            if (\is_array($this->skillIds)) {
                $res['SkillIds'] = [];
                $n1 = 0;
                foreach ($this->skillIds as $item1) {
                    $res['SkillIds'][$n1] = $item1;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableTools'])) {
            $model->enableTools = $map['EnableTools'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SkillIds'])) {
            if (!empty($map['SkillIds'])) {
                $model->skillIds = [];
                $n1 = 0;
                foreach ($map['SkillIds'] as $item1) {
                    $model->skillIds[$n1] = $item1;
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

        return $model;
    }
}
