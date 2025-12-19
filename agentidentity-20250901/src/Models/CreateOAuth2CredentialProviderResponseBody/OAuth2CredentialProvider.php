<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateOAuth2CredentialProviderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\OAuth2ProviderConfig;

class OAuth2CredentialProvider extends Model
{
    /**
     * @var string
     */
    public $callbackURL;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $credentialProviderArn;

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
     * @var OAuth2ProviderConfig
     */
    public $OAuth2ProviderConfig;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'callbackURL' => 'CallbackURL',
        'createTime' => 'CreateTime',
        'credentialProviderArn' => 'CredentialProviderArn',
        'credentialProviderVendor' => 'CredentialProviderVendor',
        'description' => 'Description',
        'OAuth2CredentialProviderName' => 'OAuth2CredentialProviderName',
        'OAuth2ProviderConfig' => 'OAuth2ProviderConfig',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->OAuth2ProviderConfig) {
            $this->OAuth2ProviderConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackURL) {
            $res['CallbackURL'] = $this->callbackURL;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->credentialProviderArn) {
            $res['CredentialProviderArn'] = $this->credentialProviderArn;
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

        if (null !== $this->OAuth2ProviderConfig) {
            $res['OAuth2ProviderConfig'] = null !== $this->OAuth2ProviderConfig ? $this->OAuth2ProviderConfig->toArray($noStream) : $this->OAuth2ProviderConfig;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CredentialProviderArn'])) {
            $model->credentialProviderArn = $map['CredentialProviderArn'];
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
            $model->OAuth2ProviderConfig = OAuth2ProviderConfig::fromMap($map['OAuth2ProviderConfig']);
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
