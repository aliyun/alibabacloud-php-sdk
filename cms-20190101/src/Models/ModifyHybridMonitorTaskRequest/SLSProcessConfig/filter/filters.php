<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorTaskRequest\SLSProcessConfig\filter;

use AlibabaCloud\Dara\Model;

class filters extends Model
{
    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $SLSKeyName;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'operator' => 'Operator',
        'SLSKeyName' => 'SLSKeyName',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->SLSKeyName) {
            $res['SLSKeyName'] = $this->SLSKeyName;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['SLSKeyName'])) {
            $model->SLSKeyName = $map['SLSKeyName'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
