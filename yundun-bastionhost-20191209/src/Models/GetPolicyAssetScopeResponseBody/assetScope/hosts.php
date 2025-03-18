<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyAssetScopeResponseBody\assetScope;

use AlibabaCloud\Tea\Model;

class hosts extends Model
{
    /**
     * @description The scope of host accounts to which the control policy applies. Valid values:
     *
     *   **All**: The control policy applies to all accounts of the host.
     *   **AccountId**: The control policy applies to specified accounts of the host.
     *
     * @example All
     *
     * @var string
     */
    public $accountScopeType;

    /**
     * @description The host accounts to which the control policy applies.
     *
     * @var string[]
     */
    public $hostAccountIds;

    /**
     * @description The host ID.
     *
     * @example 1
     *
     * @var string
     */
    public $hostId;
    protected $_name = [
        'accountScopeType' => 'AccountScopeType',
        'hostAccountIds' => 'HostAccountIds',
        'hostId' => 'HostId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountScopeType) {
            $res['AccountScopeType'] = $this->accountScopeType;
        }
        if (null !== $this->hostAccountIds) {
            $res['HostAccountIds'] = $this->hostAccountIds;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hosts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountScopeType'])) {
            $model->accountScopeType = $map['AccountScopeType'];
        }
        if (isset($map['HostAccountIds'])) {
            if (!empty($map['HostAccountIds'])) {
                $model->hostAccountIds = $map['HostAccountIds'];
            }
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }

        return $model;
    }
}
