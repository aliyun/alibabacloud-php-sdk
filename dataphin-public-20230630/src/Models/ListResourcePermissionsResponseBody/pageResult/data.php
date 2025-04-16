<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponseBody\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponseBody\pageResult\data\period;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponseBody\pageResult\data\permissionPeriodList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponseBody\pageResult\data\resourceInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponseBody\pageResult\data\targetAccount;

class data extends Model
{
    /**
     * @var string
     */
    public $authScope;

    /**
     * @var period
     */
    public $period;

    /**
     * @var permissionPeriodList[]
     */
    public $permissionPeriodList;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var resourceInfo
     */
    public $resourceInfo;

    /**
     * @var targetAccount
     */
    public $targetAccount;
    protected $_name = [
        'authScope' => 'AuthScope',
        'period' => 'Period',
        'permissionPeriodList' => 'PermissionPeriodList',
        'recordId' => 'RecordId',
        'resourceInfo' => 'ResourceInfo',
        'targetAccount' => 'TargetAccount',
    ];

    public function validate()
    {
        if (null !== $this->period) {
            $this->period->validate();
        }
        if (\is_array($this->permissionPeriodList)) {
            Model::validateArray($this->permissionPeriodList);
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
        if (null !== $this->authScope) {
            $res['AuthScope'] = $this->authScope;
        }

        if (null !== $this->period) {
            $res['Period'] = null !== $this->period ? $this->period->toArray($noStream) : $this->period;
        }

        if (null !== $this->permissionPeriodList) {
            if (\is_array($this->permissionPeriodList)) {
                $res['PermissionPeriodList'] = [];
                $n1 = 0;
                foreach ($this->permissionPeriodList as $item1) {
                    $res['PermissionPeriodList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
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
        if (isset($map['AuthScope'])) {
            $model->authScope = $map['AuthScope'];
        }

        if (isset($map['Period'])) {
            $model->period = period::fromMap($map['Period']);
        }

        if (isset($map['PermissionPeriodList'])) {
            if (!empty($map['PermissionPeriodList'])) {
                $model->permissionPeriodList = [];
                $n1 = 0;
                foreach ($map['PermissionPeriodList'] as $item1) {
                    $model->permissionPeriodList[$n1++] = permissionPeriodList::fromMap($item1);
                }
            }
        }

        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
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
