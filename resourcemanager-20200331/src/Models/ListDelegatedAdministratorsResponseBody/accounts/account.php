<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListDelegatedAdministratorsResponseBody\accounts;

use AlibabaCloud\Dara\Model;

class account extends Model
{
    /**
     * @var string
     */
    public $accountId;
    /**
     * @var string
     */
    public $delegationEnabledTime;
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
    protected $_name = [
        'accountId'             => 'AccountId',
        'delegationEnabledTime' => 'DelegationEnabledTime',
        'displayName'           => 'DisplayName',
        'joinMethod'            => 'JoinMethod',
        'servicePrincipal'      => 'ServicePrincipal',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->delegationEnabledTime) {
            $res['DelegationEnabledTime'] = $this->delegationEnabledTime;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['DelegationEnabledTime'])) {
            $model->delegationEnabledTime = $map['DelegationEnabledTime'];
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

        return $model;
    }
}
