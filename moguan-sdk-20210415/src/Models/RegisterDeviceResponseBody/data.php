<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Moguansdk\V20210415\Models\RegisterDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example rSDUqJEawcrhaHVDXgQQ2vV3eOQDzuos5TAJgx9uolqVaAKkgcBHfWd/jYknsiVeYxsLWyscP0U6ia0XL/u6t7ira9XnI3Jv9qHzosrAW09YrT68VigxqwrutxtexXGgrXFzYmcMMe05rYhEmyyoeNu0CB40HxggXIIw10vH0pvhMLd0ssz6FbaOGhZ/7WDzFAqeXlz7+whZFNlXwaCfIwHTDIj9nBHHsBzWWocOHO==
     *
     * @var string
     */
    public $license;

    /**
     * @example SSTfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCwdTbYqDHxAlmdSFowPthsG3wKyXdembceyc5j31FZIYGESE4x6ND0al5ejdx26d2ZMRDzlkjnLqUN3snezRA1x0qs92taGXMrIvYDi0dEsz3X/a/VXHPxNu0+/PBT9RYzakLDV9F/6QdYn4PQUvHSTfz2ghaS5SCj++VVDe4CBBIDAAPB
     *
     * @var string
     */
    public $publicKey;

    /**
     * @example 1082f5e57a004a0799198d4a370c3efa
     *
     * @var string
     */
    public $rid;

    /**
     * @example VnxhWhjL2D3kkGcv8Q/wHzyD6dTEYIDfnIgzDWLS7iQRiCWLu1K+EA+Q6iiH1lpaDNGeQ65zVpbB1wtGMmJymQMJeJ5RHzEo74wwXP48Yfn6tdAoZwtLkxXqZo5N99W/JyEyHyeisC44ZIpLcs1YPv3Wr+uRirUgjHhZXorxJ1E=
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'license'   => 'License',
        'publicKey' => 'PublicKey',
        'rid'       => 'Rid',
        'signature' => 'Signature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->license) {
            $res['License'] = $this->license;
        }
        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['License'])) {
            $model->license = $map['License'];
        }
        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
