<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class AiServiceConfig extends Model
{
    /**
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

    public function validate()
    {
        if (\is_array($this->apiKeys)) {
            Model::validateArray($this->apiKeys);
        }
        if (\is_array($this->protocols)) {
            Model::validateArray($this->protocols);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }

        if (null !== $this->apiKeys) {
            if (\is_array($this->apiKeys)) {
                $res['apiKeys'] = [];
                $n1 = 0;
                foreach ($this->apiKeys as $item1) {
                    $res['apiKeys'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->enableHealthCheck) {
            $res['enableHealthCheck'] = $this->enableHealthCheck;
        }

        if (null !== $this->protocols) {
            if (\is_array($this->protocols)) {
                $res['protocols'] = [];
                $n1 = 0;
                foreach ($this->protocols as $item1) {
                    $res['protocols'][$n1++] = $item1;
                }
            }
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
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }

        if (isset($map['apiKeys'])) {
            if (!empty($map['apiKeys'])) {
                $model->apiKeys = [];
                $n1 = 0;
                foreach ($map['apiKeys'] as $item1) {
                    $model->apiKeys[$n1++] = $item1;
                }
            }
        }

        if (isset($map['enableHealthCheck'])) {
            $model->enableHealthCheck = $map['enableHealthCheck'];
        }

        if (isset($map['protocols'])) {
            if (!empty($map['protocols'])) {
                $model->protocols = [];
                $n1 = 0;
                foreach ($map['protocols'] as $item1) {
                    $model->protocols[$n1++] = $item1;
                }
            }
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        return $model;
    }
}
