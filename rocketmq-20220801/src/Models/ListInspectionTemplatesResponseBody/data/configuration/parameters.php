<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInspectionTemplatesResponseBody\data\configuration;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var mixed
     */
    public $default;

    /**
     * @var string[]
     */
    public $enum;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $key;

    /**
     * @var int
     */
    public $maxLookbackSeconds;

    /**
     * @var float
     */
    public $maximum;

    /**
     * @var float
     */
    public $minimum;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var bool
     */
    public $wholeDays;
    protected $_name = [
        'default' => 'default',
        'enum' => 'enum',
        'format' => 'format',
        'key' => 'key',
        'maxLookbackSeconds' => 'maxLookbackSeconds',
        'maximum' => 'maximum',
        'minimum' => 'minimum',
        'name' => 'name',
        'required' => 'required',
        'type' => 'type',
        'unit' => 'unit',
        'wholeDays' => 'wholeDays',
    ];

    public function validate()
    {
        if (\is_array($this->enum)) {
            Model::validateArray($this->enum);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->default) {
            $res['default'] = $this->default;
        }

        if (null !== $this->enum) {
            if (\is_array($this->enum)) {
                $res['enum'] = [];
                $n1 = 0;
                foreach ($this->enum as $item1) {
                    $res['enum'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->maxLookbackSeconds) {
            $res['maxLookbackSeconds'] = $this->maxLookbackSeconds;
        }

        if (null !== $this->maximum) {
            $res['maximum'] = $this->maximum;
        }

        if (null !== $this->minimum) {
            $res['minimum'] = $this->minimum;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->required) {
            $res['required'] = $this->required;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        if (null !== $this->wholeDays) {
            $res['wholeDays'] = $this->wholeDays;
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
        if (isset($map['default'])) {
            $model->default = $map['default'];
        }

        if (isset($map['enum'])) {
            if (!empty($map['enum'])) {
                $model->enum = [];
                $n1 = 0;
                foreach ($map['enum'] as $item1) {
                    $model->enum[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['maxLookbackSeconds'])) {
            $model->maxLookbackSeconds = $map['maxLookbackSeconds'];
        }

        if (isset($map['maximum'])) {
            $model->maximum = $map['maximum'];
        }

        if (isset($map['minimum'])) {
            $model->minimum = $map['minimum'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['required'])) {
            $model->required = $map['required'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        if (isset($map['wholeDays'])) {
            $model->wholeDays = $map['wholeDays'];
        }

        return $model;
    }
}
