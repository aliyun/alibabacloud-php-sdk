<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchPutDcdnKvRequest;

use AlibabaCloud\Tea\Model;

class kvList extends Model
{
    /**
     * @description The expiration time. The value is a timestamp in seconds. The expiration time cannot be earlier than the current time. If you specify Expiration and ExpirationTtl, only ExpirationTtl takes effect.
     *
     * @example 1690081381
     *
     * @var int
     */
    public $expiration;

    /**
     * @description The relative expiration time. Unit: seconds. If you specify Expiration and ExpirationTtl, only ExpirationTtl takes effect.
     *
     * @example 3600
     *
     * @var int
     */
    public $expirationTtl;

    /**
     * @description The key. The key can be up to 512 characters in length and cannot contain spaces.
     *
     * @example testkey
     *
     * @var string
     */
    public $key;

    /**
     * @description The value.
     *
     * @example testValue
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
