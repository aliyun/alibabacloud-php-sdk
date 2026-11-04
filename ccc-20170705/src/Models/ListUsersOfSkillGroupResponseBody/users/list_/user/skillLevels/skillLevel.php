<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupResponseBody\users\list_\user\skillLevels;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupResponseBody\users\list_\user\skillLevels\skillLevel\skill;

class skillLevel extends Model
{
    /**
     * @var int
     */
    public $level;

    /**
     * @var skill
     */
    public $skill;

    /**
     * @var string
     */
    public $skillLevelId;
    protected $_name = [
        'level' => 'Level',
        'skill' => 'Skill',
        'skillLevelId' => 'SkillLevelId',
    ];

    public function validate()
    {
        if (null !== $this->skill) {
            $this->skill->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->skill) {
            $res['Skill'] = null !== $this->skill ? $this->skill->toArray($noStream) : $this->skill;
        }

        if (null !== $this->skillLevelId) {
            $res['SkillLevelId'] = $this->skillLevelId;
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
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Skill'])) {
            $model->skill = skill::fromMap($map['Skill']);
        }

        if (isset($map['SkillLevelId'])) {
            $model->skillLevelId = $map['SkillLevelId'];
        }

        return $model;
    }
}
