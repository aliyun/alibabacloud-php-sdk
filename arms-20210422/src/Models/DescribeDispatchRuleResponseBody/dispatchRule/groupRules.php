<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models\DescribeDispatchRuleResponseBody\dispatchRule;

use AlibabaCloud\Dara\Model;

class groupRules extends Model
{
    /**
     * @var int
     */
    public $groupId;

    /**
     * @var int
     */
    public $groupInterval;

    /**
     * @var int
     */
    public $groupWaitTime;

    /**
     * @var string[]
     */
    public $groupingFields;
    protected $_name = [
        'groupId' => 'GroupId',
        'groupInterval' => 'GroupInterval',
        'groupWaitTime' => 'GroupWaitTime',
        'groupingFields' => 'GroupingFields',
    ];

    public function validate()
    {
        if (\is_array($this->groupingFields)) {
            Model::validateArray($this->groupingFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupInterval) {
            $res['GroupInterval'] = $this->groupInterval;
        }

        if (null !== $this->groupWaitTime) {
            $res['GroupWaitTime'] = $this->groupWaitTime;
        }

        if (null !== $this->groupingFields) {
            if (\is_array($this->groupingFields)) {
                $res['GroupingFields'] = [];
                $n1 = 0;
                foreach ($this->groupingFields as $item1) {
                    $res['GroupingFields'][$n1] = $item1;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupInterval'])) {
            $model->groupInterval = $map['GroupInterval'];
        }

        if (isset($map['GroupWaitTime'])) {
            $model->groupWaitTime = $map['GroupWaitTime'];
        }

        if (isset($map['GroupingFields'])) {
            if (!empty($map['GroupingFields'])) {
                $model->groupingFields = [];
                $n1 = 0;
                foreach ($map['GroupingFields'] as $item1) {
                    $model->groupingFields[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
