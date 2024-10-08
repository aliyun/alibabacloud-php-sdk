<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\BatchPutKvRequest;

use AlibabaCloud\Tea\Model;

class kvList extends Model
{
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
     * @example test_value
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'expiration'    => 'Expiration',
        'expirationTtl' => 'ExpirationTtl',
        'key'           => 'Key',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return kvList
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
