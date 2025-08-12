<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup;

use AlibabaCloud\Dara\Model;

class tagValueBlacklist extends Model
{
    /**
     * @var string[]
     */
    public $tagValueBlacklist;
    protected $_name = [
        'tagValueBlacklist' => 'TagValueBlacklist',
    ];

    public function validate()
    {
        if (\is_array($this->tagValueBlacklist)) {
            Model::validateArray($this->tagValueBlacklist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagValueBlacklist) {
            if (\is_array($this->tagValueBlacklist)) {
                $res['TagValueBlacklist'] = [];
                $n1 = 0;
                foreach ($this->tagValueBlacklist as $item1) {
                    $res['TagValueBlacklist'][$n1] = $item1;
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
        if (isset($map['TagValueBlacklist'])) {
            if (!empty($map['TagValueBlacklist'])) {
                $model->tagValueBlacklist = [];
                $n1 = 0;
                foreach ($map['TagValueBlacklist'] as $item1) {
                    $model->tagValueBlacklist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
