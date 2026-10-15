<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SelectedComponentConfigDTO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SelectedComponentConfigDTO\attributeConfigs\boundedValue;

class attributeConfigs extends Model
{
    /**
     * @var boundedValue
     */
    public $boundedValue;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'boundedValue' => 'BoundedValue',
        'code' => 'Code',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (null !== $this->boundedValue) {
            $this->boundedValue->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundedValue) {
            $res['BoundedValue'] = null !== $this->boundedValue ? $this->boundedValue->toArray($noStream) : $this->boundedValue;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (isset($map['BoundedValue'])) {
            $model->boundedValue = boundedValue::fromMap($map['BoundedValue']);
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
