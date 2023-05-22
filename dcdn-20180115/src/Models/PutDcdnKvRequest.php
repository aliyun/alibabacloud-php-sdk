<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class PutDcdnKvRequest extends Model
{
    /**
     * @description The length of the key.
     *
     * @example key1
     *
     * @var string
     */
    public $key;

    /**
     * @description The content of the key. The maximum size is 2 MB (2 x 1000 x 1000 bytes).
     *
     * @example ns1
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The content of the key. If the value exceeds 256 characters in length, the first 100 characters and the last 100 characters are retained and other characters are discarded.
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
