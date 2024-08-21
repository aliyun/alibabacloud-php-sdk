<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class GetUserCertificateDetailRequest extends Model
{
    /**
     * @description Specifies whether to filter return results. Valid values: true and false. Default value: false. **true** specifies that the Cert, Key, EncryptCert, EncryptPrivateKey, SignCert, and SignPrivateKey parameters are not returned. **false** specifies that the parameters are returned.
     *
     * @example false
     *
     * @var bool
     */
    public $certFilter;

    /**
     * @description The ID of the certificate.
     *
     * This parameter is required.
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
