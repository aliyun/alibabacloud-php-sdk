<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsUsageByDayResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsUsageByDayResponseBody\usageByDays\usageByDay;
use AlibabaCloud\Tea\Model;

class usageByDays extends Model
{
    /**
     * @var usageByDay[]
     */
    public $usageByDay;
    protected $_name = [
        'usageByDay' => 'UsageByDay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->usageByDay) {
            $res['UsageByDay'] = [];
            if (null !== $this->usageByDay && \is_array($this->usageByDay)) {
                $n = 0;
                foreach ($this->usageByDay as $item) {
                    $res['UsageByDay'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageByDays
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UsageByDay'])) {
            if (!empty($map['UsageByDay'])) {
                $model->usageByDay = [];
                $n                 = 0;
                foreach ($map['UsageByDay'] as $item) {
                    $model->usageByDay[$n++] = null !== $item ? usageByDay::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
