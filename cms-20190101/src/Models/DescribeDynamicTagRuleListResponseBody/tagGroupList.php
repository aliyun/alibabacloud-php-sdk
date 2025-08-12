<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup;

class tagGroupList extends Model
{
    /**
     * @var tagGroup[]
     */
    public $tagGroup;
    protected $_name = [
        'tagGroup' => 'TagGroup',
    ];

    public function validate()
    {
        if (\is_array($this->tagGroup)) {
            Model::validateArray($this->tagGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagGroup) {
            if (\is_array($this->tagGroup)) {
                $res['TagGroup'] = [];
                $n1 = 0;
                foreach ($this->tagGroup as $item1) {
                    $res['TagGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TagGroup'])) {
            if (!empty($map['TagGroup'])) {
                $model->tagGroup = [];
                $n1 = 0;
                foreach ($map['TagGroup'] as $item1) {
                    $model->tagGroup[$n1] = tagGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
