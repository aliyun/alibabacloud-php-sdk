<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitFaceVerifyResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @example 91707dc296d469ad38e4c5efa6a0f24b
     *
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $certifyUrl;
    protected $_name = [
        'certifyId'  => 'CertifyId',
        'certifyUrl' => 'CertifyUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }
        if (null !== $this->certifyUrl) {
            $res['CertifyUrl'] = $this->certifyUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }
        if (isset($map['CertifyUrl'])) {
            $model->certifyUrl = $map['CertifyUrl'];
        }

        return $model;
    }
}
