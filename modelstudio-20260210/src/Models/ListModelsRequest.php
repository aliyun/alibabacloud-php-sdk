<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models;

use AlibabaCloud\Dara\Model;

class ListModelsRequest extends Model
{
    /**
     * @var string[]
     */
    public $capabilities;

    /**
     * @var int
     */
    public $contextWindow;

    /**
     * @var string[]
     */
    public $features;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $providers;
    protected $_name = [
        'capabilities' => 'capabilities',
        'contextWindow' => 'contextWindow',
        'features' => 'features',
        'language' => 'language',
        'maxResults' => 'maxResults',
        'model' => 'model',
        'name' => 'name',
        'nextToken' => 'nextToken',
        'providers' => 'providers',
    ];

    public function validate()
    {
        if (\is_array($this->capabilities)) {
            Model::validateArray($this->capabilities);
        }
        if (\is_array($this->features)) {
            Model::validateArray($this->features);
        }
        if (\is_array($this->providers)) {
            Model::validateArray($this->providers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capabilities) {
            if (\is_array($this->capabilities)) {
                $res['capabilities'] = [];
                $n1 = 0;
                foreach ($this->capabilities as $item1) {
                    $res['capabilities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contextWindow) {
            $res['contextWindow'] = $this->contextWindow;
        }

        if (null !== $this->features) {
            if (\is_array($this->features)) {
                $res['features'] = [];
                $n1 = 0;
                foreach ($this->features as $item1) {
                    $res['features'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->providers) {
            if (\is_array($this->providers)) {
                $res['providers'] = [];
                $n1 = 0;
                foreach ($this->providers as $item1) {
                    $res['providers'][$n1] = $item1;
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
        if (isset($map['capabilities'])) {
            if (!empty($map['capabilities'])) {
                $model->capabilities = [];
                $n1 = 0;
                foreach ($map['capabilities'] as $item1) {
                    $model->capabilities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['contextWindow'])) {
            $model->contextWindow = $map['contextWindow'];
        }

        if (isset($map['features'])) {
            if (!empty($map['features'])) {
                $model->features = [];
                $n1 = 0;
                foreach ($map['features'] as $item1) {
                    $model->features[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['providers'])) {
            if (!empty($map['providers'])) {
                $model->providers = [];
                $n1 = 0;
                foreach ($map['providers'] as $item1) {
                    $model->providers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
