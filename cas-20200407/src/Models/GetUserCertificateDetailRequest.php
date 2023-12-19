<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class GetUserCertificateDetailRequest extends Model
{
    /**
     * @description 值为true时Cert、Key、EncryptCert、EncryptPrivateKey、SignCert、SignPrivateKey信息不返回，false时则返回，默认是false。
     *
     * @example false
     *
     * @var bool
     */
    public $certFilter;

    /**
     * @description The ID of the certificate.
     *
     * @example 6055048
     *
     * @var int
     */
    public $certId;
    protected $_name = [
        'certFilter' => 'CertFilter',
        'certId'     => 'CertId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certFilter) {
            $res['CertFilter'] = $this->certFilter;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserCertificateDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertFilter'])) {
            $model->certFilter = $map['CertFilter'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }

        return $model;
    }
}
