<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketOidcConfig\authCodeConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketOidcConfig\identityMapping;

class HiMarketOidcConfig extends Model
{
    /**
     * @var authCodeConfig
     */
    public $authCodeConfig;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $grantType;

    /**
     * @var identityMapping
     */
    public $identityMapping;

    /**
     * @var string
     */
    public $logoUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $provider;
    protected $_name = [
        'authCodeConfig' => 'authCodeConfig',
        'enabled' => 'enabled',
        'grantType' => 'grantType',
        'identityMapping' => 'identityMapping',
        'logoUrl' => 'logoUrl',
        'name' => 'name',
        'provider' => 'provider',
    ];

    public function validate()
    {
        if (null !== $this->authCodeConfig) {
            $this->authCodeConfig->validate();
        }
        if (null !== $this->identityMapping) {
            $this->identityMapping->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authCodeConfig) {
            $res['authCodeConfig'] = null !== $this->authCodeConfig ? $this->authCodeConfig->toArray($noStream) : $this->authCodeConfig;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->grantType) {
            $res['grantType'] = $this->grantType;
        }

        if (null !== $this->identityMapping) {
            $res['identityMapping'] = null !== $this->identityMapping ? $this->identityMapping->toArray($noStream) : $this->identityMapping;
        }

        if (null !== $this->logoUrl) {
            $res['logoUrl'] = $this->logoUrl;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
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
        if (isset($map['authCodeConfig'])) {
            $model->authCodeConfig = authCodeConfig::fromMap($map['authCodeConfig']);
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['grantType'])) {
            $model->grantType = $map['grantType'];
        }

        if (isset($map['identityMapping'])) {
            $model->identityMapping = identityMapping::fromMap($map['identityMapping']);
        }

        if (isset($map['logoUrl'])) {
            $model->logoUrl = $map['logoUrl'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        return $model;
    }
}
