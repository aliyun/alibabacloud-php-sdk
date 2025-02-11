<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions;

use AlibabaCloud\Dara\Model;

class insertHeaderConfig extends Model
{
    /**
     * @var bool
     */
    public $coverEnabled;
    /**
     * @var string
     */
    public $key;
    /**
     * @var string
     */
    public $value;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
