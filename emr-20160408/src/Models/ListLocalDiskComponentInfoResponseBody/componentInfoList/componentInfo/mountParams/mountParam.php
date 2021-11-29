<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListLocalDiskComponentInfoResponseBody\componentInfoList\componentInfo\mountParams;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListLocalDiskComponentInfoResponseBody\componentInfoList\componentInfo\mountParams\mountParam\options;
use AlibabaCloud\Tea\Model;

class mountParam extends Model
{
    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $key;

    /**
     * @var int
     */
    public $max;

    /**
     * @var int
     */
    public $min;

    /**
     * @var string
     */
    public $name;

    /**
     * @var options
     */
    public $options;

    /**
     * @var string
     */
    public $tips;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $valueType;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'key'          => 'Key',
        'max'          => 'Max',
        'min'          => 'Min',
        'name'         => 'Name',
        'options'      => 'Options',
        'tips'         => 'Tips',
        'unit'         => 'Unit',
        'valueType'    => 'ValueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->options) {
            $res['Options'] = null !== $this->options ? $this->options->toMap() : null;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mountParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Options'])) {
            $model->options = options::fromMap($map['Options']);
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
