<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetIdentityProviderResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $eventSubscriptionCallbackUrl;

    /**
     * @var string
     */
    public $identityProviderType;

    /**
     * @var string[]
     */
    public $idpMetadata;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $loginCallbackUrl;

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
        'eventSubscriptionCallbackUrl' => 'EventSubscriptionCallbackUrl',
        'identityProviderType' => 'IdentityProviderType',
        'idpMetadata' => 'IdpMetadata',
        'instanceId' => 'InstanceId',
        'loginCallbackUrl' => 'LoginCallbackUrl',
        'loginEnabled' => 'LoginEnabled',
        'status' => 'Status',
        'syncEnabled' => 'SyncEnabled',
    ];

    public function validate()
    {
        if (\is_array($this->idpMetadata)) {
            Model::validateArray($this->idpMetadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventSubscriptionCallbackUrl) {
            $res['EventSubscriptionCallbackUrl'] = $this->eventSubscriptionCallbackUrl;
        }

        if (null !== $this->identityProviderType) {
            $res['IdentityProviderType'] = $this->identityProviderType;
        }

        if (null !== $this->idpMetadata) {
            if (\is_array($this->idpMetadata)) {
                $res['IdpMetadata'] = [];
                foreach ($this->idpMetadata as $key1 => $value1) {
                    $res['IdpMetadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->loginCallbackUrl) {
            $res['LoginCallbackUrl'] = $this->loginCallbackUrl;
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
        if (isset($map['EventSubscriptionCallbackUrl'])) {
            $model->eventSubscriptionCallbackUrl = $map['EventSubscriptionCallbackUrl'];
        }

        if (isset($map['IdentityProviderType'])) {
            $model->identityProviderType = $map['IdentityProviderType'];
        }

        if (isset($map['IdpMetadata'])) {
            if (!empty($map['IdpMetadata'])) {
                $model->idpMetadata = [];
                foreach ($map['IdpMetadata'] as $key1 => $value1) {
                    $model->idpMetadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LoginCallbackUrl'])) {
            $model->loginCallbackUrl = $map['LoginCallbackUrl'];
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
