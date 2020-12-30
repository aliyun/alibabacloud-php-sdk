<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListPhoneNumbersResponseBody\phoneNumbers\phoneNumber\skillGroups;

use AlibabaCloud\Tea\Model;

class skillGroup extends Model
{
    /**
     * @var string
     */
    public $skillGroupName;

    /**
     * @var string
     */
    public $skillGroupId;
    protected $_name = [
        'skillGroupName' => 'SkillGroupName',
        'skillGroupId'   => 'SkillGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
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
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        return $model;
    }
}
