<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSchedulerRulesResponseBody\schedulerRules;
use AlibabaCloud\Tea\Model;

class DescribeSchedulerRulesResponseBody extends Model
{
    /**
     * @example 11C55595-1757-4B17-9ACE-4ACB68C2D989
     *
     * @var string
     */
    public $requestId;

    /**
     * @var schedulerRules[]
     */
    public $schedulerRules;

    /**
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'requestId'      => 'RequestId',
        'schedulerRules' => 'SchedulerRules',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
