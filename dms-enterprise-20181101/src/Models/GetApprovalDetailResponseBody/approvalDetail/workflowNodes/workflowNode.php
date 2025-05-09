<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\workflowNodes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\workflowNodes\workflowNode\auditUserIdList;

class workflowNode extends Model
{
    /**
     * @var auditUserIdList
     */
    public $auditUserIdList;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $operateComment;

    /**
     * @var string
     */
    public $operateTime;

    /**
     * @var int
     */
    public $operatorId;

    /**
     * @var string
     */
    public $workflowInsCode;
    protected $_name = [
        'auditUserIdList' => 'AuditUserIdList',
        'nodeName' => 'NodeName',
        'operateComment' => 'OperateComment',
        'operateTime' => 'OperateTime',
        'operatorId' => 'OperatorId',
        'workflowInsCode' => 'WorkflowInsCode',
    ];

    public function validate()
    {
        if (null !== $this->auditUserIdList) {
            $this->auditUserIdList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditUserIdList) {
            $res['AuditUserIdList'] = null !== $this->auditUserIdList ? $this->auditUserIdList->toArray($noStream) : $this->auditUserIdList;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->operateComment) {
            $res['OperateComment'] = $this->operateComment;
        }

        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }

        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }

        if (null !== $this->workflowInsCode) {
            $res['WorkflowInsCode'] = $this->workflowInsCode;
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
        if (isset($map['AuditUserIdList'])) {
            $model->auditUserIdList = auditUserIdList::fromMap($map['AuditUserIdList']);
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['OperateComment'])) {
            $model->operateComment = $map['OperateComment'];
        }

        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }

        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }

        if (isset($map['WorkflowInsCode'])) {
            $model->workflowInsCode = $map['WorkflowInsCode'];
        }

        return $model;
    }
}
