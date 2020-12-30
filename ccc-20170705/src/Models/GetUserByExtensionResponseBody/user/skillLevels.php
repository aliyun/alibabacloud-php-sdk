<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetUserByExtensionResponseBody\user;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetUserByExtensionResponseBody\user\skillLevels\skill;
use AlibabaCloud\Tea\Model;

class skillLevels extends Model
{
    /**
     * @var skill
     */
    public $skill;

    /**
     * @var string
     */
    public $skillLevelId;

    /**
     * @var int
     */
    public $level;
    protected $_name = [
        'skill'        => 'Skill',
        'skillLevelId' => 'SkillLevelId',
        'level'        => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skill) {
            $res['Skill'] = null !== $this->skill ? $this->skill->toMap() : null;
        }
        if (null !== $this->skillLevelId) {
            $res['SkillLevelId'] = $this->skillLevelId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skillLevels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Skill'])) {
            $model->skill = skill::fromMap($map['Skill']);
        }
        if (isset($map['SkillLevelId'])) {
            $model->skillLevelId = $map['SkillLevelId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
