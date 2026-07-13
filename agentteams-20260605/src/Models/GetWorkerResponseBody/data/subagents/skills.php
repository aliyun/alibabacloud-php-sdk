<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerResponseBody\data\subagents;

use AlibabaCloud\Dara\Model;

class skills extends Model
{
    /**
     * @var bool
     */
    public $hasSkillMd;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $skillId;
    protected $_name = [
        'hasSkillMd' => 'HasSkillMd',
        'name' => 'Name',
        'skillId' => 'SkillId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasSkillMd) {
            $res['HasSkillMd'] = $this->hasSkillMd;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
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
        if (isset($map['HasSkillMd'])) {
            $model->hasSkillMd = $map['HasSkillMd'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        return $model;
    }
}
