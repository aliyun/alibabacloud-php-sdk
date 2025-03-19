<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class AiServiceConfig extends Model
{
    /**
     * @example https://dashscope.aliyun.com
     *
     * @var string
     */
    public $address;

    /**
     * @var string[]
     */
    public $apiKeys;

    /**
     * @var bool
     */
    public $enableHealthCheck;

    /**
     * @var string[]
     */
    public $protocols;

    /**
     * @example qwen
     *
     * @var string
     */
    public $provider;
    protected $_name = [
        'address' => 'address',
        'apiKeys' => 'apiKeys',
        'enableHealthCheck' => 'enableHealthCheck',
        'protocols' => 'protocols',
        'provider' => 'provider',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->apiKeys) {
            $res['apiKeys'] = $this->apiKeys;
        }
        if (null !== $this->enableHealthCheck) {
            $res['enableHealthCheck'] = $this->enableHealthCheck;
        }
        if (null !== $this->protocols) {
            $res['protocols'] = $this->protocols;
        }
        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AiServiceConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }
        if (isset($map['apiKeys'])) {
            if (!empty($map['apiKeys'])) {
                $model->apiKeys = $map['apiKeys'];
            }
        }
        if (isset($map['enableHealthCheck'])) {
            $model->enableHealthCheck = $map['enableHealthCheck'];
        }
        if (isset($map['protocols'])) {
            if (!empty($map['protocols'])) {
                $model->protocols = $map['protocols'];
            }
        }
        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        return $model;
    }
}
