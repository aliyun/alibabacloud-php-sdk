<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailResponseBody\scalingConfiguration\initContainers;

use AlibabaCloud\Tea\Model;

class initContainerEnvironmentVars extends Model
{
    /**
     * @description >  This parameter is not available for use.
     *
     * @example path
     *
     * @var string
     */
    public $fieldRefFieldPath;

    /**
     * @description The key of the environment variable.
     *
     * @example PATH
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the environment variable.
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
