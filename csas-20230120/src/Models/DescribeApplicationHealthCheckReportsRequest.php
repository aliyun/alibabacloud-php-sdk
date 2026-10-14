<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class DescribeApplicationHealthCheckReportsRequest extends Model
{
    /**
     * @var string[]
     */
    public $applicationIds;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'applicationIds' => 'ApplicationIds',
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->applicationIds)) {
            Model::validateArray($this->applicationIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationIds) {
            if (\is_array($this->applicationIds)) {
                $res['ApplicationIds'] = [];
                $n1 = 0;
                foreach ($this->applicationIds as $item1) {
                    $res['ApplicationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['ApplicationIds'])) {
            if (!empty($map['ApplicationIds'])) {
                $model->applicationIds = [];
                $n1 = 0;
                foreach ($map['ApplicationIds'] as $item1) {
                    $model->applicationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
