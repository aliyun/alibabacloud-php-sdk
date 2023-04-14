<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\UpdateExperimentBasicInfoResponseBody\result;

use AlibabaCloud\SDK\Airec\V20201126\Models\UpdateExperimentBasicInfoResponseBody\result\algorithms\config;
use AlibabaCloud\Tea\Model;

class algorithms extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $category;

    /**
     * @var config[]
     */
    public $config;

    /**
     * @example 400
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @example 400
     *
     * @var string
     */
    public $experimentValue;

    /**
     * @example false
     *
     * @var bool
     */
    public $hasConfig;

    /**
     * @description key
     *
     * @example I2I
     *
     * @var string
     */
    public $key;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example SYSTEM
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'category'        => 'category',
        'config'          => 'config',
        'defaultValue'    => 'defaultValue',
        'experimentValue' => 'experimentValue',
        'hasConfig'       => 'hasConfig',
        'key'             => 'key',
        'name'            => 'name',
        'type'            => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->config) {
            $res['config'] = [];
            if (null !== $this->config && \is_array($this->config)) {
                $n = 0;
                foreach ($this->config as $item) {
                    $res['config'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->defaultValue) {
            $res['defaultValue'] = $this->defaultValue;
        }
        if (null !== $this->experimentValue) {
            $res['experimentValue'] = $this->experimentValue;
        }
        if (null !== $this->hasConfig) {
            $res['hasConfig'] = $this->hasConfig;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return algorithms
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['config'])) {
            if (!empty($map['config'])) {
                $model->config = [];
                $n             = 0;
                foreach ($map['config'] as $item) {
                    $model->config[$n++] = null !== $item ? config::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['defaultValue'])) {
            $model->defaultValue = $map['defaultValue'];
        }
        if (isset($map['experimentValue'])) {
            $model->experimentValue = $map['experimentValue'];
        }
        if (isset($map['hasConfig'])) {
            $model->hasConfig = $map['hasConfig'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
