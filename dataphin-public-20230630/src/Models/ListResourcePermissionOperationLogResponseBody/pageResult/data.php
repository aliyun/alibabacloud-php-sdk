<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogResponseBody\pageResult;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogResponseBody\pageResult\data\account;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogResponseBody\pageResult\data\period;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogResponseBody\pageResult\data\resourceInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogResponseBody\pageResult\data\targetAccount;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var account
     */
    public $account;

    /**
     * @example selectTable
     *
     * @var string
     */
    public $authScope;

    /**
     * @example 123133
     *
     * @var int
     */
    public $operateId;

    /**
     * @example 1710012121000
     *
     * @var int
     */
    public $operateTime;

    /**
     * @example APPLY
     *
     * @var string
     */
    public $operateType;

    /**
     * @var period
     */
    public $period;

    /**
     * @example xx测试
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = null !== $this->account ? $this->account->toMap() : null;
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
            $res['Period'] = null !== $this->period ? $this->period->toMap() : null;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->resourceInfo) {
            $res['ResourceInfo'] = null !== $this->resourceInfo ? $this->resourceInfo->toMap() : null;
        }
        if (null !== $this->targetAccount) {
            $res['TargetAccount'] = null !== $this->targetAccount ? $this->targetAccount->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
