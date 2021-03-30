<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponseBody\DDLPublishRecordList\publishTaskInfoList;
use AlibabaCloud\Tea\Model;

class DDLPublishRecordList extends Model
{
    /**
     * @var string
     */
    public $auditStatus;

    /**
     * @var string
     */
    public $auditExpireTime;

    /**
     * @var int
     */
    public $creatorId;

    /**
     * @var bool
     */
    public $finality;

    /**
     * @var string
     */
    public $finalityReason;

    /**
     * @var string
     */
    public $publishStatus;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var int
     */
    public $workflowInstanceId;

    /**
     * @var publishTaskInfoList[]
     */
    public $publishTaskInfoList;
    protected $_name = [
        'auditStatus'         => 'AuditStatus',
        'auditExpireTime'     => 'AuditExpireTime',
        'creatorId'           => 'CreatorId',
        'finality'            => 'Finality',
        'finalityReason'      => 'FinalityReason',
        'publishStatus'       => 'PublishStatus',
        'riskLevel'           => 'RiskLevel',
        'statusDesc'          => 'StatusDesc',
        'workflowInstanceId'  => 'WorkflowInstanceId',
        'publishTaskInfoList' => 'PublishTaskInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->auditExpireTime) {
            $res['AuditExpireTime'] = $this->auditExpireTime;
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
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->workflowInstanceId) {
            $res['WorkflowInstanceId'] = $this->workflowInstanceId;
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
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['AuditExpireTime'])) {
            $model->auditExpireTime = $map['AuditExpireTime'];
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
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['WorkflowInstanceId'])) {
            $model->workflowInstanceId = $map['WorkflowInstanceId'];
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

        return $model;
    }
}
