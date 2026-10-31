<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetApprovalTaskDetailResponseBody\detailInfo;

use AlibabaCloud\Dara\Model;

class approveProcessSteps extends Model
{
    /**
     * @var string
     */
    public $approveUserIds;

    /**
     * @var string
     */
    public $approveUserNames;

    /**
     * @var string
     */
    public $operateTime;

    /**
     * @var string
     */
    public $operateUserId;

    /**
     * @var string
     */
    public $operateUserName;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $processStepName;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $result;
    protected $_name = [
        'approveUserIds' => 'ApproveUserIds',
        'approveUserNames' => 'ApproveUserNames',
        'operateTime' => 'OperateTime',
        'operateUserId' => 'OperateUserId',
        'operateUserName' => 'OperateUserName',
        'operation' => 'Operation',
        'processStepName' => 'ProcessStepName',
        'reason' => 'Reason',
        'result' => 'Result',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approveUserIds) {
            $res['ApproveUserIds'] = $this->approveUserIds;
        }

        if (null !== $this->approveUserNames) {
            $res['ApproveUserNames'] = $this->approveUserNames;
        }

        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }

        if (null !== $this->operateUserId) {
            $res['OperateUserId'] = $this->operateUserId;
        }

        if (null !== $this->operateUserName) {
            $res['OperateUserName'] = $this->operateUserName;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->processStepName) {
            $res['ProcessStepName'] = $this->processStepName;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
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
        if (isset($map['ApproveUserIds'])) {
            $model->approveUserIds = $map['ApproveUserIds'];
        }

        if (isset($map['ApproveUserNames'])) {
            $model->approveUserNames = $map['ApproveUserNames'];
        }

        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }

        if (isset($map['OperateUserId'])) {
            $model->operateUserId = $map['OperateUserId'];
        }

        if (isset($map['OperateUserName'])) {
            $model->operateUserName = $map['OperateUserName'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['ProcessStepName'])) {
            $model->processStepName = $map['ProcessStepName'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
