<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListUsersResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class skillLevelList extends Model
{
    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $skillGroupId;

    /**
     * @example skillgroup
     *
     * @var string
     */
    public $skillGroupName;

    /**
     * @example 5
     *
     * @var int
     */
    public $skillLevel;
    protected $_name = [
        'skillGroupId' => 'SkillGroupId',
        'skillGroupName' => 'SkillGroupName',
        'skillLevel' => 'SkillLevel',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->skillLevel) {
            $res['SkillLevel'] = $this->skillLevel;
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
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['SkillLevel'])) {
            $model->skillLevel = $map['SkillLevel'];
        }

        return $model;
    }
}
