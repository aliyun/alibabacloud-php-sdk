<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class GetDcdnKvRequest extends Model
{
    /**
     * @description The name of the key that you want to query.
     *
     * This parameter is required.
     * @example key1
     *
     * @var string
     */
    public $key;

    /**
     * @description The name of the namespace.
     *
     * This parameter is required.
     * @example ns1
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'key'       => 'Key',
        'namespace' => 'Namespace',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDcdnKvRequest
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

        return $model;
    }
}
