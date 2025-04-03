<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationExecutionsResponseBody\remediationExecutionData;

use AlibabaCloud\Dara\Model;

class remediationExecutions extends Model
{
    /**
     * @var string
     */
    public $executionCreateDate;

    /**
     * @var string
     */
    public $executionInvocationId;

    /**
     * @var string
     */
    public $executionResourceIds;

    /**
     * @var string
     */
    public $executionResourceType;

    /**
     * @var string
     */
    public $executionStatus;

    /**
     * @var string
     */
    public $executionStatusMessage;
    protected $_name = [
        'executionCreateDate' => 'ExecutionCreateDate',
        'executionInvocationId' => 'ExecutionInvocationId',
        'executionResourceIds' => 'ExecutionResourceIds',
        'executionResourceType' => 'ExecutionResourceType',
        'executionStatus' => 'ExecutionStatus',
        'executionStatusMessage' => 'ExecutionStatusMessage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executionCreateDate) {
            $res['ExecutionCreateDate'] = $this->executionCreateDate;
        }

        if (null !== $this->executionInvocationId) {
            $res['ExecutionInvocationId'] = $this->executionInvocationId;
        }

        if (null !== $this->executionResourceIds) {
            $res['ExecutionResourceIds'] = $this->executionResourceIds;
        }

        if (null !== $this->executionResourceType) {
            $res['ExecutionResourceType'] = $this->executionResourceType;
        }

        if (null !== $this->executionStatus) {
            $res['ExecutionStatus'] = $this->executionStatus;
        }

        if (null !== $this->executionStatusMessage) {
            $res['ExecutionStatusMessage'] = $this->executionStatusMessage;
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
        if (isset($map['ExecutionCreateDate'])) {
            $model->executionCreateDate = $map['ExecutionCreateDate'];
        }

        if (isset($map['ExecutionInvocationId'])) {
            $model->executionInvocationId = $map['ExecutionInvocationId'];
        }

        if (isset($map['ExecutionResourceIds'])) {
            $model->executionResourceIds = $map['ExecutionResourceIds'];
        }

        if (isset($map['ExecutionResourceType'])) {
            $model->executionResourceType = $map['ExecutionResourceType'];
        }

        if (isset($map['ExecutionStatus'])) {
            $model->executionStatus = $map['ExecutionStatus'];
        }

        if (isset($map['ExecutionStatusMessage'])) {
            $model->executionStatusMessage = $map['ExecutionStatusMessage'];
        }

        return $model;
    }
}
