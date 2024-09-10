<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagValueBlacklist) {
            $res['TagValueBlacklist'] = $this->tagValueBlacklist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagValueBlacklist
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagValueBlacklist'])) {
            if (!empty($map['TagValueBlacklist'])) {
                $model->tagValueBlacklist = $map['TagValueBlacklist'];
            }
        }

        return $model;
    }
}
