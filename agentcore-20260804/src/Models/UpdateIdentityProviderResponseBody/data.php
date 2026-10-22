<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderResponseBody\data\configuration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderResponseBody\data\saml;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderResponseBody\data\syncScope;

class data extends Model
{
    /**
     * @var configuration
     */
    public $configuration;

    /**
     * @var string
     */
    public $identityProviderType;

    /**
     * @var bool
     */
    public $loginEnabled;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var saml
     */
    public $saml;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $syncEnabled;

    /**
     * @var syncScope
     */
    public $syncScope;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'configuration' => 'configuration',
        'identityProviderType' => 'identityProviderType',
        'loginEnabled' => 'loginEnabled',
        'protocol' => 'protocol',
        'saml' => 'saml',
        'status' => 'status',
        'syncEnabled' => 'syncEnabled',
        'syncScope' => 'syncScope',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (null !== $this->configuration) {
            $this->configuration->validate();
        }
        if (null !== $this->saml) {
            $this->saml->validate();
        }
        if (null !== $this->syncScope) {
            $this->syncScope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['configuration'] = null !== $this->configuration ? $this->configuration->toArray($noStream) : $this->configuration;
        }

        if (null !== $this->identityProviderType) {
            $res['identityProviderType'] = $this->identityProviderType;
        }

        if (null !== $this->loginEnabled) {
            $res['loginEnabled'] = $this->loginEnabled;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->saml) {
            $res['saml'] = null !== $this->saml ? $this->saml->toArray($noStream) : $this->saml;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->syncEnabled) {
            $res['syncEnabled'] = $this->syncEnabled;
        }

        if (null !== $this->syncScope) {
            $res['syncScope'] = null !== $this->syncScope ? $this->syncScope->toArray($noStream) : $this->syncScope;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['configuration'])) {
            $model->configuration = configuration::fromMap($map['configuration']);
        }

        if (isset($map['identityProviderType'])) {
            $model->identityProviderType = $map['identityProviderType'];
        }

        if (isset($map['loginEnabled'])) {
            $model->loginEnabled = $map['loginEnabled'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['saml'])) {
            $model->saml = saml::fromMap($map['saml']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['syncEnabled'])) {
            $model->syncEnabled = $map['syncEnabled'];
        }

        if (isset($map['syncScope'])) {
            $model->syncScope = syncScope::fromMap($map['syncScope']);
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
