<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class DefaultBuilderConfig extends Model
{
    /**
     * @var BuildCacheConfig
     */
    public $cache;

    /**
     * @var string[]
     */
    public $languages;

    /**
     * @var mixed[]
     */
    public $steps;
    protected $_name = [
        'cache' => 'cache',
        'languages' => 'languages',
        'steps' => 'steps',
    ];

    public function validate()
    {
        if (null !== $this->cache) {
            $this->cache->validate();
        }
        if (\is_array($this->languages)) {
            Model::validateArray($this->languages);
        }
        if (\is_array($this->steps)) {
            Model::validateArray($this->steps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cache) {
            $res['cache'] = null !== $this->cache ? $this->cache->toArray($noStream) : $this->cache;
        }

        if (null !== $this->languages) {
            if (\is_array($this->languages)) {
                $res['languages'] = [];
                $n1 = 0;
                foreach ($this->languages as $item1) {
                    $res['languages'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->steps) {
            if (\is_array($this->steps)) {
                $res['steps'] = [];
                $n1 = 0;
                foreach ($this->steps as $item1) {
                    $res['steps'][$n1++] = $item1;
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
        if (isset($map['cache'])) {
            $model->cache = BuildCacheConfig::fromMap($map['cache']);
        }

        if (isset($map['languages'])) {
            if (!empty($map['languages'])) {
                $model->languages = [];
                $n1 = 0;
                foreach ($map['languages'] as $item1) {
                    $model->languages[$n1++] = $item1;
                }
            }
        }

        if (isset($map['steps'])) {
            if (!empty($map['steps'])) {
                $model->steps = [];
                $n1 = 0;
                foreach ($map['steps'] as $item1) {
                    $model->steps[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
