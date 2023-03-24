<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class PutDcdnKvRequest extends Model
{
    /**
     * @description The name of the key. The name can be up to 512 characters in length, and cannot contain spaces.
     *
     * @example key1
     *
     * @var string
     */
    public $key;

    /**
     * @description The name of the namespace.
     *
     * @example ns1
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The content of the key. The maximum size is 2 MB (2 x 1000 x 1000 bytes).
     *
     * @example value1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'       => 'Key',
        'namespace' => 'Namespace',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutDcdnKvRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
