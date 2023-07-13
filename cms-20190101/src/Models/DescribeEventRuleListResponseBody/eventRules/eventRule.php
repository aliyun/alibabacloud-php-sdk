<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules\eventRule\eventPattern;
use AlibabaCloud\Tea\Model;

class eventRule extends Model
{
    /**
     * @description The filter keyword.
     *
     * @example Default group event rule.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the application group.
     *
     * @var eventPattern
     */
    public $eventPattern;

    /**
     * @description The mode of the event-triggered alert rule.
     *
     * @example SYSTEM
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The number of entries to return on each page.
     *
     * A minimum of one entry can be returned on each page. Default value: 10.
     * @example 7378****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The relationship between multiple keywords in a condition. Valid values:
     *
     *   OR: The relationship between keywords is OR.
     *   NOT: The keyword is excluded. The value NOT indicates that all events that do not contain the keywords are matched.
     *
     * @example test_DefaultEventRule_7378****
     *
     * @var string
     */
    public $name;

    /**
     * @example 86400
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description The level of the event. Valid values:
     *
     *   CRITICAL: critical
     *   WARN: warning
     *   INFO: information
     *
     * @example ENABLED
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'description'  => 'Description',
        'eventPattern' => 'EventPattern',
        'eventType'    => 'EventType',
        'groupId'      => 'GroupId',
        'name'         => 'Name',
        'silenceTime'  => 'SilenceTime',
        'state'        => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eventPattern) {
            $res['EventPattern'] = null !== $this->eventPattern ? $this->eventPattern->toMap() : null;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EventPattern'])) {
            $model->eventPattern = eventPattern::fromMap($map['EventPattern']);
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
