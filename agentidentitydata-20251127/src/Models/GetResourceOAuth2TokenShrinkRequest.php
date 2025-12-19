<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentityData\V20251127\Models;

use AlibabaCloud\Dara\Model;

class GetResourceOAuth2TokenShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $customParametersShrink;

    /**
     * @var string
     */
    public $customState;

    /**
     * @var bool
     */
    public $forceAuthentication;

    /**
     * @var string
     */
    public $OAuth2Flow;

    /**
     * @var string
     */
    public $resourceCredentialProviderName;

    /**
     * @var string
     */
    public $resourceOAuth2ReturnURL;

    /**
     * @var string
     */
    public $scopesShrink;

    /**
     * @var string
     */
    public $sessionURI;

    /**
     * @var string
     */
    public $workloadAccessToken;
    protected $_name = [
        'customParametersShrink' => 'CustomParameters',
        'customState' => 'CustomState',
        'forceAuthentication' => 'ForceAuthentication',
        'OAuth2Flow' => 'OAuth2Flow',
        'resourceCredentialProviderName' => 'ResourceCredentialProviderName',
        'resourceOAuth2ReturnURL' => 'ResourceOAuth2ReturnURL',
        'scopesShrink' => 'Scopes',
        'sessionURI' => 'SessionURI',
        'workloadAccessToken' => 'WorkloadAccessToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customParametersShrink) {
            $res['CustomParameters'] = $this->customParametersShrink;
        }

        if (null !== $this->customState) {
            $res['CustomState'] = $this->customState;
        }

        if (null !== $this->forceAuthentication) {
            $res['ForceAuthentication'] = $this->forceAuthentication;
        }

        if (null !== $this->OAuth2Flow) {
            $res['OAuth2Flow'] = $this->OAuth2Flow;
        }

        if (null !== $this->resourceCredentialProviderName) {
            $res['ResourceCredentialProviderName'] = $this->resourceCredentialProviderName;
        }

        if (null !== $this->resourceOAuth2ReturnURL) {
            $res['ResourceOAuth2ReturnURL'] = $this->resourceOAuth2ReturnURL;
        }

        if (null !== $this->scopesShrink) {
            $res['Scopes'] = $this->scopesShrink;
        }

        if (null !== $this->sessionURI) {
            $res['SessionURI'] = $this->sessionURI;
        }

        if (null !== $this->workloadAccessToken) {
            $res['WorkloadAccessToken'] = $this->workloadAccessToken;
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
        if (isset($map['CustomParameters'])) {
            $model->customParametersShrink = $map['CustomParameters'];
        }

        if (isset($map['CustomState'])) {
            $model->customState = $map['CustomState'];
        }

        if (isset($map['ForceAuthentication'])) {
            $model->forceAuthentication = $map['ForceAuthentication'];
        }

        if (isset($map['OAuth2Flow'])) {
            $model->OAuth2Flow = $map['OAuth2Flow'];
        }

        if (isset($map['ResourceCredentialProviderName'])) {
            $model->resourceCredentialProviderName = $map['ResourceCredentialProviderName'];
        }

        if (isset($map['ResourceOAuth2ReturnURL'])) {
            $model->resourceOAuth2ReturnURL = $map['ResourceOAuth2ReturnURL'];
        }

        if (isset($map['Scopes'])) {
            $model->scopesShrink = $map['Scopes'];
        }

        if (isset($map['SessionURI'])) {
            $model->sessionURI = $map['SessionURI'];
        }

        if (isset($map['WorkloadAccessToken'])) {
            $model->workloadAccessToken = $map['WorkloadAccessToken'];
        }

        return $model;
    }
}
