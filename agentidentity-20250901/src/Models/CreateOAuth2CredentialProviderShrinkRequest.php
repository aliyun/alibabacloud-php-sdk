<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class CreateOAuth2CredentialProviderShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $callbackURL;

    /**
     * @var string
     */
    public $credentialProviderVendor;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $OAuth2CredentialProviderName;

    /**
     * @var string
     */
    public $OAuth2ProviderConfigShrink;
    protected $_name = [
        'callbackURL' => 'CallbackURL',
        'credentialProviderVendor' => 'CredentialProviderVendor',
        'description' => 'Description',
        'OAuth2CredentialProviderName' => 'OAuth2CredentialProviderName',
        'OAuth2ProviderConfigShrink' => 'OAuth2ProviderConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackURL) {
            $res['CallbackURL'] = $this->callbackURL;
        }

        if (null !== $this->credentialProviderVendor) {
            $res['CredentialProviderVendor'] = $this->credentialProviderVendor;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->OAuth2CredentialProviderName) {
            $res['OAuth2CredentialProviderName'] = $this->OAuth2CredentialProviderName;
        }

        if (null !== $this->OAuth2ProviderConfigShrink) {
            $res['OAuth2ProviderConfig'] = $this->OAuth2ProviderConfigShrink;
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
        if (isset($map['CallbackURL'])) {
            $model->callbackURL = $map['CallbackURL'];
        }

        if (isset($map['CredentialProviderVendor'])) {
            $model->credentialProviderVendor = $map['CredentialProviderVendor'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['OAuth2CredentialProviderName'])) {
            $model->OAuth2CredentialProviderName = $map['OAuth2CredentialProviderName'];
        }

        if (isset($map['OAuth2ProviderConfig'])) {
            $model->OAuth2ProviderConfigShrink = $map['OAuth2ProviderConfig'];
        }

        return $model;
    }
}
