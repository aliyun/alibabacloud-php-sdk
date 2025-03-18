<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyAssetScopeRequest;

use AlibabaCloud\Tea\Model;

class hostGroups extends Model
{
    /**
     * @description The asset accounts to which the control policy applies.
     *
     * > This parameter is required if AccountScopeType is set to AccountName.
     *
     * @var string[]
     */
    public $accountNames;

    /**
     * @description The scope of asset accounts to which the control policy applies. Valid values:
     *
     * **All**: The control policy applies to all accounts in the asset group.
     * **AccountName**: The control policy applies to specified accounts in the asset group.
     *
     * @example All
     *
     * @var string
     */
    public $accountScopeType;

    /**
     * @description The asset group ID.
     *
     * @example 86
     *
     * @var string
     */
    public $hostGroupId;
    protected $_name = [
        'accountNames' => 'AccountNames',
        'accountScopeType' => 'AccountScopeType',
        'hostGroupId' => 'HostGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountNames) {
            $res['AccountNames'] = $this->accountNames;
        }
        if (null !== $this->accountScopeType) {
            $res['AccountScopeType'] = $this->accountScopeType;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNames'])) {
            if (!empty($map['AccountNames'])) {
                $model->accountNames = $map['AccountNames'];
            }
        }
        if (isset($map['AccountScopeType'])) {
            $model->accountScopeType = $map['AccountScopeType'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }

        return $model;
    }
}
