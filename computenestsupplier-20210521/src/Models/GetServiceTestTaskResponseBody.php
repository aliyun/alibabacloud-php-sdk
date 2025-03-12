<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTestTaskResponseBody\executionDetails;
use AlibabaCloud\Tea\Model;

class GetServiceTestTaskResponseBody extends Model
{
    /**
     * @description The execution details.
     *
     * @var executionDetails[]
     */
    public $executionDetails;

    /**
     * @description Id of the request
     *
     * @example A361BA9E-xxxx-xxxx-xxxx-C26E5180456E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the service test task. Valid values:
     *
     *   Running
     *   Success
     *    Failure
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The task name.
     *
     * @example nametest
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The task execution region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $taskRegionId;
    protected $_name = [
        'executionDetails' => 'ExecutionDetails',
        'requestId'        => 'RequestId',
        'status'           => 'Status',
        'taskName'         => 'TaskName',
        'taskRegionId'     => 'TaskRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionDetails) {
            $res['ExecutionDetails'] = [];
            if (null !== $this->executionDetails && \is_array($this->executionDetails)) {
                $n = 0;
                foreach ($this->executionDetails as $item) {
                    $res['ExecutionDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskRegionId) {
            $res['TaskRegionId'] = $this->taskRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceTestTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionDetails'])) {
            if (!empty($map['ExecutionDetails'])) {
                $model->executionDetails = [];
                $n                       = 0;
                foreach ($map['ExecutionDetails'] as $item) {
                    $model->executionDetails[$n++] = null !== $item ? executionDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskRegionId'])) {
            $model->taskRegionId = $map['TaskRegionId'];
        }

        return $model;
    }
}
