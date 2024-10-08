<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class PutKvRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $base64;

    /**
     * @example 1690081381
     *
     * @var int
     */
    public $expiration;

    /**
     * @example 3600
     *
     * @var int
     */
    public $expirationTtl;

    /**
     * @description This parameter is required.
     *
     * @example test_key
     *
     * @var string
     */
    public $key;

    /**
     * @description This parameter is required.
     *
     * @example test_namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description This parameter is required.
     *
     * @example test_value
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'base64'        => 'Base64',
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
        if (null !== $this->base64) {
            $res['Base64'] = $this->base64;
        }
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
     * @return PutKvRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Base64'])) {
            $model->base64 = $map['Base64'];
        }
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
