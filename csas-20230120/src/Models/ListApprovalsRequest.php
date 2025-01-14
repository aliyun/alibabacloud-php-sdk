<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListApprovalsRequest extends Model
{
    /**
     * @var string[]
     */
    public $approvalIds;

    /**
     * @example 1736750500
     *
     * @var int
     */
    public $createEndTime;

    /**
     * @example 1730000000
     *
     * @var int
     */
    public $createStartTime;

    /**
     * @var string
     */
    public $creatorDepartment;

    /**
     * @example 36efa42d-2c32-c4dc-e3fc-8541e33a****
     *
     * @var string
     */
    public $creatorDevTag;

    /**
     * @example su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****
     *
     * @var string
     */
    public $creatorUserId;

    /**
     * @var string
     */
    public $creatorUsername;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****
     *
     * @var string
     */
    public $operatorUserId;

    /**
     * @var string
     */
    public $operatorUsername;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example DlpSend
     *
     * @var string
     */
    public $policyType;

    /**
     * @example approval-process-fcc351b8a95b****
     *
     * @var string
     */
    public $processId;

    /**
     * @var string
     */
    public $processName;

    /**
     * @example approval-schema-090134f1ebff****
     *
     * @var string
     */
    public $schemaId;

    /**
     * @example test
     *
     * @var string
     */
    public $schemaName;

    /**
     * @var string[]
     */
    public $statuses;
    protected $_name = [
        'approvalIds'       => 'ApprovalIds',
        'createEndTime'     => 'CreateEndTime',
        'createStartTime'   => 'CreateStartTime',
        'creatorDepartment' => 'CreatorDepartment',
        'creatorDevTag'     => 'CreatorDevTag',
        'creatorUserId'     => 'CreatorUserId',
        'creatorUsername'   => 'CreatorUsername',
        'currentPage'       => 'CurrentPage',
        'operatorUserId'    => 'OperatorUserId',
        'operatorUsername'  => 'OperatorUsername',
        'pageSize'          => 'PageSize',
        'policyType'        => 'PolicyType',
        'processId'         => 'ProcessId',
        'processName'       => 'ProcessName',
        'schemaId'          => 'SchemaId',
        'schemaName'        => 'SchemaName',
        'statuses'          => 'Statuses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvalIds) {
            $res['ApprovalIds'] = $this->approvalIds;
        }
        if (null !== $this->createEndTime) {
            $res['CreateEndTime'] = $this->createEndTime;
        }
        if (null !== $this->createStartTime) {
            $res['CreateStartTime'] = $this->createStartTime;
        }
        if (null !== $this->creatorDepartment) {
            $res['CreatorDepartment'] = $this->creatorDepartment;
        }
        if (null !== $this->creatorDevTag) {
            $res['CreatorDevTag'] = $this->creatorDevTag;
        }
        if (null !== $this->creatorUserId) {
            $res['CreatorUserId'] = $this->creatorUserId;
        }
        if (null !== $this->creatorUsername) {
            $res['CreatorUsername'] = $this->creatorUsername;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->operatorUserId) {
            $res['OperatorUserId'] = $this->operatorUserId;
        }
        if (null !== $this->operatorUsername) {
            $res['OperatorUsername'] = $this->operatorUsername;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->schemaId) {
            $res['SchemaId'] = $this->schemaId;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApprovalsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovalIds'])) {
            if (!empty($map['ApprovalIds'])) {
                $model->approvalIds = $map['ApprovalIds'];
            }
        }
        if (isset($map['CreateEndTime'])) {
            $model->createEndTime = $map['CreateEndTime'];
        }
        if (isset($map['CreateStartTime'])) {
            $model->createStartTime = $map['CreateStartTime'];
        }
        if (isset($map['CreatorDepartment'])) {
            $model->creatorDepartment = $map['CreatorDepartment'];
        }
        if (isset($map['CreatorDevTag'])) {
            $model->creatorDevTag = $map['CreatorDevTag'];
        }
        if (isset($map['CreatorUserId'])) {
            $model->creatorUserId = $map['CreatorUserId'];
        }
        if (isset($map['CreatorUsername'])) {
            $model->creatorUsername = $map['CreatorUsername'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['OperatorUserId'])) {
            $model->operatorUserId = $map['OperatorUserId'];
        }
        if (isset($map['OperatorUsername'])) {
            $model->operatorUsername = $map['OperatorUsername'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['SchemaId'])) {
            $model->schemaId = $map['SchemaId'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = $map['Statuses'];
            }
        }

        return $model;
    }
}
