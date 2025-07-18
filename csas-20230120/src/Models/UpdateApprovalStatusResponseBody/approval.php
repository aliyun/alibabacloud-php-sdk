<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalStatusResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalStatusResponseBody\approval\approvalProgresses;
use AlibabaCloud\Tea\Model;

class approval extends Model
{
    /**
     * @var string
     */
    public $approvalDetail;

    /**
     * @example approval-165e6738ad9d****
     *
     * @var string
     */
    public $approvalId;

    /**
     * @var approvalProgresses[]
     */
    public $approvalProgresses;

    /**
     * @example 2022-11-15 22:11:55
     *
     * @var string
     */
    public $createTime;

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
     * @example 1757952000
     *
     * @var int
     */
    public $endTimestamp;

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
     * @var string
     */
    public $reason;

    /**
     * @example {"form": {"labelCol": 6,"wrapperCol": 12}}
     *
     * @var string
     */
    public $schemaContent;

    /**
     * @example approval-schema-090134f1ebff****
     *
     * @var string
     */
    public $schemaId;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @example Pending
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'approvalDetail' => 'ApprovalDetail',
        'approvalId' => 'ApprovalId',
        'approvalProgresses' => 'ApprovalProgresses',
        'createTime' => 'CreateTime',
        'creatorDevTag' => 'CreatorDevTag',
        'creatorUserId' => 'CreatorUserId',
        'endTimestamp' => 'EndTimestamp',
        'policyType' => 'PolicyType',
        'processId' => 'ProcessId',
        'processName' => 'ProcessName',
        'reason' => 'Reason',
        'schemaContent' => 'SchemaContent',
        'schemaId' => 'SchemaId',
        'schemaName' => 'SchemaName',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvalDetail) {
            $res['ApprovalDetail'] = $this->approvalDetail;
        }
        if (null !== $this->approvalId) {
            $res['ApprovalId'] = $this->approvalId;
        }
        if (null !== $this->approvalProgresses) {
            $res['ApprovalProgresses'] = [];
            if (null !== $this->approvalProgresses && \is_array($this->approvalProgresses)) {
                $n = 0;
                foreach ($this->approvalProgresses as $item) {
                    $res['ApprovalProgresses'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return approval
     */
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
                $n = 0;
                foreach ($map['ApprovalProgresses'] as $item) {
                    $model->approvalProgresses[$n++] = null !== $item ? approvalProgresses::fromMap($item) : $item;
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
