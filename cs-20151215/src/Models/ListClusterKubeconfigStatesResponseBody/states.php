<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListClusterKubeconfigStatesResponseBody;

use AlibabaCloud\Dara\Model;

class states extends Model
{
    /**
     * @var string
     */
    public $accountDisplayName;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $accountState;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $certExpireTime;

    /**
     * @var string
     */
    public $certState;

    /**
     * @var bool
     */
    public $revokable;
    protected $_name = [
        'accountDisplayName' => 'account_display_name',
        'accountId' => 'account_id',
        'accountName' => 'account_name',
        'accountState' => 'account_state',
        'accountType' => 'account_type',
        'certExpireTime' => 'cert_expire_time',
        'certState' => 'cert_state',
        'revokable' => 'revokable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
