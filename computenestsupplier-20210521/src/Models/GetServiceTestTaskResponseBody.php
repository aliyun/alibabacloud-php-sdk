<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTestTaskResponseBody\executionDetails;

class GetServiceTestTaskResponseBody extends Model
{
    /**
     * @var executionDetails[]
     */
    public $executionDetails;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskRegionId;
    protected $_name = [
        'executionDetails' => 'ExecutionDetails',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'taskName' => 'TaskName',
        'taskRegionId' => 'TaskRegionId',
    ];

    public function validate()
    {
        if (\is_array($this->executionDetails)) {
            Model::validateArray($this->executionDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executionDetails) {
            if (\is_array($this->executionDetails)) {
                $res['ExecutionDetails'] = [];
                $n1 = 0;
                foreach ($this->executionDetails as $item1) {
                    $res['ExecutionDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionDetails'])) {
            if (!empty($map['ExecutionDetails'])) {
                $model->executionDetails = [];
                $n1 = 0;
                foreach ($map['ExecutionDetails'] as $item1) {
                    $model->executionDetails[$n1++] = executionDetails::fromMap($item1);
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
