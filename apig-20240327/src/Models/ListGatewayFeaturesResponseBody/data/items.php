<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayFeaturesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayFeaturesResponseBody\data\items\definition;

class items extends Model
{
    /**
     * @var definition
     */
    public $definition;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'definition' => 'definition',
        'value' => 'value',
    ];

    public function validate()
    {
        if (null !== $this->definition) {
            $this->definition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->definition) {
            $res['definition'] = null !== $this->definition ? $this->definition->toArray($noStream) : $this->definition;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['definition'])) {
            $model->definition = definition::fromMap($map['definition']);
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
