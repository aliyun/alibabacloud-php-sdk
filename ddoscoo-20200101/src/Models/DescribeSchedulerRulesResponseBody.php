<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSchedulerRulesResponseBody\schedulerRules;
use AlibabaCloud\Tea\Model;

class DescribeSchedulerRulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var schedulerRules[]
     */
    public $schedulerRules;
    protected $_name = [
        'totalCount'     => 'TotalCount',
        'requestId'      => 'RequestId',
        'schedulerRules' => 'SchedulerRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->schedulerRules) {
            $res['SchedulerRules'] = [];
            if (null !== $this->schedulerRules && \is_array($this->schedulerRules)) {
                $n = 0;
                foreach ($this->schedulerRules as $item) {
                    $res['SchedulerRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSchedulerRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SchedulerRules'])) {
            if (!empty($map['SchedulerRules'])) {
                $model->schedulerRules = [];
                $n                     = 0;
                foreach ($map['SchedulerRules'] as $item) {
                    $model->schedulerRules[$n++] = null !== $item ? schedulerRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
