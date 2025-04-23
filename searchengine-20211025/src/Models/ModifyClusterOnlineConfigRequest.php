<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ModifyClusterOnlineConfigRequest extends Model
{
    /**
     * @var string[]
     */
    public $clusters;

    /**
     * @var int[]
     */
    public $config;
    protected $_name = [
        'clusters' => 'clusters',
        'config' => 'config',
    ];

    public function validate()
    {
        if (\is_array($this->clusters)) {
            Model::validateArray($this->clusters);
        }
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusters) {
            if (\is_array($this->clusters)) {
                $res['clusters'] = [];
                $n1 = 0;
                foreach ($this->clusters as $item1) {
                    $res['clusters'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['config'] = [];
                foreach ($this->config as $key1 => $value1) {
                    $res['config'][$key1] = $value1;
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
        if (isset($map['clusters'])) {
            if (!empty($map['clusters'])) {
                $model->clusters = [];
                $n1 = 0;
                foreach ($map['clusters'] as $item1) {
                    $model->clusters[$n1++] = $item1;
                }
            }
        }

        if (isset($map['config'])) {
            if (!empty($map['config'])) {
                $model->config = [];
                foreach ($map['config'] as $key1 => $value1) {
                    $model->config[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
