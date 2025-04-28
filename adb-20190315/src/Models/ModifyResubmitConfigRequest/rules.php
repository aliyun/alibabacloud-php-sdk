<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\ModifyResubmitConfigRequest;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var bool
     */
    public $exceedMemoryException;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $peakMemory;

    /**
     * @var string
     */
    public $queryTime;

    /**
     * @var string
     */
    public $targetGroupName;
    protected $_name = [
        'exceedMemoryException' => 'ExceedMemoryException',
        'groupName' => 'GroupName',
        'peakMemory' => 'PeakMemory',
        'queryTime' => 'QueryTime',
        'targetGroupName' => 'TargetGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exceedMemoryException) {
            $res['ExceedMemoryException'] = $this->exceedMemoryException;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }

        if (null !== $this->queryTime) {
            $res['QueryTime'] = $this->queryTime;
        }

        if (null !== $this->targetGroupName) {
            $res['TargetGroupName'] = $this->targetGroupName;
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
        if (isset($map['ExceedMemoryException'])) {
            $model->exceedMemoryException = $map['ExceedMemoryException'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }

        if (isset($map['QueryTime'])) {
            $model->queryTime = $map['QueryTime'];
        }

        if (isset($map['TargetGroupName'])) {
            $model->targetGroupName = $map['TargetGroupName'];
        }

        return $model;
    }
}
