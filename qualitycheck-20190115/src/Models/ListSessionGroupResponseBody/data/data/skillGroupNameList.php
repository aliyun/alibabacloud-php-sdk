<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data;

use AlibabaCloud\Tea\Model;

class skillGroupNameList extends Model
{
    /**
     * @var string[]
     */
    public $skillGroupNameList;
    protected $_name = [
        'skillGroupNameList' => 'SkillGroupNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillGroupNameList) {
            $res['SkillGroupNameList'] = $this->skillGroupNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skillGroupNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkillGroupNameList'])) {
            if (!empty($map['SkillGroupNameList'])) {
                $model->skillGroupNameList = $map['SkillGroupNameList'];
            }
        }

        return $model;
    }
}
