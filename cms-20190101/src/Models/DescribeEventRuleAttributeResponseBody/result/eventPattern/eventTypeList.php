<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern;

use AlibabaCloud\Dara\Model;

class eventTypeList extends Model
{
    /**
     * @var string[]
     */
    public $eventTypeList;
    protected $_name = [
        'eventTypeList' => 'EventTypeList',
    ];

    public function validate()
    {
        if (\is_array($this->eventTypeList)) {
            Model::validateArray($this->eventTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventTypeList) {
            if (\is_array($this->eventTypeList)) {
                $res['EventTypeList'] = [];
                $n1 = 0;
                foreach ($this->eventTypeList as $item1) {
                    $res['EventTypeList'][$n1] = $item1;
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
        if (isset($map['EventTypeList'])) {
            if (!empty($map['EventTypeList'])) {
                $model->eventTypeList = [];
                $n1 = 0;
                foreach ($map['EventTypeList'] as $item1) {
                    $model->eventTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
