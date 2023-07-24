<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class PutDcdnKvRequest extends Model
{
    /**
     * @var int
     */
    public $expiration;

    /**
     * @var int
     */
    public $expirationTtl;

    /**
     * @description The key. The key can be up to 512 characters in length, and cannot contain spaces.
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
     * @description The value of the key. The maximum size is 2 MB (2 x 1000 x 1000 bytes).
     *
     * @example value1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'expiration'    => 'Expiration',
        'expirationTtl' => 'ExpirationTtl',
        'key'           => 'Key',
        'namespace'     => 'Namespace',
        'value'         => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }
        if (null !== $this->expirationTtl) {
            $res['ExpirationTtl'] = $this->expirationTtl;
        }
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
        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }
        if (isset($map['ExpirationTtl'])) {
            $model->expirationTtl = $map['ExpirationTtl'];
        }
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
