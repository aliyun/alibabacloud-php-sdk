<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup;

use AlibabaCloud\Dara\Model;

class contactGroupList extends Model
{
    /**
     * @var string[]
     */
    public $contactGroupList;
    protected $_name = [
        'contactGroupList' => 'ContactGroupList',
    ];

    public function validate()
    {
        if (\is_array($this->contactGroupList)) {
            Model::validateArray($this->contactGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroupList) {
            if (\is_array($this->contactGroupList)) {
                $res['ContactGroupList'] = [];
                $n1 = 0;
                foreach ($this->contactGroupList as $item1) {
                    $res['ContactGroupList'][$n1] = $item1;
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
        if (isset($map['ContactGroupList'])) {
            if (!empty($map['ContactGroupList'])) {
                $model->contactGroupList = [];
                $n1 = 0;
                foreach ($map['ContactGroupList'] as $item1) {
                    $model->contactGroupList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
