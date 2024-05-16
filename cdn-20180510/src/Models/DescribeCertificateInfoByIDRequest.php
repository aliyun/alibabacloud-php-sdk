<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCertificateInfoByIDRequest extends Model
{
    /**
     * @description The ID of the certificate. You can query only one certificate in each call.
     *
     * This parameter is required.
     * @example 1644xx
     *
     * @var string
     */
    public $certId;
    protected $_name = [
        'certId' => 'CertId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCertificateInfoByIDRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }

        return $model;
    }
}
