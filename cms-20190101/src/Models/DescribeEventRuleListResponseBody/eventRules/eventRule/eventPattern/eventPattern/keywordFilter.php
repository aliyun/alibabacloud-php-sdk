<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern\eventPattern;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern\eventPattern\keywordFilter\keywords;
use AlibabaCloud\Tea\Model;

class keywordFilter extends Model
{
    /**
     * @description The keywords that are used to match events.
     *
     * @var keywords
     */
    public $keywords;

    /**
     * @description The relationship between multiple keywords in a condition. Valid values:
     *
     *   OR: The relationship between keywords is OR.
     *   NOT: The keyword is excluded. The value NOT indicates that all events that do not contain the keywords are matched.
     *
     * @example OR
     *
     * @var string
     */
    public $relation;
    protected $_name = [
        'keywords' => 'Keywords',
        'relation' => 'Relation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keywords) {
            $res['Keywords'] = null !== $this->keywords ? $this->keywords->toMap() : null;
        }
        if (null !== $this->relation) {
            $res['Relation'] = $this->relation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keywordFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keywords'])) {
            $model->keywords = keywords::fromMap($map['Keywords']);
        }
        if (isset($map['Relation'])) {
            $model->relation = $map['Relation'];
        }

        return $model;
    }
}
