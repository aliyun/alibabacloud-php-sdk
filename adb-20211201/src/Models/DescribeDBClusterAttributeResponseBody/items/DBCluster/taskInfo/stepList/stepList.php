<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterAttributeResponseBody\items\DBCluster\taskInfo\stepList;

use AlibabaCloud\Dara\Model;

class stepList extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $stepDesc;

    /**
     * @var string
     */
    public $stepName;

    /**
     * @var string
     */
    public $stepProgress;

    /**
     * @var string
     */
    public $stepStatus;
    protected $_name = [
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
        'stepDesc' => 'StepDesc',
        'stepName' => 'StepName',
        'stepProgress' => 'StepProgress',
        'stepStatus' => 'StepStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->stepDesc) {
            $res['StepDesc'] = $this->stepDesc;
        }

        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }

        if (null !== $this->stepProgress) {
            $res['StepProgress'] = $this->stepProgress;
        }

        if (null !== $this->stepStatus) {
            $res['StepStatus'] = $this->stepStatus;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StepDesc'])) {
            $model->stepDesc = $map['StepDesc'];
        }

        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }

        if (isset($map['StepProgress'])) {
            $model->stepProgress = $map['StepProgress'];
        }

        if (isset($map['StepStatus'])) {
            $model->stepStatus = $map['StepStatus'];
        }

        return $model;
    }
}
