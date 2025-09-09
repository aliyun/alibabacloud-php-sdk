<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;

class DescribeRdsPerformanceSummaryRequest extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string[]
     */
    public $rdsInstanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
        'rdsInstanceId' => 'RdsInstanceId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->rdsInstanceId)) {
            Model::validateArray($this->rdsInstanceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }

        if (null !== $this->rdsInstanceId) {
            if (\is_array($this->rdsInstanceId)) {
                $res['RdsInstanceId'] = [];
                $n1 = 0;
                foreach ($this->rdsInstanceId as $item1) {
                    $res['RdsInstanceId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }

        if (isset($map['RdsInstanceId'])) {
            if (!empty($map['RdsInstanceId'])) {
                $model->rdsInstanceId = [];
                $n1 = 0;
                foreach ($map['RdsInstanceId'] as $item1) {
                    $model->rdsInstanceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
