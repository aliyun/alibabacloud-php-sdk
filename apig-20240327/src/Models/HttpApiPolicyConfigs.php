<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiCacheConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiFallbackConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiNetworkSearchConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiSecurityGuardConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiStatisticsConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiTokenRateLimitConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiToolSelectionConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\semanticRouterConfig;

class HttpApiPolicyConfigs extends Model
{
    /**
     * @var aiCacheConfig
     */
    public $aiCacheConfig;

    /**
     * @var aiFallbackConfig
     */
    public $aiFallbackConfig;

    /**
     * @var aiNetworkSearchConfig
     */
    public $aiNetworkSearchConfig;

    /**
     * @var aiSecurityGuardConfig
     */
    public $aiSecurityGuardConfig;

    /**
     * @var aiStatisticsConfig
     */
    public $aiStatisticsConfig;

    /**
     * @var aiTokenRateLimitConfig
     */
    public $aiTokenRateLimitConfig;

    /**
     * @var aiToolSelectionConfig
     */
    public $aiToolSelectionConfig;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var semanticRouterConfig
     */
    public $semanticRouterConfig;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aiCacheConfig' => 'aiCacheConfig',
        'aiFallbackConfig' => 'aiFallbackConfig',
        'aiNetworkSearchConfig' => 'aiNetworkSearchConfig',
        'aiSecurityGuardConfig' => 'aiSecurityGuardConfig',
        'aiStatisticsConfig' => 'aiStatisticsConfig',
        'aiTokenRateLimitConfig' => 'aiTokenRateLimitConfig',
        'aiToolSelectionConfig' => 'aiToolSelectionConfig',
        'enable' => 'enable',
        'semanticRouterConfig' => 'semanticRouterConfig',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->aiCacheConfig) {
            $this->aiCacheConfig->validate();
        }
        if (null !== $this->aiFallbackConfig) {
            $this->aiFallbackConfig->validate();
        }
        if (null !== $this->aiNetworkSearchConfig) {
            $this->aiNetworkSearchConfig->validate();
        }
        if (null !== $this->aiSecurityGuardConfig) {
            $this->aiSecurityGuardConfig->validate();
        }
        if (null !== $this->aiStatisticsConfig) {
            $this->aiStatisticsConfig->validate();
        }
        if (null !== $this->aiTokenRateLimitConfig) {
            $this->aiTokenRateLimitConfig->validate();
        }
        if (null !== $this->aiToolSelectionConfig) {
            $this->aiToolSelectionConfig->validate();
        }
        if (null !== $this->semanticRouterConfig) {
            $this->semanticRouterConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiCacheConfig) {
            $res['aiCacheConfig'] = null !== $this->aiCacheConfig ? $this->aiCacheConfig->toArray($noStream) : $this->aiCacheConfig;
        }

        if (null !== $this->aiFallbackConfig) {
            $res['aiFallbackConfig'] = null !== $this->aiFallbackConfig ? $this->aiFallbackConfig->toArray($noStream) : $this->aiFallbackConfig;
        }

        if (null !== $this->aiNetworkSearchConfig) {
            $res['aiNetworkSearchConfig'] = null !== $this->aiNetworkSearchConfig ? $this->aiNetworkSearchConfig->toArray($noStream) : $this->aiNetworkSearchConfig;
        }

        if (null !== $this->aiSecurityGuardConfig) {
            $res['aiSecurityGuardConfig'] = null !== $this->aiSecurityGuardConfig ? $this->aiSecurityGuardConfig->toArray($noStream) : $this->aiSecurityGuardConfig;
        }

        if (null !== $this->aiStatisticsConfig) {
            $res['aiStatisticsConfig'] = null !== $this->aiStatisticsConfig ? $this->aiStatisticsConfig->toArray($noStream) : $this->aiStatisticsConfig;
        }

        if (null !== $this->aiTokenRateLimitConfig) {
            $res['aiTokenRateLimitConfig'] = null !== $this->aiTokenRateLimitConfig ? $this->aiTokenRateLimitConfig->toArray($noStream) : $this->aiTokenRateLimitConfig;
        }

        if (null !== $this->aiToolSelectionConfig) {
            $res['aiToolSelectionConfig'] = null !== $this->aiToolSelectionConfig ? $this->aiToolSelectionConfig->toArray($noStream) : $this->aiToolSelectionConfig;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->semanticRouterConfig) {
            $res['semanticRouterConfig'] = null !== $this->semanticRouterConfig ? $this->semanticRouterConfig->toArray($noStream) : $this->semanticRouterConfig;
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
        if (isset($map['aiCacheConfig'])) {
            $model->aiCacheConfig = aiCacheConfig::fromMap($map['aiCacheConfig']);
        }

        if (isset($map['aiFallbackConfig'])) {
            $model->aiFallbackConfig = aiFallbackConfig::fromMap($map['aiFallbackConfig']);
        }

        if (isset($map['aiNetworkSearchConfig'])) {
            $model->aiNetworkSearchConfig = aiNetworkSearchConfig::fromMap($map['aiNetworkSearchConfig']);
        }

        if (isset($map['aiSecurityGuardConfig'])) {
            $model->aiSecurityGuardConfig = aiSecurityGuardConfig::fromMap($map['aiSecurityGuardConfig']);
        }

        if (isset($map['aiStatisticsConfig'])) {
            $model->aiStatisticsConfig = aiStatisticsConfig::fromMap($map['aiStatisticsConfig']);
        }

        if (isset($map['aiTokenRateLimitConfig'])) {
            $model->aiTokenRateLimitConfig = aiTokenRateLimitConfig::fromMap($map['aiTokenRateLimitConfig']);
        }

        if (isset($map['aiToolSelectionConfig'])) {
            $model->aiToolSelectionConfig = aiToolSelectionConfig::fromMap($map['aiToolSelectionConfig']);
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['semanticRouterConfig'])) {
            $model->semanticRouterConfig = semanticRouterConfig::fromMap($map['semanticRouterConfig']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
