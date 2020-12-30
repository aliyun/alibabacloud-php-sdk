<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\FindUsersResponseBody\users\list_\user;

use AlibabaCloud\SDK\CCC\V20170705\Models\FindUsersResponseBody\users\list_\user\skillLevels\skillLevel;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillLevel) {
            $res['SkillLevel'] = [];
            if (null !== $this->skillLevel && \is_array($this->skillLevel)) {
                $n = 0;
                foreach ($this->skillLevel as $item) {
                    $res['SkillLevel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['SkillLevel'])) {
            if (!empty($map['SkillLevel'])) {
                $model->skillLevel = [];
                $n                 = 0;
                foreach ($map['SkillLevel'] as $item) {
                    $model->skillLevel[$n++] = null !== $item ? skillLevel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
