<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateCredentialProviderRequest\credentialProviderConfig;

class CreateCredentialProviderRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var credentialProviderConfig
     */
    public $credentialProviderConfig;

    /**
     * @var string
     */
    public $credentialProviderIdentifier;

    /**
     * @var string
     */
    public $credentialProviderName;

    /**
     * @var string
     */
    public $credentialProviderType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'credentialProviderConfig' => 'CredentialProviderConfig',
        'credentialProviderIdentifier' => 'CredentialProviderIdentifier',
        'credentialProviderName' => 'CredentialProviderName',
        'credentialProviderType' => 'CredentialProviderType',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (null !== $this->credentialProviderConfig) {
            $this->credentialProviderConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->credentialProviderConfig) {
            $res['CredentialProviderConfig'] = null !== $this->credentialProviderConfig ? $this->credentialProviderConfig->toArray($noStream) : $this->credentialProviderConfig;
        }

        if (null !== $this->credentialProviderIdentifier) {
            $res['CredentialProviderIdentifier'] = $this->credentialProviderIdentifier;
        }

        if (null !== $this->credentialProviderName) {
            $res['CredentialProviderName'] = $this->credentialProviderName;
        }

        if (null !== $this->credentialProviderType) {
            $res['CredentialProviderType'] = $this->credentialProviderType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (isset($map['CredentialProviderConfig'])) {
            $model->credentialProviderConfig = credentialProviderConfig::fromMap($map['CredentialProviderConfig']);
        }

        if (isset($map['CredentialProviderIdentifier'])) {
            $model->credentialProviderIdentifier = $map['CredentialProviderIdentifier'];
        }

        if (isset($map['CredentialProviderName'])) {
            $model->credentialProviderName = $map['CredentialProviderName'];
        }

        if (isset($map['CredentialProviderType'])) {
            $model->credentialProviderType = $map['CredentialProviderType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
