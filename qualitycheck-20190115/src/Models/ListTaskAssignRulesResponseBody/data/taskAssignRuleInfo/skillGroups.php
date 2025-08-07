<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\skillGroups\skillGroup;

class skillGroups extends Model
{
    /**
     * @var skillGroup[]
     */
    public $skillGroup;
    protected $_name = [
        'skillGroup' => 'SkillGroup',
    ];

    public function validate()
    {
        if (\is_array($this->skillGroup)) {
            Model::validateArray($this->skillGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skillGroup) {
            if (\is_array($this->skillGroup)) {
                $res['SkillGroup'] = [];
                $n1 = 0;
                foreach ($this->skillGroup as $item1) {
                    $res['SkillGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SkillGroup'])) {
            if (!empty($map['SkillGroup'])) {
                $model->skillGroup = [];
                $n1 = 0;
                foreach ($map['SkillGroup'] as $item1) {
                    $model->skillGroup[$n1] = skillGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
