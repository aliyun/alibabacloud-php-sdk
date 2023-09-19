<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventRuleAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the event-triggered alert rule.
     *
     * For more information about how to obtain the name of an event-triggered alert rule, see [DescribeEventRuleList](~~114996~~).
     * @example testRule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The mute period during which new alerts are not sent even if the trigger conditions are met.
     *
     * >  Only one alert notification is sent during each mute period even if the metric value exceeds the alert threshold several times.
     * @example 86400
     *
     * @var string
     */
    public $silenceTime;
    protected $_name = [
        'regionId'    => 'RegionId',
        'ruleName'    => 'RuleName',
        'silenceTime' => 'SilenceTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventRuleAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }

        return $model;
    }
}
