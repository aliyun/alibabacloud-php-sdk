<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceCreateAndDeleteStatisticsResponseBody\instanceCreateAndDeleteStatistics;

use AlibabaCloud\Dara\Model;

class statistic extends Model
{
    /**
     * @var int
     */
    public $createdVmCount;

    /**
     * @var int
     */
    public $destroyedVmCount;

    /**
     * @var int
     */
    public $startedVmCount;

    /**
     * @var int
     */
    public $stoppedVmCount;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'createdVmCount' => 'CreatedVmCount',
        'destroyedVmCount' => 'DestroyedVmCount',
        'startedVmCount' => 'StartedVmCount',
        'stoppedVmCount' => 'StoppedVmCount',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdVmCount) {
            $res['CreatedVmCount'] = $this->createdVmCount;
        }

        if (null !== $this->destroyedVmCount) {
            $res['DestroyedVmCount'] = $this->destroyedVmCount;
        }

        if (null !== $this->startedVmCount) {
            $res['StartedVmCount'] = $this->startedVmCount;
        }

        if (null !== $this->stoppedVmCount) {
            $res['StoppedVmCount'] = $this->stoppedVmCount;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['CreatedVmCount'])) {
            $model->createdVmCount = $map['CreatedVmCount'];
        }

        if (isset($map['DestroyedVmCount'])) {
            $model->destroyedVmCount = $map['DestroyedVmCount'];
        }

        if (isset($map['StartedVmCount'])) {
            $model->startedVmCount = $map['StartedVmCount'];
        }

        if (isset($map['StoppedVmCount'])) {
            $model->stoppedVmCount = $map['StoppedVmCount'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
