<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponseBody\pageResult;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponseBody\pageResult\data\period;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponseBody\pageResult\data\permissionPeriodList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponseBody\pageResult\data\resourceInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponseBody\pageResult\data\targetAccount;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example selectTable
     *
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
     * @example 12123111
     *
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
        'authScope'            => 'AuthScope',
        'period'               => 'Period',
        'permissionPeriodList' => 'PermissionPeriodList',
        'recordId'             => 'RecordId',
        'resourceInfo'         => 'ResourceInfo',
        'targetAccount'        => 'TargetAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authScope) {
            $res['AuthScope'] = $this->authScope;
        }
        if (null !== $this->period) {
            $res['Period'] = null !== $this->period ? $this->period->toMap() : null;
        }
        if (null !== $this->permissionPeriodList) {
            $res['PermissionPeriodList'] = [];
            if (null !== $this->permissionPeriodList && \is_array($this->permissionPeriodList)) {
                $n = 0;
                foreach ($this->permissionPeriodList as $item) {
                    $res['PermissionPeriodList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
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
        if (isset($map['AuthScope'])) {
            $model->authScope = $map['AuthScope'];
        }
        if (isset($map['Period'])) {
            $model->period = period::fromMap($map['Period']);
        }
        if (isset($map['PermissionPeriodList'])) {
            if (!empty($map['PermissionPeriodList'])) {
                $model->permissionPeriodList = [];
                $n                           = 0;
                foreach ($map['PermissionPeriodList'] as $item) {
                    $model->permissionPeriodList[$n++] = null !== $item ? permissionPeriodList::fromMap($item) : $item;
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
