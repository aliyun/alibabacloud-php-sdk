<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListParameterVersionsResponseBody\pagingInfo\parameterVersion;

use AlibabaCloud\Dara\Model;

class properties extends Model
{
    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'envType' => 'EnvType',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
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
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
