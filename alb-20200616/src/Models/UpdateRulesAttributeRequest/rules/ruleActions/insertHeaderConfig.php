<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions;

use AlibabaCloud\Tea\Model;

class insertHeaderConfig extends Model
{
    /**
     * @description 是否覆盖请求中的值
     *
     * @var bool
     */
    public $coverEnabled;

    /**
     * @description HTTP标头
     *
     * @var string
     */
    public $key;

    /**
     * @description HTTP标头内容
     *
     * @var string
     */
    public $value;

    /**
     * @description 取值类型
     *
     * @var string
     */
    public $valueType;
    protected $_name = [
        'coverEnabled' => 'CoverEnabled',
        'key'          => 'Key',
        'value'        => 'Value',
        'valueType'    => 'ValueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverEnabled) {
            $res['CoverEnabled'] = $this->coverEnabled;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return insertHeaderConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoverEnabled'])) {
            $model->coverEnabled = $map['CoverEnabled'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
