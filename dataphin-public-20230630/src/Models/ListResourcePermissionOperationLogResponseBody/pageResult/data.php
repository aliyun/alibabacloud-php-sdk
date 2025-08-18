<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogResponseBody\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogResponseBody\pageResult\data\account;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogResponseBody\pageResult\data\period;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogResponseBody\pageResult\data\resourceInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogResponseBody\pageResult\data\targetAccount;

class data extends Model
{
    /**
     * @var account
     */
    public $account;

    /**
     * @var string
     */
    public $authScope;

    /**
     * @var int
     */
    public $operateId;

    /**
     * @var int
     */
    public $operateTime;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var period
     */
    public $period;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var resourceInfo
     */
    public $resourceInfo;

    /**
     * @var targetAccount
     */
    public $targetAccount;
    protected $_name = [
        'account' => 'Account',
        'authScope' => 'AuthScope',
        'operateId' => 'OperateId',
        'operateTime' => 'OperateTime',
        'operateType' => 'OperateType',
        'period' => 'Period',
        'reason' => 'Reason',
        'resourceInfo' => 'ResourceInfo',
        'targetAccount' => 'TargetAccount',
    ];

    public function validate()
    {
        if (null !== $this->account) {
            $this->account->validate();
        }
        if (null !== $this->period) {
            $this->period->validate();
        }
        if (null !== $this->resourceInfo) {
            $this->resourceInfo->validate();
        }
        if (null !== $this->targetAccount) {
            $this->targetAccount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = null !== $this->account ? $this->account->toArray($noStream) : $this->account;
        }

        if (null !== $this->authScope) {
            $res['AuthScope'] = $this->authScope;
        }

        if (null !== $this->operateId) {
            $res['OperateId'] = $this->operateId;
        }

        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }

        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }

        if (null !== $this->period) {
            $res['Period'] = null !== $this->period ? $this->period->toArray($noStream) : $this->period;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->resourceInfo) {
            $res['ResourceInfo'] = null !== $this->resourceInfo ? $this->resourceInfo->toArray($noStream) : $this->resourceInfo;
        }

        if (null !== $this->targetAccount) {
            $res['TargetAccount'] = null !== $this->targetAccount ? $this->targetAccount->toArray($noStream) : $this->targetAccount;
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
        if (isset($map['Account'])) {
            $model->account = account::fromMap($map['Account']);
        }

        if (isset($map['AuthScope'])) {
            $model->authScope = $map['AuthScope'];
        }

        if (isset($map['OperateId'])) {
            $model->operateId = $map['OperateId'];
        }

        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }

        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }

        if (isset($map['Period'])) {
            $model->period = period::fromMap($map['Period']);
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['ResourceInfo'])) {
            $model->resourceInfo = resourceInfo::fromMap($map['ResourceInfo']);
        }

        if (isset($map['TargetAccount'])) {
            $model->targetAccount = targetAccount::fromMap($map['TargetAccount']);
        }

        return $model;
    }
}
