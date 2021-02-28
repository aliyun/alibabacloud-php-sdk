<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class FtDynamicAddressHttpVpcRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $stringValue;

    /**
     * @var mixed[]
     */
    public $defaultValue;

    /**
     * @var mixed[]
     */
    public $otherParam;

    /**
     * @var bool
     */
    public $booleanParam;

    /**
     * @var string
     */
    public $p1;
    protected $_name = [
        'stringValue'  => 'StringValue',
        'defaultValue' => 'DefaultValue',
        'otherParam'   => 'OtherParam',
        'booleanParam' => 'BooleanParam',
        'p1'           => 'P1',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stringValue) {
            $res['StringValue'] = $this->stringValue;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->otherParam) {
            $res['OtherParam'] = $this->otherParam;
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
     * @return FtDynamicAddressHttpVpcRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StringValue'])) {
            $model->stringValue = $map['StringValue'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['OtherParam'])) {
            $model->otherParam = $map['OtherParam'];
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
