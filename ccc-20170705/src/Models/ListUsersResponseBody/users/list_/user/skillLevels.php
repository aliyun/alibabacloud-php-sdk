<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersResponseBody\users\list_\user;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersResponseBody\users\list_\user\skillLevels\skillLevel;

class skillLevels extends Model
{
    /**
     * @var skillLevel[]
     */
    public $skillLevel;
    protected $_name = [
        'skillLevel' => 'SkillLevel',
    ];

    public function validate()
    {
        if (\is_array($this->skillLevel)) {
            Model::validateArray($this->skillLevel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skillLevel) {
            if (\is_array($this->skillLevel)) {
                $res['SkillLevel'] = [];
                $n1 = 0;
                foreach ($this->skillLevel as $item1) {
                    $res['SkillLevel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SkillLevel'])) {
            if (!empty($map['SkillLevel'])) {
                $model->skillLevel = [];
                $n1 = 0;
                foreach ($map['SkillLevel'] as $item1) {
                    $model->skillLevel[$n1] = skillLevel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
