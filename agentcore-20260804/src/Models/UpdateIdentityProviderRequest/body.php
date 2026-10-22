<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderRequest\body\metadata;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderRequest\body\saml;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderRequest\body\syncScope;

class body extends Model
{
    /**
     * @var bool
     */
    public $loginEnabled;

    /**
     * @var metadata
     */
    public $metadata;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var saml
     */
    public $saml;

    /**
     * @var bool
     */
    public $syncEnabled;

    /**
     * @var syncScope
     */
    public $syncScope;
    protected $_name = [
        'loginEnabled' => 'loginEnabled',
        'metadata' => 'metadata',
        'protocol' => 'protocol',
        'saml' => 'saml',
        'syncEnabled' => 'syncEnabled',
        'syncScope' => 'syncScope',
    ];

    public function validate()
    {
        if (null !== $this->metadata) {
            $this->metadata->validate();
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
        if (null !== $this->loginEnabled) {
            $res['loginEnabled'] = $this->loginEnabled;
        }

        if (null !== $this->metadata) {
            $res['metadata'] = null !== $this->metadata ? $this->metadata->toArray($noStream) : $this->metadata;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->saml) {
            $res['saml'] = null !== $this->saml ? $this->saml->toArray($noStream) : $this->saml;
        }

        if (null !== $this->syncEnabled) {
            $res['syncEnabled'] = $this->syncEnabled;
        }

        if (null !== $this->syncScope) {
            $res['syncScope'] = null !== $this->syncScope ? $this->syncScope->toArray($noStream) : $this->syncScope;
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
        if (isset($map['loginEnabled'])) {
            $model->loginEnabled = $map['loginEnabled'];
        }

        if (isset($map['metadata'])) {
            $model->metadata = metadata::fromMap($map['metadata']);
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['saml'])) {
            $model->saml = saml::fromMap($map['saml']);
        }

        if (isset($map['syncEnabled'])) {
            $model->syncEnabled = $map['syncEnabled'];
        }

        if (isset($map['syncScope'])) {
            $model->syncScope = syncScope::fromMap($map['syncScope']);
        }

        return $model;
    }
}
