<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\CloneExperimentResponseBody\result\algorithms;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description The default value of the algorithm.
     *
     * @example 400
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description The custom value of the algorithm.
     *
     * @example swing;commoni2i;pcategory;scategory
     *
     * @var string
     */
    public $experimentValue;

    /**
     * @description The algorithm key.
     *
     * @example I2I-truncedquantity
     *
     * @var string
     */
    public $key;

    /**
     * @description The algorithm name. (Note: If you use the default algorithm, the console obtains the algorithm name from Medusa. If you customize an algorithm for the experiment, the algorithm name is directly returned.)
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'defaultValue'    => 'defaultValue',
        'experimentValue' => 'experimentValue',
        'key'             => 'key',
        'name'            => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['defaultValue'] = $this->defaultValue;
        }
        if (null !== $this->experimentValue) {
            $res['experimentValue'] = $this->experimentValue;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['defaultValue'])) {
            $model->defaultValue = $map['defaultValue'];
        }
        if (isset($map['experimentValue'])) {
            $model->experimentValue = $map['experimentValue'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
