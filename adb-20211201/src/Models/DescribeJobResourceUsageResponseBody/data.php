<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeJobResourceUsageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeJobResourceUsageResponseBody\data\jobAcuUsage;

class data extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var jobAcuUsage[]
     */
    public $jobAcuUsage;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'endTime' => 'EndTime',
        'jobAcuUsage' => 'JobAcuUsage',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->jobAcuUsage)) {
            Model::validateArray($this->jobAcuUsage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->jobAcuUsage) {
            if (\is_array($this->jobAcuUsage)) {
                $res['JobAcuUsage'] = [];
                $n1 = 0;
                foreach ($this->jobAcuUsage as $item1) {
                    $res['JobAcuUsage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['JobAcuUsage'])) {
            if (!empty($map['JobAcuUsage'])) {
                $model->jobAcuUsage = [];
                $n1 = 0;
                foreach ($map['JobAcuUsage'] as $item1) {
                    $model->jobAcuUsage[$n1] = jobAcuUsage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
