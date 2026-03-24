<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspiciousSecurityEventyStatisticsResponseBody\statistic;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspiciousSecurityEventyStatisticsResponseBody\statistic\antiRansomwareStatistic\securityEventMachine;

class antiRansomwareStatistic extends Model
{
    /**
     * @var int
     */
    public $securityEventCount;

    /**
     * @var securityEventMachine[]
     */
    public $securityEventMachine;
    protected $_name = [
        'securityEventCount' => 'SecurityEventCount',
        'securityEventMachine' => 'SecurityEventMachine',
    ];

    public function validate()
    {
        if (\is_array($this->securityEventMachine)) {
            Model::validateArray($this->securityEventMachine);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityEventCount) {
            $res['SecurityEventCount'] = $this->securityEventCount;
        }

        if (null !== $this->securityEventMachine) {
            if (\is_array($this->securityEventMachine)) {
                $res['SecurityEventMachine'] = [];
                $n1 = 0;
                foreach ($this->securityEventMachine as $item1) {
                    $res['SecurityEventMachine'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SecurityEventCount'])) {
            $model->securityEventCount = $map['SecurityEventCount'];
        }

        if (isset($map['SecurityEventMachine'])) {
            if (!empty($map['SecurityEventMachine'])) {
                $model->securityEventMachine = [];
                $n1 = 0;
                foreach ($map['SecurityEventMachine'] as $item1) {
                    $model->securityEventMachine[$n1] = securityEventMachine::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
