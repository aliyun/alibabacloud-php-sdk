<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\containers;

use AlibabaCloud\Tea\Model;

class environmentVars extends Model
{
    /**
     * @description > This parameter is unavailable.
     *
     * @example fieldPath
     *
     * @var string
     */
    public $fieldRefFieldPath;

    /**
     * @description The name of the environment variable. The name must be 1 to 128 characters in length and can contain letters, digits, and underscores (\_). The name cannot start with a digit. Specify the name in the \[0-9a-zA-Z] format.
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
     * @return environmentVars
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
