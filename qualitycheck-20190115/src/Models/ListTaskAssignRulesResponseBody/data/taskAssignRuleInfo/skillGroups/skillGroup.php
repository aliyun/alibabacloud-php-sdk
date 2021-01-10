<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\skillGroups;

use AlibabaCloud\Tea\Model;

class skillGroup extends Model
{
    /**
     * @var string
     */
    public $skillId;

    /**
     * @var string
     */
    public $skillName;
    protected $_name = [
        'skillId'   => 'SkillId',
        'skillName' => 'SkillName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
        }
        if (null !== $this->skillName) {
            $res['SkillName'] = $this->skillName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skillGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }
        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        return $model;
    }
}
