<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\GetPatrolConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetPatrolConfigResponseBody\data\scopeConfig;

class data extends Model
{
    /**
     * @var int
     */
    public $configCreatedAt;

    /**
     * @var int
     */
    public $configUpdatedAt;

    /**
     * @var string
     */
    public $cron;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $nextPatrolAt;

    /**
     * @var scopeConfig
     */
    public $scopeConfig;

    /**
     * @var string
     */
    public $scopeType;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'configCreatedAt' => 'configCreatedAt',
        'configUpdatedAt' => 'configUpdatedAt',
        'cron' => 'cron',
        'enabled' => 'enabled',
        'namespace' => 'namespace',
        'nextPatrolAt' => 'nextPatrolAt',
        'scopeConfig' => 'scopeConfig',
        'scopeType' => 'scopeType',
        'timezone' => 'timezone',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->scopeConfig) {
            $this->scopeConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configCreatedAt) {
            $res['configCreatedAt'] = $this->configCreatedAt;
        }

        if (null !== $this->configUpdatedAt) {
            $res['configUpdatedAt'] = $this->configUpdatedAt;
        }

        if (null !== $this->cron) {
            $res['cron'] = $this->cron;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->nextPatrolAt) {
            $res['nextPatrolAt'] = $this->nextPatrolAt;
        }

        if (null !== $this->scopeConfig) {
            $res['scopeConfig'] = null !== $this->scopeConfig ? $this->scopeConfig->toArray($noStream) : $this->scopeConfig;
        }

        if (null !== $this->scopeType) {
            $res['scopeType'] = $this->scopeType;
        }

        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['configCreatedAt'])) {
            $model->configCreatedAt = $map['configCreatedAt'];
        }

        if (isset($map['configUpdatedAt'])) {
            $model->configUpdatedAt = $map['configUpdatedAt'];
        }

        if (isset($map['cron'])) {
            $model->cron = $map['cron'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['nextPatrolAt'])) {
            $model->nextPatrolAt = $map['nextPatrolAt'];
        }

        if (isset($map['scopeConfig'])) {
            $model->scopeConfig = scopeConfig::fromMap($map['scopeConfig']);
        }

        if (isset($map['scopeType'])) {
            $model->scopeType = $map['scopeType'];
        }

        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
