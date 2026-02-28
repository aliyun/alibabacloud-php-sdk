<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class ListOTATaskByJobRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string[]
     */
    public $deviceNames;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'deviceNames' => 'DeviceNames',
        'iotInstanceId' => 'IotInstanceId',
        'jobId' => 'JobId',
        'pageSize' => 'PageSize',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        if (\is_array($this->deviceNames)) {
            Model::validateArray($this->deviceNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->deviceNames) {
            if (\is_array($this->deviceNames)) {
                $res['DeviceNames'] = [];
                $n1 = 0;
                foreach ($this->deviceNames as $item1) {
                    $res['DeviceNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DeviceNames'])) {
            if (!empty($map['DeviceNames'])) {
                $model->deviceNames = [];
                $n1 = 0;
                foreach ($map['DeviceNames'] as $item1) {
                    $model->deviceNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
