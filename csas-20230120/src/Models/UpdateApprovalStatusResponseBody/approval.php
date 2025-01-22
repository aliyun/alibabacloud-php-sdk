<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalStatusResponseBody\approval\approvalProgresses;

class approval extends Model
{
    /**
     * @var string
     */
    public $approvalDetail;
    /**
     * @var string
     */
    public $approvalId;
    /**
     * @var approvalProgresses[]
     */
    public $approvalProgresses;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $creatorDevTag;
    /**
     * @var string
     */
    public $creatorUserId;
    /**
     * @var int
     */
    public $endTimestamp;
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
    public $reason;
    /**
     * @var string
     */
    public $schemaContent;
    /**
     * @var string
     */
    public $schemaId;
    /**
     * @var string
     */
    public $schemaName;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'approvalDetail'     => 'ApprovalDetail',
        'approvalId'         => 'ApprovalId',
        'approvalProgresses' => 'ApprovalProgresses',
        'createTime'         => 'CreateTime',
        'creatorDevTag'      => 'CreatorDevTag',
        'creatorUserId'      => 'CreatorUserId',
        'endTimestamp'       => 'EndTimestamp',
        'policyType'         => 'PolicyType',
        'processId'          => 'ProcessId',
        'processName'        => 'ProcessName',
        'reason'             => 'Reason',
        'schemaContent'      => 'SchemaContent',
        'schemaId'           => 'SchemaId',
        'schemaName'         => 'SchemaName',
        'status'             => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->approvalProgresses)) {
            Model::validateArray($this->approvalProgresses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalDetail) {
            $res['ApprovalDetail'] = $this->approvalDetail;
        }

        if (null !== $this->approvalId) {
            $res['ApprovalId'] = $this->approvalId;
        }

        if (null !== $this->approvalProgresses) {
            if (\is_array($this->approvalProgresses)) {
                $res['ApprovalProgresses'] = [];
                $n1                        = 0;
                foreach ($this->approvalProgresses as $item1) {
                    $res['ApprovalProgresses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creatorDevTag) {
            $res['CreatorDevTag'] = $this->creatorDevTag;
        }

        if (null !== $this->creatorUserId) {
            $res['CreatorUserId'] = $this->creatorUserId;
        }

        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
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

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->schemaContent) {
            $res['SchemaContent'] = $this->schemaContent;
        }

        if (null !== $this->schemaId) {
            $res['SchemaId'] = $this->schemaId;
        }

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
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
        if (isset($map['ApprovalDetail'])) {
            $model->approvalDetail = $map['ApprovalDetail'];
        }

        if (isset($map['ApprovalId'])) {
            $model->approvalId = $map['ApprovalId'];
        }

        if (isset($map['ApprovalProgresses'])) {
            if (!empty($map['ApprovalProgresses'])) {
                $model->approvalProgresses = [];
                $n1                        = 0;
                foreach ($map['ApprovalProgresses'] as $item1) {
                    $model->approvalProgresses[$n1++] = approvalProgresses::fromMap($item1);
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreatorDevTag'])) {
            $model->creatorDevTag = $map['CreatorDevTag'];
        }

        if (isset($map['CreatorUserId'])) {
            $model->creatorUserId = $map['CreatorUserId'];
        }

        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
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

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['SchemaContent'])) {
            $model->schemaContent = $map['SchemaContent'];
        }

        if (isset($map['SchemaId'])) {
            $model->schemaId = $map['SchemaId'];
        }

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
