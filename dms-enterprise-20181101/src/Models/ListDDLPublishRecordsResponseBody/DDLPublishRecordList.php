<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponseBody\DDLPublishRecordList\publishTaskInfoList;
use AlibabaCloud\Tea\Model;

class DDLPublishRecordList extends Model
{
    /**
     * @description The time when the approval expires.
     *
     * @example 2020-12-14 20:52:38
     *
     * @var string
     */
    public $auditExpireTime;

    /**
     * @description The approval state of the ticket. Valid values:
     *
     *   **EXEMPT_PASS**: The ticket passes without approval.
     *   **TO_AUDIT**: The ticket is pending for approval.
     *   **CANCEL**: The ticket is canceled.
     *   **SUCCESS**: The ticket is approved.
     *   **FAIL**: The ticket fails to pass the approval.
     *
     * @example CANCEL
     *
     * @var string
     */
    public $auditStatus;

    /**
     * @description The ID of the user who creates the ticket. You can obtain the user ID by calling the [GetUser](~~147098~~) operation and querying the value of the UserId parameter. The value is not the unique ID (UID) of the Alibaba Cloud account.
     *
     * @example 1423
     *
     * @var int
     */
    public $creatorId;

    /**
     * @description Indicates whether the approval is terminated. Valid values:
     *
     *   **true**: The approval is terminated.
     *   **false**: The approval is not terminated.
     *
     * > Multiple reasons can terminate the approval. For example, you withdraw the application or your ticket is not approved before the specified time.
     * @example true
     *
     * @var bool
     */
    public $finality;

    /**
     * @description The reason for the termination.
     *
     * @example CANCEL
     *
     * @var string
     */
    public $finalityReason;

    /**
     * @description The publishing state of the ticket. Valid values:
     *
     *   **START**: The ticket is created.
     *   **ANALYZE**: The ticket is under analysis.
     *   **AUDIT**: The ticket is under approval.
     *   **DISPATCH**: A task is generated for the ticket.
     *   **SUCCESS**: The task is successful.
     *
     * @example AUDIT
     *
     * @var string
     */
    public $publishStatus;

    /**
     * @description The list of publishing tasks.
     *
     * @var publishTaskInfoList[]
     */
    public $publishTaskInfoList;

    /**
     * @description The risk level of the operation. Valid values:
     *
     *   **NONE_RISK**: The operation does not have risks.
     *   **LOW_RISK**: The operation is at low risk.
     *   **MIDDLE_RISK**: The operation is at medium risk.
     *   **HIGH_RISK**: The operation is at high risk.
     *
     * @example LOW_RISK
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The description of the publishing state.
     *
     * @example CANCEL
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @description The ID of the approval process.
     *
     * @example 432153
     *
     * @var int
     */
    public $workflowInstanceId;
    protected $_name = [
        'auditExpireTime'     => 'AuditExpireTime',
        'auditStatus'         => 'AuditStatus',
        'creatorId'           => 'CreatorId',
        'finality'            => 'Finality',
        'finalityReason'      => 'FinalityReason',
        'publishStatus'       => 'PublishStatus',
        'publishTaskInfoList' => 'PublishTaskInfoList',
        'riskLevel'           => 'RiskLevel',
        'statusDesc'          => 'StatusDesc',
        'workflowInstanceId'  => 'WorkflowInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditExpireTime) {
            $res['AuditExpireTime'] = $this->auditExpireTime;
        }
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->finality) {
            $res['Finality'] = $this->finality;
        }
        if (null !== $this->finalityReason) {
            $res['FinalityReason'] = $this->finalityReason;
        }
        if (null !== $this->publishStatus) {
            $res['PublishStatus'] = $this->publishStatus;
        }
        if (null !== $this->publishTaskInfoList) {
            $res['PublishTaskInfoList'] = [];
            if (null !== $this->publishTaskInfoList && \is_array($this->publishTaskInfoList)) {
                $n = 0;
                foreach ($this->publishTaskInfoList as $item) {
                    $res['PublishTaskInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->workflowInstanceId) {
            $res['WorkflowInstanceId'] = $this->workflowInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DDLPublishRecordList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditExpireTime'])) {
            $model->auditExpireTime = $map['AuditExpireTime'];
        }
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Finality'])) {
            $model->finality = $map['Finality'];
        }
        if (isset($map['FinalityReason'])) {
            $model->finalityReason = $map['FinalityReason'];
        }
        if (isset($map['PublishStatus'])) {
            $model->publishStatus = $map['PublishStatus'];
        }
        if (isset($map['PublishTaskInfoList'])) {
            if (!empty($map['PublishTaskInfoList'])) {
                $model->publishTaskInfoList = [];
                $n                          = 0;
                foreach ($map['PublishTaskInfoList'] as $item) {
                    $model->publishTaskInfoList[$n++] = null !== $item ? publishTaskInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['WorkflowInstanceId'])) {
            $model->workflowInstanceId = $map['WorkflowInstanceId'];
        }

        return $model;
    }
}
