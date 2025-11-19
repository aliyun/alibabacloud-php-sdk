<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CredentialPublicConfig\remoteConfig;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\CredentialPublicConfig\users;

class CredentialPublicConfig extends Model
{
    /**
     * @var string[]
     */
    public $authConfig;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $headerKey;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var remoteConfig
     */
    public $remoteConfig;

    /**
     * @var users[]
     */
    public $users;
    protected $_name = [
        'authConfig' => 'authConfig',
        'authType' => 'authType',
        'headerKey' => 'headerKey',
        'provider' => 'provider',
        'remoteConfig' => 'remoteConfig',
        'users' => 'users',
    ];

    public function validate()
    {
        if (\is_array($this->authConfig)) {
            Model::validateArray($this->authConfig);
        }
        if (null !== $this->remoteConfig) {
            $this->remoteConfig->validate();
        }
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authConfig) {
            if (\is_array($this->authConfig)) {
                $res['authConfig'] = [];
                foreach ($this->authConfig as $key1 => $value1) {
                    $res['authConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->authType) {
            $res['authType'] = $this->authType;
        }

        if (null !== $this->headerKey) {
            $res['headerKey'] = $this->headerKey;
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        if (null !== $this->remoteConfig) {
            $res['remoteConfig'] = null !== $this->remoteConfig ? $this->remoteConfig->toArray($noStream) : $this->remoteConfig;
        }

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['users'] = [];
                $n1 = 0;
                foreach ($this->users as $item1) {
                    $res['users'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['authConfig'])) {
            if (!empty($map['authConfig'])) {
                $model->authConfig = [];
                foreach ($map['authConfig'] as $key1 => $value1) {
                    $model->authConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }

        if (isset($map['headerKey'])) {
            $model->headerKey = $map['headerKey'];
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        if (isset($map['remoteConfig'])) {
            $model->remoteConfig = remoteConfig::fromMap($map['remoteConfig']);
        }

        if (isset($map['users'])) {
            if (!empty($map['users'])) {
                $model->users = [];
                $n1 = 0;
                foreach ($map['users'] as $item1) {
                    $model->users[$n1] = users::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
