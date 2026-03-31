<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListTaskExecutionInvocationsResponseBody;

use AlibabaCloud\Dara\Model;

class taskExecutionInvocations extends Model
{
    /**
     * @var string
     */
    public $invocationId;

    /**
     * @var string
     */
    public $invocationTaskExecutionId;

    /**
     * @var string
     */
    public $invocationTaskName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'invocationId' => 'InvocationId',
        'invocationTaskExecutionId' => 'InvocationTaskExecutionId',
        'invocationTaskName' => 'InvocationTaskName',
        'regionId' => 'RegionId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invocationId) {
            $res['InvocationId'] = $this->invocationId;
        }

        if (null !== $this->invocationTaskExecutionId) {
            $res['InvocationTaskExecutionId'] = $this->invocationTaskExecutionId;
        }

        if (null !== $this->invocationTaskName) {
            $res['InvocationTaskName'] = $this->invocationTaskName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['InvocationId'])) {
            $model->invocationId = $map['InvocationId'];
        }

        if (isset($map['InvocationTaskExecutionId'])) {
            $model->invocationTaskExecutionId = $map['InvocationTaskExecutionId'];
        }

        if (isset($map['InvocationTaskName'])) {
            $model->invocationTaskName = $map['InvocationTaskName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
