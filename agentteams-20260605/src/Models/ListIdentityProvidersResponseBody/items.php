<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListIdentityProvidersResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $identityProviderType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $loginEnabled;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $syncEnabled;
    protected $_name = [
        'identityProviderType' => 'IdentityProviderType',
        'instanceId' => 'InstanceId',
        'loginEnabled' => 'LoginEnabled',
        'status' => 'Status',
        'syncEnabled' => 'SyncEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identityProviderType) {
            $res['IdentityProviderType'] = $this->identityProviderType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->loginEnabled) {
            $res['LoginEnabled'] = $this->loginEnabled;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->syncEnabled) {
            $res['SyncEnabled'] = $this->syncEnabled;
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
        if (isset($map['IdentityProviderType'])) {
            $model->identityProviderType = $map['IdentityProviderType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LoginEnabled'])) {
            $model->loginEnabled = $map['LoginEnabled'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SyncEnabled'])) {
            $model->syncEnabled = $map['SyncEnabled'];
        }

        return $model;
    }
}
