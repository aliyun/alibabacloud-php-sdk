<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\AiCacheConfig\embeddingConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\AiCacheConfig\vectorConfig;

class AiCacheConfig extends Model
{
    /**
     * @var string
     */
    public $cacheKeyStrategy;

    /**
     * @var string
     */
    public $cacheMode;

    /**
     * @var int
     */
    public $cacheTTL;

    /**
     * @var embeddingConfig
     */
    public $embeddingConfig;

    /**
     * @var AiPluginStatus
     */
    public $pluginStatus;

    /**
     * @var AiPolicyRedisConfig
     */
    public $redisConfig;

    /**
     * @var vectorConfig
     */
    public $vectorConfig;
    protected $_name = [
        'cacheKeyStrategy' => 'cacheKeyStrategy',
        'cacheMode' => 'cacheMode',
        'cacheTTL' => 'cacheTTL',
        'embeddingConfig' => 'embeddingConfig',
        'pluginStatus' => 'pluginStatus',
        'redisConfig' => 'redisConfig',
        'vectorConfig' => 'vectorConfig',
    ];

    public function validate()
    {
        if (null !== $this->embeddingConfig) {
            $this->embeddingConfig->validate();
        }
        if (null !== $this->pluginStatus) {
            $this->pluginStatus->validate();
        }
        if (null !== $this->redisConfig) {
            $this->redisConfig->validate();
        }
        if (null !== $this->vectorConfig) {
            $this->vectorConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheKeyStrategy) {
            $res['cacheKeyStrategy'] = $this->cacheKeyStrategy;
        }

        if (null !== $this->cacheMode) {
            $res['cacheMode'] = $this->cacheMode;
        }

        if (null !== $this->cacheTTL) {
            $res['cacheTTL'] = $this->cacheTTL;
        }

        if (null !== $this->embeddingConfig) {
            $res['embeddingConfig'] = null !== $this->embeddingConfig ? $this->embeddingConfig->toArray($noStream) : $this->embeddingConfig;
        }

        if (null !== $this->pluginStatus) {
            $res['pluginStatus'] = null !== $this->pluginStatus ? $this->pluginStatus->toArray($noStream) : $this->pluginStatus;
        }

        if (null !== $this->redisConfig) {
            $res['redisConfig'] = null !== $this->redisConfig ? $this->redisConfig->toArray($noStream) : $this->redisConfig;
        }

        if (null !== $this->vectorConfig) {
            $res['vectorConfig'] = null !== $this->vectorConfig ? $this->vectorConfig->toArray($noStream) : $this->vectorConfig;
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
        if (isset($map['cacheKeyStrategy'])) {
            $model->cacheKeyStrategy = $map['cacheKeyStrategy'];
        }

        if (isset($map['cacheMode'])) {
            $model->cacheMode = $map['cacheMode'];
        }

        if (isset($map['cacheTTL'])) {
            $model->cacheTTL = $map['cacheTTL'];
        }

        if (isset($map['embeddingConfig'])) {
            $model->embeddingConfig = embeddingConfig::fromMap($map['embeddingConfig']);
        }

        if (isset($map['pluginStatus'])) {
            $model->pluginStatus = AiPluginStatus::fromMap($map['pluginStatus']);
        }

        if (isset($map['redisConfig'])) {
            $model->redisConfig = AiPolicyRedisConfig::fromMap($map['redisConfig']);
        }

        if (isset($map['vectorConfig'])) {
            $model->vectorConfig = vectorConfig::fromMap($map['vectorConfig']);
        }

        return $model;
    }
}
