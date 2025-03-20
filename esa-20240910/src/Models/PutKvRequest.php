<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class PutKvRequest extends Model
{
    /**
     * @description Specifies whether the content of the key is Base64-encoded. Set this parameter to true if you want to store the key content in binary format. When this parameter is set to true, the Value parameter must be Base64-encoded.
     *
     * @example true
     *
     * @var bool
     */
    public $base64;

    /**
     * @description The time when the key-value pair expires, which cannot be earlier than the current time. The value is a timestamp in seconds. If you specify both Expiration and ExpirationTtl, only ExpirationTtl takes effect.
     *
     * @example 1690081381
     *
     * @var int
     */
    public $expiration;

    /**
     * @description The relative expiration time. Unit: seconds. If you specify both Expiration and ExpirationTtl, only ExpirationTtl takes effect.
     *
     * @example 3600
     *
     * @var int
     */
    public $expirationTtl;

    /**
     * @description The key name. The name can be up to 512 characters in length and cannot contain spaces or backslashes (\\\\).
     *
     * This parameter is required.
     *
     * @example test_key
     *
     * @var string
     */
    public $key;

    /**
     * @description The name of the namespace that you specify when you call the [CreateKvNamespace](https://help.aliyun.com/document_detail/2850317.html) operation.
     *
     * This parameter is required.
     *
     * @example test_namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The content of the key, which can be up to 2 MB (2 × 1000 × 1000). If the content is larger than 2 MB, call [PutKvWithHighCapacity](https://help.aliyun.com/document_detail/2850486.html).
     *
     * This parameter is required.
     *
     * @example test_value
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'base64' => 'Base64',
        'expiration' => 'Expiration',
        'expirationTtl' => 'ExpirationTtl',
        'key' => 'Key',
        'namespace' => 'Namespace',
        'value' => 'Value',
    ];

    public function validate() {}

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
