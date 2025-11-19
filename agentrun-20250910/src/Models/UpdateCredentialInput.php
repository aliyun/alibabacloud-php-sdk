<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class UpdateCredentialInput extends Model
{
    /**
     * @var CredentialPublicConfig
     */
    public $credentialPublicConfig;

    /**
     * @var string
     */
    public $credentialSecret;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'credentialPublicConfig' => 'credentialPublicConfig',
        'credentialSecret' => 'credentialSecret',
        'description' => 'description',
        'enabled' => 'enabled',
    ];

    public function validate()
    {
        if (null !== $this->credentialPublicConfig) {
            $this->credentialPublicConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialPublicConfig) {
            $res['credentialPublicConfig'] = null !== $this->credentialPublicConfig ? $this->credentialPublicConfig->toArray($noStream) : $this->credentialPublicConfig;
        }

        if (null !== $this->credentialSecret) {
            $res['credentialSecret'] = $this->credentialSecret;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (isset($map['credentialPublicConfig'])) {
            $model->credentialPublicConfig = CredentialPublicConfig::fromMap($map['credentialPublicConfig']);
        }

        if (isset($map['credentialSecret'])) {
            $model->credentialSecret = $map['credentialSecret'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        return $model;
    }
}
