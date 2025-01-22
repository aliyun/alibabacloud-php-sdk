<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListApprovalsRequest extends Model
{
    /**
     * @var string[]
     */
    public $approvalIds;
    /**
     * @var int
     */
    public $createEndTime;
    /**
     * @var int
     */
    public $createStartTime;
    /**
     * @var string
     */
    public $creatorDepartment;
    /**
     * @var string
     */
    public $creatorDevTag;
    /**
     * @var string
     */
    public $creatorUserId;
    /**
     * @var string
     */
    public $creatorUsername;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $operatorUserId;
    /**
     * @var string
     */
    public $operatorUsername;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $policyType;
    /**
     * @var string
     */
    public $processId;
    /**
     * @var string
     */
    public $processName;
    /**
     * @var string
     */
    public $schemaId;
    /**
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
        if (\is_array($this->approvalIds)) {
            Model::validateArray($this->approvalIds);
        }
        if (\is_array($this->statuses)) {
            Model::validateArray($this->statuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalIds) {
            if (\is_array($this->approvalIds)) {
                $res['ApprovalIds'] = [];
                $n1                 = 0;
                foreach ($this->approvalIds as $item1) {
                    $res['ApprovalIds'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->statuses)) {
                $res['Statuses'] = [];
                $n1              = 0;
                foreach ($this->statuses as $item1) {
                    $res['Statuses'][$n1++] = $item1;
                }
            }
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
        if (isset($map['ApprovalIds'])) {
            if (!empty($map['ApprovalIds'])) {
                $model->approvalIds = [];
                $n1                 = 0;
                foreach ($map['ApprovalIds'] as $item1) {
                    $model->approvalIds[$n1++] = $item1;
                }
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
                $model->statuses = [];
                $n1              = 0;
                foreach ($map['Statuses'] as $item1) {
                    $model->statuses[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
