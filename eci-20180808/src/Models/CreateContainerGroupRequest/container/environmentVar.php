<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\environmentVar\fieldRef;
use AlibabaCloud\Tea\Model;

class environmentVar extends Model
{
    /**
     * @var fieldRef
     */
    public $fieldRef;

    /**
     * @description The name of the environment variable. The name must be 1 to 128 bits in length and can contain letters, digits, and underscores (_). It cannot start with a digit.``
     *
     * @example PATH
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the environment variable. The value can be up to 256 characters in length.
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
     * @return environmentVar
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
