<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class FtDynamicAddressHttpVpcShrinkRequest extends Model
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

    /**
     * @var string
     */
    public $p1;
    protected $_name = [
        'stringValueShrink'  => 'StringValue',
        'defaultValueShrink' => 'DefaultValue',
        'otherParamShrink'   => 'OtherParam',
        'booleanParam'       => 'BooleanParam',
        'p1'                 => 'P1',
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
        if (null !== $this->p1) {
            $res['P1'] = $this->p1;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FtDynamicAddressHttpVpcShrinkRequest
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
        if (isset($map['P1'])) {
            $model->p1 = $map['P1'];
        }

        return $model;
    }
}
