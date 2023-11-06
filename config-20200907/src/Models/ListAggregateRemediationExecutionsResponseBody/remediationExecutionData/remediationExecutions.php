<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRemediationExecutionsResponseBody\remediationExecutionData;

use AlibabaCloud\Tea\Model;

class remediationExecutions extends Model
{
    /**
     * @description The time when the remediation record was created.
     *
     * @example 2023-06-25T11:48:15Z
     *
     * @var string
     */
    public $executionCreateDate;

    /**
     * @description The invocation ID of the remediation record.
     *
     * @example exec-befded3781994ccf****
     *
     * @var string
     */
    public $executionInvocationId;

    /**
     * @description The IDs of the remediated resources. Multiple resource IDs are separated with commas (,).
     *
     * @example rm-0jlk629z240l8****
     *
     * @var string
     */
    public $executionResourceIds;

    /**
     * @description The resource type.
     *
     * @example ACS::RDS::DBInstance
     *
     * @var string
     */
    public $executionResourceType;

    /**
     * @description The status of the remediation. Valid values:
     *
     *   Success
     *   Failed
     *
     * @example Success
     *
     * @var string
     */
    public $executionStatus;

    /**
     * @description The error message returned when the remediation fails.
     *
     * @example Invocation time out.
     *
     * @var string
     */
    public $executionStatusMessage;
    protected $_name = [
        'executionCreateDate'    => 'ExecutionCreateDate',
        'executionInvocationId'  => 'ExecutionInvocationId',
        'executionResourceIds'   => 'ExecutionResourceIds',
        'executionResourceType'  => 'ExecutionResourceType',
        'executionStatus'        => 'ExecutionStatus',
        'executionStatusMessage' => 'ExecutionStatusMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return remediationExecutions
     */
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
