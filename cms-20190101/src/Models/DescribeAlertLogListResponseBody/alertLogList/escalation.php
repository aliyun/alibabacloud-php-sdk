<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList;

use AlibabaCloud\Tea\Model;

class escalation extends Model
{
    /**
     * @description The description of the alert rule.
     *
     * > The content of the alert rule. If the metric value meets the alert condition, an alert is triggered.
     * @example $Average<90
     *
     * @var string
     */
    public $expression;

    /**
     * @description The severity level and notification methods of the alert. Valid values:
     *
     *   P4: Alert notifications are sent by using emails and DingTalk chatbots.
     *   OK: No alert is generated.
     *
     * @example P4
     *
     * @var string
     */
    public $level;

    /**
     * @description The consecutive number of times for which the metric value meets the alert condition before an alert is triggered.
     *
     * @example 1
     *
     * @var int
     */
    public $times;
    protected $_name = [
        'expression' => 'Expression',
        'level'      => 'Level',
        'times'      => 'Times',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}
