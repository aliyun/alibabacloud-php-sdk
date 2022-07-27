<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListResourceExecutionStatusResponseBody;

use AlibabaCloud\Tea\Model;

class resourceExecutionStatus extends Model
{
    /**
     * @var string
     */
    public $executionId;

    /**
     * @var string
     */
    public $executionTime;

    /**
     * @var string
     */
    public $outputs;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'executionId'   => 'ExecutionId',
        'executionTime' => 'ExecutionTime',
        'outputs'       => 'Outputs',
        'resourceId'    => 'ResourceId',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }
        if (null !== $this->executionTime) {
            $res['ExecutionTime'] = $this->executionTime;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceExecutionStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }
        if (isset($map['ExecutionTime'])) {
            $model->executionTime = $map['ExecutionTime'];
        }
        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
