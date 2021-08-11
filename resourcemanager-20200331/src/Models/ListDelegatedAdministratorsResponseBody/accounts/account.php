<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListDelegatedAdministratorsResponseBody\accounts;

use AlibabaCloud\Tea\Model;

class account extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $joinMethod;

    /**
     * @var string
     */
    public $servicePrincipal;

    /**
     * @var string
     */
    public $delegationEnabledTime;
    protected $_name = [
        'accountId'             => 'AccountId',
        'displayName'           => 'DisplayName',
        'joinMethod'            => 'JoinMethod',
        'servicePrincipal'      => 'ServicePrincipal',
        'delegationEnabledTime' => 'DelegationEnabledTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->joinMethod) {
            $res['JoinMethod'] = $this->joinMethod;
        }
        if (null !== $this->servicePrincipal) {
            $res['ServicePrincipal'] = $this->servicePrincipal;
        }
        if (null !== $this->delegationEnabledTime) {
            $res['DelegationEnabledTime'] = $this->delegationEnabledTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return account
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['JoinMethod'])) {
            $model->joinMethod = $map['JoinMethod'];
        }
        if (isset($map['ServicePrincipal'])) {
            $model->servicePrincipal = $map['ServicePrincipal'];
        }
        if (isset($map['DelegationEnabledTime'])) {
            $model->delegationEnabledTime = $map['DelegationEnabledTime'];
        }

        return $model;
    }
}
