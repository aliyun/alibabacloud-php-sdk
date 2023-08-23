<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers;

use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\environmentVars\fieldRef;
use AlibabaCloud\Tea\Model;

class environmentVars extends Model
{
    /**
     * @var fieldRef
     */
    public $fieldRef;

    /**
     * @description The key of the environment variable. Specify the name in the `[0-9a-zA-Z]` format. The name must be 1 to 128 characters in length, and can contain underscores (\_). It cannot start with a digit.
     *
     * @example PATH
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the environment variable. The value must be 0 to 256 characters in length.
     *
     * @example /usr/local/bin
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'fieldRef' => 'FieldRef',
        'key'      => 'Key',
        'value'    => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldRef) {
            $res['FieldRef'] = null !== $this->fieldRef ? $this->fieldRef->toMap() : null;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return environmentVars
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldRef'])) {
            $model->fieldRef = fieldRef::fromMap($map['FieldRef']);
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
