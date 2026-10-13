<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateMcpTemplateConfigRequest\body\deploymentConfig;

use AlibabaCloud\Dara\Model;

class agentIdentityConfiguration extends Model
{
    /**
     * @var bool
     */
    public $authorizationEnabled;

    /**
     * @var string
     */
    public $credentialProviderArn;

    /**
     * @var string
     */
    public $credentialProviderType;

    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'authorizationEnabled' => 'authorizationEnabled',
        'credentialProviderArn' => 'credentialProviderArn',
        'credentialProviderType' => 'credentialProviderType',
        'enabled' => 'enabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationEnabled) {
            $res['authorizationEnabled'] = $this->authorizationEnabled;
        }

        if (null !== $this->credentialProviderArn) {
            $res['credentialProviderArn'] = $this->credentialProviderArn;
        }

        if (null !== $this->credentialProviderType) {
            $res['credentialProviderType'] = $this->credentialProviderType;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
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
        if (isset($map['authorizationEnabled'])) {
            $model->authorizationEnabled = $map['authorizationEnabled'];
        }

        if (isset($map['credentialProviderArn'])) {
            $model->credentialProviderArn = $map['credentialProviderArn'];
        }

        if (isset($map['credentialProviderType'])) {
            $model->credentialProviderType = $map['credentialProviderType'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        return $model;
    }
}
