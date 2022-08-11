<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class TestHttpApiRequest extends Model {
    protected $_name = [
        'booleanParam' => 'BooleanParam',
        'defaultValue' => 'DefaultValue',
        'otherParam' => 'OtherParam',
        'stringValue' => 'StringValue',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->booleanParam) {
            $res['BooleanParam'] = $this->booleanParam;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->otherParam) {
            $res['OtherParam'] = $this->otherParam;
        }
        if (null !== $this->stringValue) {
            $res['StringValue'] = $this->stringValue;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return TestHttpApiRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['BooleanParam'])){
            $model->booleanParam = $map['BooleanParam'];
        }
        if(isset($map['DefaultValue'])){
            $model->defaultValue = $map['DefaultValue'];
        }
        if(isset($map['OtherParam'])){
            $model->otherParam = $map['OtherParam'];
        }
        if(isset($map['StringValue'])){
            $model->stringValue = $map['StringValue'];
        }
        return $model;
    }
    /**
     * @var bool
     */
    public $booleanParam;

    /**
     * @var mixed[]
     */
    public $defaultValue;

    /**
     * @var mixed[]
     */
    public $otherParam;

    /**
     * @var mixed[]
     */
    public $stringValue;

}
