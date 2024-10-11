<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\UpdateExperimentBasicInfoResponseBody\result\algorithms;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description The default value of the algorithm configuration item.
     *
     * @example true
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description The custom value of the algorithm configuration item.
     *
     * @example 400
     *
     * @var string
     */
    public $experimentValue;

    /**
     * @description The key of the algorithm configuration item.
     *
     * @example I2I
     *
     * @var string
     */
    public $key;

    /**
     * @description The name of the algorithm configuration item.
     *
     * @example I2I filtering algorithm
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
