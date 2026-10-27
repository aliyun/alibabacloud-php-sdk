<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\PrepareIdentityProviderSCIMResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\PrepareIdentityProviderSCIMResponseBody\data\configuration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\PrepareIdentityProviderSCIMResponseBody\data\credential;

class data extends Model
{
    /**
     * @var configuration
     */
    public $configuration;

    /**
     * @var credential
     */
    public $credential;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'configuration' => 'configuration',
        'credential' => 'credential',
        'token' => 'token',
    ];

    public function validate()
    {
        if (null !== $this->configuration) {
            $this->configuration->validate();
        }
        if (null !== $this->credential) {
            $this->credential->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['configuration'] = null !== $this->configuration ? $this->configuration->toArray($noStream) : $this->configuration;
        }

        if (null !== $this->credential) {
            $res['credential'] = null !== $this->credential ? $this->credential->toArray($noStream) : $this->credential;
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
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

        if (isset($map['credential'])) {
            $model->credential = credential::fromMap($map['credential']);
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
