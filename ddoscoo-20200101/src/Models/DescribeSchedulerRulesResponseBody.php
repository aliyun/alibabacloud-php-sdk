<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSchedulerRulesResponseBody\schedulerRules;

class DescribeSchedulerRulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var schedulerRules[]
     */
    public $schedulerRules;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'schedulerRules' => 'SchedulerRules',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->schedulerRules)) {
            Model::validateArray($this->schedulerRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->schedulerRules) {
            if (\is_array($this->schedulerRules)) {
                $res['SchedulerRules'] = [];
                $n1 = 0;
                foreach ($this->schedulerRules as $item1) {
                    $res['SchedulerRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SchedulerRules'])) {
            if (!empty($map['SchedulerRules'])) {
                $model->schedulerRules = [];
                $n1 = 0;
                foreach ($map['SchedulerRules'] as $item1) {
                    $model->schedulerRules[$n1] = schedulerRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
