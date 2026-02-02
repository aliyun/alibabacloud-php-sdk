<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class UpdateCustomAgentShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $customAgentId;

    /**
     * @var bool
     */
    public $enableTools;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $skillIdsShrink;

    /**
     * @var string
     */
    public $systemPrompt;

    /**
     * @var string
     */
    public $toolsShrink;
    protected $_name = [
        'customAgentId' => 'CustomAgentId',
        'enableTools' => 'EnableTools',
        'name' => 'Name',
        'skillIdsShrink' => 'SkillIds',
        'systemPrompt' => 'SystemPrompt',
        'toolsShrink' => 'Tools',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customAgentId) {
            $res['CustomAgentId'] = $this->customAgentId;
        }

        if (null !== $this->enableTools) {
            $res['EnableTools'] = $this->enableTools;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->skillIdsShrink) {
            $res['SkillIds'] = $this->skillIdsShrink;
        }

        if (null !== $this->systemPrompt) {
            $res['SystemPrompt'] = $this->systemPrompt;
        }

        if (null !== $this->toolsShrink) {
            $res['Tools'] = $this->toolsShrink;
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
        if (isset($map['CustomAgentId'])) {
            $model->customAgentId = $map['CustomAgentId'];
        }

        if (isset($map['EnableTools'])) {
            $model->enableTools = $map['EnableTools'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SkillIds'])) {
            $model->skillIdsShrink = $map['SkillIds'];
        }

        if (isset($map['SystemPrompt'])) {
            $model->systemPrompt = $map['SystemPrompt'];
        }

        if (isset($map['Tools'])) {
            $model->toolsShrink = $map['Tools'];
        }

        return $model;
    }
}
