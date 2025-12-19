<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class OAuth2ProviderConfig extends Model
{
    /**
     * @var CustomOAuth2ProviderConfig
     */
    public $customOAuth2ProviderConfig;

    /**
     * @var IncludedOAuth2ProviderConfig
     */
    public $includedOAuth2ProviderConfig;
    protected $_name = [
        'customOAuth2ProviderConfig' => 'CustomOAuth2ProviderConfig',
        'includedOAuth2ProviderConfig' => 'IncludedOAuth2ProviderConfig',
    ];

    public function validate()
    {
        if (null !== $this->customOAuth2ProviderConfig) {
            $this->customOAuth2ProviderConfig->validate();
        }
        if (null !== $this->includedOAuth2ProviderConfig) {
            $this->includedOAuth2ProviderConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customOAuth2ProviderConfig) {
            $res['CustomOAuth2ProviderConfig'] = null !== $this->customOAuth2ProviderConfig ? $this->customOAuth2ProviderConfig->toArray($noStream) : $this->customOAuth2ProviderConfig;
        }

        if (null !== $this->includedOAuth2ProviderConfig) {
            $res['IncludedOAuth2ProviderConfig'] = null !== $this->includedOAuth2ProviderConfig ? $this->includedOAuth2ProviderConfig->toArray($noStream) : $this->includedOAuth2ProviderConfig;
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
        if (isset($map['CustomOAuth2ProviderConfig'])) {
            $model->customOAuth2ProviderConfig = CustomOAuth2ProviderConfig::fromMap($map['CustomOAuth2ProviderConfig']);
        }

        if (isset($map['IncludedOAuth2ProviderConfig'])) {
            $model->includedOAuth2ProviderConfig = IncludedOAuth2ProviderConfig::fromMap($map['IncludedOAuth2ProviderConfig']);
        }

        return $model;
    }
}
