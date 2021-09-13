<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListUsersResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class skillLevelList extends Model
{
    /**
     * @var int
     */
    public $skillLevel;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $skillGroupName;
    protected $_name = [
        'skillLevel'     => 'SkillLevel',
        'skillGroupId'   => 'SkillGroupId',
        'skillGroupName' => 'SkillGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillLevel) {
            $res['SkillLevel'] = $this->skillLevel;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skillLevelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkillLevel'])) {
            $model->skillLevel = $map['SkillLevel'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }

        return $model;
    }
}
