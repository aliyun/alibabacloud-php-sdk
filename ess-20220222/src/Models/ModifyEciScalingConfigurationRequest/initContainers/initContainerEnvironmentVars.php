<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\initContainers;

use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\initContainers\initContainerEnvironmentVars\fieldRef;
use AlibabaCloud\Tea\Model;

class initContainerEnvironmentVars extends Model
{
    /**
     * @var fieldRef
     */
    public $fieldRef;

    /**
     * @description The name of the environment variable. The name can be 1 to 128 characters in length, and can contain letters, underscores (_), and digits. The name cannot start with a digit. Specify the value in the `[0-9a-zA-Z]` format.
     *
     * @example Path
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the environment variable. The value can be up to 256 characters in length.
     *
     * @example /usr/bin/
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
     * @return initContainerEnvironmentVars
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
