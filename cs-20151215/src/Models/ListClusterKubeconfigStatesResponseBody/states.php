<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListClusterKubeconfigStatesResponseBody;

use AlibabaCloud\Tea\Model;

class states extends Model
{
    /**
     * @example tom
     *
     * @var string
     */
    public $accountDisplayName;

    /**
     * @example 22855*****************
     *
     * @var string
     */
    public $accountId;

    /**
     * @example tom
     *
     * @var string
     */
    public $accountName;

    /**
     * @example Active
     *
     * @var string
     */
    public $accountState;

    /**
     * @example RamUser
     *
     * @var string
     */
    public $accountType;

    /**
     * @example 2027-07-15T01:32:20Z
     *
     * @var string
     */
    public $certExpireTime;

    /**
     * @example Expired
     *
     * @var string
     */
    public $certState;

    /**
     * @example true
     *
     * @var bool
     */
    public $revokable;
    protected $_name = [
        'accountDisplayName' => 'account_display_name',
        'accountId'          => 'account_id',
        'accountName'        => 'account_name',
        'accountState'       => 'account_state',
        'accountType'        => 'account_type',
        'certExpireTime'     => 'cert_expire_time',
        'certState'          => 'cert_state',
        'revokable'          => 'revokable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountDisplayName) {
            $res['account_display_name'] = $this->accountDisplayName;
        }
        if (null !== $this->accountId) {
            $res['account_id'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['account_name'] = $this->accountName;
        }
        if (null !== $this->accountState) {
            $res['account_state'] = $this->accountState;
        }
        if (null !== $this->accountType) {
            $res['account_type'] = $this->accountType;
        }
        if (null !== $this->certExpireTime) {
            $res['cert_expire_time'] = $this->certExpireTime;
        }
        if (null !== $this->certState) {
            $res['cert_state'] = $this->certState;
        }
        if (null !== $this->revokable) {
            $res['revokable'] = $this->revokable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return states
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['account_display_name'])) {
            $model->accountDisplayName = $map['account_display_name'];
        }
        if (isset($map['account_id'])) {
            $model->accountId = $map['account_id'];
        }
        if (isset($map['account_name'])) {
            $model->accountName = $map['account_name'];
        }
        if (isset($map['account_state'])) {
            $model->accountState = $map['account_state'];
        }
        if (isset($map['account_type'])) {
            $model->accountType = $map['account_type'];
        }
        if (isset($map['cert_expire_time'])) {
            $model->certExpireTime = $map['cert_expire_time'];
        }
        if (isset($map['cert_state'])) {
            $model->certState = $map['cert_state'];
        }
        if (isset($map['revokable'])) {
            $model->revokable = $map['revokable'];
        }

        return $model;
    }
}
