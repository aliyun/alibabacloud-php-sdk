<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSMCertificateListResponseBody\certificateListModel\certList;

use AlibabaCloud\Tea\Model;

class cert extends Model
{
    /**
     * @description The ID of the certificate.
     *
     * @example yourCertldentifier
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description The name of the certificate.
     *
     * @example yourCertName
     *
     * @var string
     */
    public $certName;

    /**
     * @description The common name of the certificate.
     *
     * @example yourCertCommon
     *
     * @var string
     */
    public $common;

    /**
     * @description The certificate authority (CA) that issued the certificate.
     *
     * @example yourCertIssuer
     *
     * @var string
     */
    public $issuer;
    protected $_name = [
        'certIdentifier' => 'CertIdentifier',
        'certName'       => 'CertName',
        'common'         => 'Common',
        'issuer'         => 'Issuer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->common) {
            $res['Common'] = $this->common;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cert
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['Common'])) {
            $model->common = $map['Common'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        return $model;
    }
}
