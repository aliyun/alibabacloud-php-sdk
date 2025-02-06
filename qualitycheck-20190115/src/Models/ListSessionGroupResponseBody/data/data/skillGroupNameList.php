<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->skillGroupNameList)) {
            Model::validateArray($this->skillGroupNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skillGroupNameList) {
            if (\is_array($this->skillGroupNameList)) {
                $res['SkillGroupNameList'] = [];
                $n1                        = 0;
                foreach ($this->skillGroupNameList as $item1) {
                    $res['SkillGroupNameList'][$n1++] = $item1;
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
        if (isset($map['SkillGroupNameList'])) {
            if (!empty($map['SkillGroupNameList'])) {
                $model->skillGroupNameList = [];
                $n1                        = 0;
                foreach ($map['SkillGroupNameList'] as $item1) {
                    $model->skillGroupNameList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
