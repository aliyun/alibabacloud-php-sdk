<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models;

use AlibabaCloud\Dara\Model;

class BindIdentityProviderRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $identityProviderType;

    /**
     * @var string
     */
    public $idpMetadata;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $loginEnabled;

    /**
     * @var bool
     */
    public $syncEnabled;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'identityProviderType' => 'IdentityProviderType',
        'idpMetadata' => 'IdpMetadata',
        'instanceId' => 'InstanceId',
        'loginEnabled' => 'LoginEnabled',
        'syncEnabled' => 'SyncEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->identityProviderType) {
            $res['IdentityProviderType'] = $this->identityProviderType;
        }

        if (null !== $this->idpMetadata) {
            $res['IdpMetadata'] = $this->idpMetadata;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->loginEnabled) {
            $res['LoginEnabled'] = $this->loginEnabled;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['IdentityProviderType'])) {
            $model->identityProviderType = $map['IdentityProviderType'];
        }

        if (isset($map['IdpMetadata'])) {
            $model->idpMetadata = $map['IdpMetadata'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LoginEnabled'])) {
            $model->loginEnabled = $map['LoginEnabled'];
        }

        if (isset($map['SyncEnabled'])) {
            $model->syncEnabled = $map['SyncEnabled'];
        }

        return $model;
    }
}
