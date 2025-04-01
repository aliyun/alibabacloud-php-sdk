<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\fullVerifyComponents\errorDetails;

class fullVerifyComponents extends Model
{
    /**
     * @var int
     */
    public $consistentQuantity;

    /**
     * @var errorDetails[]
     */
    public $errorDetails;

    /**
     * @var int
     */
    public $inconsistentQuantity;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var int
     */
    public $recordProgress;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'consistentQuantity' => 'ConsistentQuantity',
        'errorDetails' => 'ErrorDetails',
        'inconsistentQuantity' => 'InconsistentQuantity',
        'ip' => 'Ip',
        'name' => 'Name',
        'progress' => 'Progress',
        'recordProgress' => 'RecordProgress',
        'region' => 'Region',
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->errorDetails)) {
            Model::validateArray($this->errorDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consistentQuantity) {
            $res['ConsistentQuantity'] = $this->consistentQuantity;
        }

        if (null !== $this->errorDetails) {
            if (\is_array($this->errorDetails)) {
                $res['ErrorDetails'] = [];
                $n1 = 0;
                foreach ($this->errorDetails as $item1) {
                    $res['ErrorDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->inconsistentQuantity) {
            $res['InconsistentQuantity'] = $this->inconsistentQuantity;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->recordProgress) {
            $res['RecordProgress'] = $this->recordProgress;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['ConsistentQuantity'])) {
            $model->consistentQuantity = $map['ConsistentQuantity'];
        }

        if (isset($map['ErrorDetails'])) {
            if (!empty($map['ErrorDetails'])) {
                $model->errorDetails = [];
                $n1 = 0;
                foreach ($map['ErrorDetails'] as $item1) {
                    $model->errorDetails[$n1++] = errorDetails::fromMap($item1);
                }
            }
        }

        if (isset($map['InconsistentQuantity'])) {
            $model->inconsistentQuantity = $map['InconsistentQuantity'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['RecordProgress'])) {
            $model->recordProgress = $map['RecordProgress'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
