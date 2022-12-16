<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data\result\gatewayTrafficPolicy;

use AlibabaCloud\Tea\Model;

class tls extends Model
{
    /**
     * @description The public key of the CA certificate .
     *
     * @example content
     *
     * @var string
     */
    public $caCertContent;

    /**
     * @description The ID of the certification authority (CA) certificate.
     *
     * @example 5******-cn-hangzhou
     *
     * @var string
     */
    public $caCertId;

    /**
     * @description The ID of the certificate.
     *
     * @example 5******-cn-hangzhou
     *
     * @var string
     */
    public $certId;

    /**
     * @description The TLS mode.
     *
     *   DISABLE
     *   SIMPLE
     *   MUTUAL
     *   ISTIO_MUTUAL
     *
     * @example SIMPLE
     *
     * @var string
     */
    public $mode;

    /**
     * @description The Server Name Indication (SNI) value.
     *
     * @example name-sni
     *
     * @var string
     */
    public $sni;

    /**
     * @description The array of subject aliases.
     *
     * @var string[]
     */
    public $subjectAltNames;
    protected $_name = [
        'caCertContent'   => 'CaCertContent',
        'caCertId'        => 'CaCertId',
        'certId'          => 'CertId',
        'mode'            => 'Mode',
        'sni'             => 'Sni',
        'subjectAltNames' => 'SubjectAltNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caCertContent) {
            $res['CaCertContent'] = $this->caCertContent;
        }
        if (null !== $this->caCertId) {
            $res['CaCertId'] = $this->caCertId;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->sni) {
            $res['Sni'] = $this->sni;
        }
        if (null !== $this->subjectAltNames) {
            $res['SubjectAltNames'] = $this->subjectAltNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaCertContent'])) {
            $model->caCertContent = $map['CaCertContent'];
        }
        if (isset($map['CaCertId'])) {
            $model->caCertId = $map['CaCertId'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Sni'])) {
            $model->sni = $map['Sni'];
        }
        if (isset($map['SubjectAltNames'])) {
            if (!empty($map['SubjectAltNames'])) {
                $model->subjectAltNames = $map['SubjectAltNames'];
            }
        }

        return $model;
    }
}
