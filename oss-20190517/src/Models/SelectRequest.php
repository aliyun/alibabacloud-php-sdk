<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class SelectRequest extends Model
{
    /**
     * @var string
     */
    public $expression;

    /**
     * @var InputSerialization
     */
    public $inputSerialization;

    /**
     * @var SelectRequestOptions
     */
    public $options;

    /**
     * @var OutputSerialization
     */
    public $outputSerialization;
    protected $_name = [
        'expression'          => 'Expression',
        'inputSerialization'  => 'InputSerialization',
        'options'             => 'Options',
        'outputSerialization' => 'OutputSerialization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->inputSerialization) {
            $res['InputSerialization'] = null !== $this->inputSerialization ? $this->inputSerialization->toMap() : null;
        }
        if (null !== $this->options) {
            $res['Options'] = null !== $this->options ? $this->options->toMap() : null;
        }
        if (null !== $this->outputSerialization) {
            $res['OutputSerialization'] = null !== $this->outputSerialization ? $this->outputSerialization->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SelectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['InputSerialization'])) {
            $model->inputSerialization = InputSerialization::fromMap($map['InputSerialization']);
        }
        if (isset($map['Options'])) {
            $model->options = SelectRequestOptions::fromMap($map['Options']);
        }
        if (isset($map['OutputSerialization'])) {
            $model->outputSerialization = OutputSerialization::fromMap($map['OutputSerialization']);
        }

        return $model;
    }
}
