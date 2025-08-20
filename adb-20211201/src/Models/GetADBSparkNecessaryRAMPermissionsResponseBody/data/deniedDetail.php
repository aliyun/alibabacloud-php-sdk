<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetADBSparkNecessaryRAMPermissionsResponseBody\data;

use AlibabaCloud\Dara\Model;

class deniedDetail extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $noPermissionType;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $principalType;

    /**
     * @var string
     */
    public $resourceAuthTargetInfo;

    /**
     * @var string
     */
    public $resourceOwnerId;
    protected $_name = [
        'action' => 'Action',
        'noPermissionType' => 'NoPermissionType',
        'policyType' => 'PolicyType',
        'principalType' => 'PrincipalType',
        'resourceAuthTargetInfo' => 'ResourceAuthTargetInfo',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->noPermissionType) {
            $res['NoPermissionType'] = $this->noPermissionType;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
        }

        if (null !== $this->resourceAuthTargetInfo) {
            $res['ResourceAuthTargetInfo'] = $this->resourceAuthTargetInfo;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['NoPermissionType'])) {
            $model->noPermissionType = $map['NoPermissionType'];
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }

        if (isset($map['ResourceAuthTargetInfo'])) {
            $model->resourceAuthTargetInfo = $map['ResourceAuthTargetInfo'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
