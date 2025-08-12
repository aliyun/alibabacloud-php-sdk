<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule;

class eventRules extends Model
{
    /**
     * @var eventRule[]
     */
    public $eventRule;
    protected $_name = [
        'eventRule' => 'EventRule',
    ];

    public function validate()
    {
        if (\is_array($this->eventRule)) {
            Model::validateArray($this->eventRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventRule) {
            if (\is_array($this->eventRule)) {
                $res['EventRule'] = [];
                $n1 = 0;
                foreach ($this->eventRule as $item1) {
                    $res['EventRule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EventRule'])) {
            if (!empty($map['EventRule'])) {
                $model->eventRule = [];
                $n1 = 0;
                foreach ($map['EventRule'] as $item1) {
                    $model->eventRule[$n1] = eventRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
