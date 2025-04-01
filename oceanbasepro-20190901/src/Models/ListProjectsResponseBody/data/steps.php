<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data\steps\extraInfo;

class steps extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var extraInfo
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $order;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var mixed[]
     */
    public $stepInfo;
    protected $_name = [
        'description' => 'Description',
        'extraInfo' => 'ExtraInfo',
        'finishTime' => 'FinishTime',
        'name' => 'Name',
        'order' => 'Order',
        'progress' => 'Progress',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'stepInfo' => 'StepInfo',
    ];

    public function validate()
    {
        if (null !== $this->extraInfo) {
            $this->extraInfo->validate();
        }
        if (\is_array($this->stepInfo)) {
            Model::validateArray($this->stepInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = null !== $this->extraInfo ? $this->extraInfo->toArray($noStream) : $this->extraInfo;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->stepInfo) {
            if (\is_array($this->stepInfo)) {
                $res['StepInfo'] = [];
                foreach ($this->stepInfo as $key1 => $value1) {
                    $res['StepInfo'][$key1] = $value1;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = extraInfo::fromMap($map['ExtraInfo']);
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StepInfo'])) {
            if (!empty($map['StepInfo'])) {
                $model->stepInfo = [];
                foreach ($map['StepInfo'] as $key1 => $value1) {
                    $model->stepInfo[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
