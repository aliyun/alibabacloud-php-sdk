<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\fullVerifyComponents\errorDetails;
use AlibabaCloud\Tea\Model;

class fullVerifyComponents extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $consistentQuantity;

    /**
     * @var errorDetails[]
     */
    public $errorDetails;

    /**
     * @example 0
     *
     * @var int
     */
    public $inconsistentQuantity;

    /**
     * @example xxx.xxx.xxx.1
     *
     * @var string
     */
    public $ip;

    /**
     * @example xxx.xxx.xxx.1-9000:90247:0000000033
     *
     * @var string
     */
    public $name;

    /**
     * @example 100
     *
     * @var string
     */
    public $progress;

    /**
     * @example 100
     *
     * @var int
     */
    public $recordProgress;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example 1345***
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'consistentQuantity'   => 'ConsistentQuantity',
        'errorDetails'         => 'ErrorDetails',
        'inconsistentQuantity' => 'InconsistentQuantity',
        'ip'                   => 'Ip',
        'name'                 => 'Name',
        'progress'             => 'Progress',
        'recordProgress'       => 'RecordProgress',
        'region'               => 'Region',
        'status'               => 'Status',
        'taskId'               => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consistentQuantity) {
            $res['ConsistentQuantity'] = $this->consistentQuantity;
        }
        if (null !== $this->errorDetails) {
            $res['ErrorDetails'] = [];
            if (null !== $this->errorDetails && \is_array($this->errorDetails)) {
                $n = 0;
                foreach ($this->errorDetails as $item) {
                    $res['ErrorDetails'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return fullVerifyComponents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsistentQuantity'])) {
            $model->consistentQuantity = $map['ConsistentQuantity'];
        }
        if (isset($map['ErrorDetails'])) {
            if (!empty($map['ErrorDetails'])) {
                $model->errorDetails = [];
                $n                   = 0;
                foreach ($map['ErrorDetails'] as $item) {
                    $model->errorDetails[$n++] = null !== $item ? errorDetails::fromMap($item) : $item;
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
