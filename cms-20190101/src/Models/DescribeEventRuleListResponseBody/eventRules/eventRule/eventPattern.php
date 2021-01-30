<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule;

use AlibabaCloud\Tea\Model;

class eventPattern extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern\eventPattern[]
     */
    public $eventPattern;
    protected $_name = [
        'eventPattern' => 'EventPattern',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventPattern) {
            $res['EventPattern'] = [];
            if (null !== $this->eventPattern && \is_array($this->eventPattern)) {
                $n = 0;
                foreach ($this->eventPattern as $item) {
                    $res['EventPattern'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventPattern
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventPattern'])) {
            if (!empty($map['EventPattern'])) {
                $model->eventPattern = [];
                $n                   = 0;
                foreach ($map['EventPattern'] as $item) {
                    $model->eventPattern[$n++] = null !== $item ? \AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern\eventPattern::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
