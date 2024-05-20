<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\timer\schedules;
use AlibabaCloud\Tea\Model;

class timer extends Model
{
    /**
     * @description The start date of the validity period of the scheduled auto scaling policy. Valid values:
     *
     *   If both the **BeginDate** and **EndDate** parameters are set to **null**, the auto scaling policy can always be triggered. The default value for these parameters is null.
     *   If the two parameters are set to specific dates, the scheduled auto scaling policy can be triggered during the period between the two dates. For example, if **BeginDate** is 2021-03-25 and **EndDate** is 2021-04-25, the auto scaling policy is valid for one month.
     *
     * @example 2021-03-25
     *
     * @var string
     */
    public $beginDate;

    /**
     * @description The end date of the validity period of the scheduled auto scaling policy. Valid values:
     *
     *   If both the **BeginDate** and **EndDate** parameters are set to **null**, the auto scaling policy can always be triggered. The default value for these parameters is null.
     *   If the two parameters are set to specific dates, the scheduled auto scaling policy can be triggered during the period between the two dates. For example, if **BeginDate** is 2021-03-25 and **EndDate** is 2021-04-25, the auto scaling policy is valid for one month.
     *
     * @example 2021-04-25
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The days on which the scheduled auto scaling policy takes effect. Valid values:
     *
     *   **\\* \\* \\***: The scheduled auto scaling policy takes effect at a specified time every day.
     *
     *   **\\* \\* Fri,Mon**: The scheduled auto scaling policy takes effect at a specified time on one or multiple days of a week. The specified time is in the GMT+8 time zone. Valid values:
     *
     *   **Sun**: Sunday
     *   **Mon**: Monday
     *   **Tue**: Tuesday
     *   **Wed**: Wednesday
     *   **Thu**: Thursday
     *   **Fri**: Friday
     *   **Sat**: Saturday
     *
     *   **1,2,3,28,31 \\* \\***: The scheduled auto scaling policy takes effect at a specified time on one or multiple days of a month. Valid values: 1 to 31. If the month does not have a 31st day, the auto scaling policy takes effect on the specified days other than the 31st day.
     *
     * @example * * *
     *
     * @var string
     */
    public $period;

    /**
     * @description The points in time when the auto scaling policy is triggered within one day.
     *
     * @var schedules[]
     */
    public $schedules;
    protected $_name = [
        'beginDate' => 'BeginDate',
        'endDate'   => 'EndDate',
        'period'    => 'Period',
        'schedules' => 'Schedules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->schedules) {
            $res['Schedules'] = [];
            if (null !== $this->schedules && \is_array($this->schedules)) {
                $n = 0;
                foreach ($this->schedules as $item) {
                    $res['Schedules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Schedules'])) {
            if (!empty($map['Schedules'])) {
                $model->schedules = [];
                $n                = 0;
                foreach ($map['Schedules'] as $item) {
                    $model->schedules[$n++] = null !== $item ? schedules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
