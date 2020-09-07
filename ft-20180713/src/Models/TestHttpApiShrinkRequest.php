<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class TestHttpApiShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $stringValueShrink;

    /**
     * @var string
     */
    public $defaultValueShrink;

    /**
     * @var string
     */
    public $otherParamShrink;

    /**
     * @var bool
     */
    public $booleanParam;
    protected $_name = [
        'stringValueShrink'  => 'StringValue',
        'defaultValueShrink' => 'DefaultValue',
        'otherParamShrink'   => 'OtherParam',
        'booleanParam'       => 'BooleanParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stringValueShrink) {
            $res['StringValue'] = $this->stringValueShrink;
        }
        if (null !== $this->defaultValueShrink) {
            $res['DefaultValue'] = $this->defaultValueShrink;
        }
        if (null !== $this->otherParamShrink) {
            $res['OtherParam'] = $this->otherParamShrink;
        }
        if (null !== $this->booleanParam) {
            $res['BooleanParam'] = $this->booleanParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestHttpApiShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StringValue'])) {
            $model->stringValueShrink = $map['StringValue'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValueShrink = $map['DefaultValue'];
        }
        if (isset($map['OtherParam'])) {
            $model->otherParamShrink = $map['OtherParam'];
        }
        if (isset($map['BooleanParam'])) {
            $model->booleanParam = $map['BooleanParam'];
        }

        return $model;
    }
}
