<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodSSLCertificateListResponseBody\certificateListModel\certList;

use AlibabaCloud\Tea\Model;

class cert extends Model
{
    /**
     * @example 235437
     *
     * @var int
     */
    public $certId;

    /**
     * @example video-ssl
     *
     * @var string
     */
    public $certName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $certRegion;

    /**
     * @example test
     *
     * @var string
     */
    public $common;

    /**
     * @example ****
     *
     * @var string
     */
    public $fingerprint;

    /**
     * @example ****
     *
     * @var string
     */
    public $issuer;

    /**
     * @example 1512388610
     *
     * @var int
     */
    public $lastTime;
    protected $_name = [
        'certId'      => 'CertId',
        'certName'    => 'CertName',
        'certRegion'  => 'CertRegion',
        'common'      => 'Common',
        'fingerprint' => 'Fingerprint',
        'issuer'      => 'Issuer',
        'lastTime'    => 'LastTime',
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
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certRegion) {
            $res['CertRegion'] = $this->certRegion;
        }
        if (null !== $this->common) {
            $res['Common'] = $this->common;
        }
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
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
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertRegion'])) {
            $model->certRegion = $map['CertRegion'];
        }
        if (isset($map['Common'])) {
            $model->common = $map['Common'];
        }
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }

        return $model;
    }
}
