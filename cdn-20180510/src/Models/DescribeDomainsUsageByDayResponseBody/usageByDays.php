<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsUsageByDayResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsUsageByDayResponseBody\usageByDays\usageByDay;

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
        if (\is_array($this->usageByDay)) {
            Model::validateArray($this->usageByDay);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->usageByDay) {
            if (\is_array($this->usageByDay)) {
                $res['UsageByDay'] = [];
                $n1 = 0;
                foreach ($this->usageByDay as $item1) {
                    $res['UsageByDay'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['UsageByDay'])) {
            if (!empty($map['UsageByDay'])) {
                $model->usageByDay = [];
                $n1 = 0;
                foreach ($map['UsageByDay'] as $item1) {
                    $model->usageByDay[$n1] = usageByDay::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
