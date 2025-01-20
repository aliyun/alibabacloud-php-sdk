<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponseBody\DDLPublishRecordList\publishTaskInfoList;

class DDLPublishRecordList extends Model
{
    /**
     * @var string
     */
    public $auditExpireTime;
    /**
     * @var string
     */
    public $auditStatus;
    /**
     * @var string
     */
    public $comment;
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
     * @var publishTaskInfoList[]
     */
    public $publishTaskInfoList;
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
    protected $_name = [
        'auditExpireTime'     => 'AuditExpireTime',
        'auditStatus'         => 'AuditStatus',
        'comment'             => 'Comment',
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
        if (\is_array($this->publishTaskInfoList)) {
            Model::validateArray($this->publishTaskInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditExpireTime) {
            $res['AuditExpireTime'] = $this->auditExpireTime;
        }

        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
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
            if (\is_array($this->publishTaskInfoList)) {
                $res['PublishTaskInfoList'] = [];
                $n1                         = 0;
                foreach ($this->publishTaskInfoList as $item1) {
                    $res['PublishTaskInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditExpireTime'])) {
            $model->auditExpireTime = $map['AuditExpireTime'];
        }

        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
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
                $n1                         = 0;
                foreach ($map['PublishTaskInfoList'] as $item1) {
                    $model->publishTaskInfoList[$n1++] = publishTaskInfoList::fromMap($item1);
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
