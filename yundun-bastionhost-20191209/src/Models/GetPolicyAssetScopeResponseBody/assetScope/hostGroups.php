<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyAssetScopeResponseBody\assetScope;

use AlibabaCloud\Tea\Model;

class hostGroups extends Model
{
    /**
     * @var string[]
     */
    public $accountNames;

    /**
     * @example All
     *
     * @var string
     */
    public $accountScopeType;

    /**
     * @example 4
     *
     * @var string
     */
    public $hostGroupId;
    protected $_name = [
        'accountNames'     => 'AccountNames',
        'accountScopeType' => 'AccountScopeType',
        'hostGroupId'      => 'HostGroupId',
    ];

    public function validate()
    {
    }

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
