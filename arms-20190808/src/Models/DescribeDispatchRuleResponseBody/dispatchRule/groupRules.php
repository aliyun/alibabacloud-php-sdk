<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule;

use AlibabaCloud\Tea\Model;

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

    /**
     * @var int
     */
    public $repeatInterval;
    protected $_name = [
        'groupId'        => 'GroupId',
        'groupInterval'  => 'GroupInterval',
        'groupWaitTime'  => 'GroupWaitTime',
        'groupingFields' => 'GroupingFields',
        'repeatInterval' => 'RepeatInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['GroupingFields'] = $this->groupingFields;
        }
        if (null !== $this->repeatInterval) {
            $res['RepeatInterval'] = $this->repeatInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupRules
     */
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
                $model->groupingFields = $map['GroupingFields'];
            }
        }
        if (isset($map['RepeatInterval'])) {
            $model->repeatInterval = $map['RepeatInterval'];
        }

        return $model;
    }
}
