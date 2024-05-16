<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\initContainers;

use AlibabaCloud\Tea\Model;

class initContainerEnvironmentVars extends Model
{
    /**
     * @description > This parameter is unavailable.
     *
     * @example path
     *
     * @var string
     */
    public $fieldRefFieldPath;

    /**
     * @description The key of the environment variable. Specify the key in the `[0-9a-zA-Z]` format. The key must be 1 to 128 characters in length. The key can contain underscores (_) and cannot start with a digit.
     *
     * @example Path
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the environment variable. The value must be 0 to 256 characters in length.
     *
     * @example /usr/bin/
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'fieldRefFieldPath' => 'FieldRefFieldPath',
        'key'               => 'Key',
        'value'             => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldRefFieldPath) {
            $res['FieldRefFieldPath'] = $this->fieldRefFieldPath;
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
        if (isset($map['FieldRefFieldPath'])) {
            $model->fieldRefFieldPath = $map['FieldRefFieldPath'];
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
