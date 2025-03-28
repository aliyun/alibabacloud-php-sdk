<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ModelConfig extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $framework;

    /**
     * @var string
     */
    public $model;

    /**
     * @var ModelConfig[]
     */
    public $multiModelConfig;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $reversion;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bucket' => 'bucket',
        'framework' => 'framework',
        'model' => 'model',
        'multiModelConfig' => 'multiModelConfig',
        'path' => 'path',
        'prefix' => 'prefix',
        'region' => 'region',
        'reversion' => 'reversion',
        'token' => 'token',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->multiModelConfig)) {
            Model::validateArray($this->multiModelConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['bucket'] = $this->bucket;
        }

        if (null !== $this->framework) {
            $res['framework'] = $this->framework;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->multiModelConfig) {
            if (\is_array($this->multiModelConfig)) {
                $res['multiModelConfig'] = [];
                $n1 = 0;
                foreach ($this->multiModelConfig as $item1) {
                    $res['multiModelConfig'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->reversion) {
            $res['reversion'] = $this->reversion;
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
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
        if (isset($map['bucket'])) {
            $model->bucket = $map['bucket'];
        }

        if (isset($map['framework'])) {
            $model->framework = $map['framework'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['multiModelConfig'])) {
            if (!empty($map['multiModelConfig'])) {
                $model->multiModelConfig = [];
                $n1 = 0;
                foreach ($map['multiModelConfig'] as $item1) {
                    $model->multiModelConfig[$n1++] = self::fromMap($item1);
                }
            }
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['reversion'])) {
            $model->reversion = $map['reversion'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
