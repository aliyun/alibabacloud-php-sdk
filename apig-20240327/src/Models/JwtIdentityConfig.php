<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\JwtIdentityConfig\claimsToHeadersConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\JwtIdentityConfig\jwtPayloadConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\JwtIdentityConfig\jwtTokenConfig;

class JwtIdentityConfig extends Model
{
    /**
     * @var claimsToHeadersConfigs[]
     */
    public $claimsToHeadersConfigs;

    /**
     * @var string
     */
    public $jwks;

    /**
     * @var jwtPayloadConfig
     */
    public $jwtPayloadConfig;

    /**
     * @var jwtTokenConfig
     */
    public $jwtTokenConfig;

    /**
     * @var string
     */
    public $remoteJwks;

    /**
     * @var string
     */
    public $secretType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'claimsToHeadersConfigs' => 'claimsToHeadersConfigs',
        'jwks' => 'jwks',
        'jwtPayloadConfig' => 'jwtPayloadConfig',
        'jwtTokenConfig' => 'jwtTokenConfig',
        'remoteJwks' => 'remoteJwks',
        'secretType' => 'secretType',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->claimsToHeadersConfigs)) {
            Model::validateArray($this->claimsToHeadersConfigs);
        }
        if (null !== $this->jwtPayloadConfig) {
            $this->jwtPayloadConfig->validate();
        }
        if (null !== $this->jwtTokenConfig) {
            $this->jwtTokenConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->claimsToHeadersConfigs) {
            if (\is_array($this->claimsToHeadersConfigs)) {
                $res['claimsToHeadersConfigs'] = [];
                $n1 = 0;
                foreach ($this->claimsToHeadersConfigs as $item1) {
                    $res['claimsToHeadersConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jwks) {
            $res['jwks'] = $this->jwks;
        }

        if (null !== $this->jwtPayloadConfig) {
            $res['jwtPayloadConfig'] = null !== $this->jwtPayloadConfig ? $this->jwtPayloadConfig->toArray($noStream) : $this->jwtPayloadConfig;
        }

        if (null !== $this->jwtTokenConfig) {
            $res['jwtTokenConfig'] = null !== $this->jwtTokenConfig ? $this->jwtTokenConfig->toArray($noStream) : $this->jwtTokenConfig;
        }

        if (null !== $this->remoteJwks) {
            $res['remoteJwks'] = $this->remoteJwks;
        }

        if (null !== $this->secretType) {
            $res['secretType'] = $this->secretType;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['claimsToHeadersConfigs'])) {
            if (!empty($map['claimsToHeadersConfigs'])) {
                $model->claimsToHeadersConfigs = [];
                $n1 = 0;
                foreach ($map['claimsToHeadersConfigs'] as $item1) {
                    $model->claimsToHeadersConfigs[$n1] = claimsToHeadersConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['jwks'])) {
            $model->jwks = $map['jwks'];
        }

        if (isset($map['jwtPayloadConfig'])) {
            $model->jwtPayloadConfig = jwtPayloadConfig::fromMap($map['jwtPayloadConfig']);
        }

        if (isset($map['jwtTokenConfig'])) {
            $model->jwtTokenConfig = jwtTokenConfig::fromMap($map['jwtTokenConfig']);
        }

        if (isset($map['remoteJwks'])) {
            $model->remoteJwks = $map['remoteJwks'];
        }

        if (isset($map['secretType'])) {
            $model->secretType = $map['secretType'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
