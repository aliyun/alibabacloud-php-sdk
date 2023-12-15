<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationUserCertsResponseBody\result;

use AlibabaCloud\Tea\Model;

class keyPair extends Model
{
    /**
     * @example aa
     *
     * @var string
     */
    public $privateKey;

    /**
     * @example aa
     *
     * @var string
     */
    public $publicKey;
    protected $_name = [
        'privateKey' => 'PrivateKey',
        'publicKey'  => 'PublicKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyPair
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }

        return $model;
    }
}
