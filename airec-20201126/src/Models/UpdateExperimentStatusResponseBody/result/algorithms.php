<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\UpdateExperimentStatusResponseBody\result;

use AlibabaCloud\SDK\Airec\V20201126\Models\UpdateExperimentStatusResponseBody\result\algorithms\config;
use AlibabaCloud\Tea\Model;

class algorithms extends Model
{
    /**
     * @description The algorithm category. Valid values: RECALL and RANK.
     *
     * @example RECALL
     *
     * @var string
     */
    public $category;

    /**
     * @description The experiment configurations.
     *
     * @var config[]
     */
    public $config;

    /**
     * @description The default value of the algorithm configuration item.
     *
     * @example swing
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description The custom value of the algorithm configuration item.
     *
     * @example xxx
     *
     * @var string
     */
    public $experimentValue;

    /**
     * @description Indicates whether child configuration items exist. Valid values: true and false.
     *
     * @example false
     *
     * @var bool
     */
    public $hasConfig;

    /**
     * @description The algorithm key. Valid values: i2i: the I2I filtering algorithm. u2x2i: the U2X2I filtering algorithm. hot: the filtering algorithm for popular items. new: the filtering algorithm for new items. embedding: the vector filtering algorithm. mtorder: the priority of the filtering algorithm. rankservice: the ranking service.
     *
     * @example hot
     *
     * @var string
     */
    public $key;

    /**
     * @description The algorithm name. (Note: If you use the default algorithm, the console obtains the algorithm name from Medusa. If you customize an algorithm for the experiment, the algorithm name is directly returned.)
     *
     * @example xxx
     *
     * @var string
     */
    public $name;

    /**
     * @description The algorithm type. Valid values: SYSTEM and CUSTOM.
     *
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
