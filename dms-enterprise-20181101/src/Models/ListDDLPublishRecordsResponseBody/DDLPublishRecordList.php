<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponseBody\DDLPublishRecordList\publishTaskInfoList;
use AlibabaCloud\Tea\Model;

class DDLPublishRecordList extends Model
{
    /**
     * @example 2020-12-14 20:52:38
     *
     * @var string
     */
    public $auditExpireTime;

    /**
     * @example CANCEL
     *
     * @var string
     */
    public $auditStatus;

    /**
     * @example 1423
     *
     * @var int
     */
    public $creatorId;

    /**
     * @example true
     *
     * @var bool
     */
    public $finality;

    /**
     * @example CANCEL
     *
     * @var string
     */
    public $finalityReason;

    /**
     * @example AUDIT
     *
     * @var string
     */
    public $publishStatus;

    /**
     * @var publishTaskInfoList[]
     */
    public $publishTaskInfoList;

    /**
     * @example LOW_RISK
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @example CANCEL
     *
     * @var string
     */
    public $statusDesc;

    /**
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
