<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models;

use AlibabaCloud\Tea\Model;

class ProduceAikcertRequest extends Model
{
    /**
     * @example AAv9r6m9********rDg/0g==
     *
     * @var string
     */
    public $aikName;

    /**
     * @example -----BEGIN CERTIFICATE REQUEST-----
     * -----END CERTIFICATE REQUEST-----
     * @var string
     */
    public $certRequest;

    /**
     * @example -----BEGIN CERTIFICATE-----
     * -----END CERTIFICATE-----
     * @var string
     */
    public $ekCert;

    /**
     * @example -----BEGIN PUBLIC KEY-----
     * -----END PUBLIC KEY-----
     * @var string
     */
    public $ekPubKey;

    /**
     * @example false
     *
     * @var bool
     */
    public $includeCertChain;
    protected $_name = [
        'aikName'          => 'AikName',
        'certRequest'      => 'CertRequest',
        'ekCert'           => 'EkCert',
        'ekPubKey'         => 'EkPubKey',
        'includeCertChain' => 'IncludeCertChain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aikName) {
            $res['AikName'] = $this->aikName;
        }
        if (null !== $this->certRequest) {
            $res['CertRequest'] = $this->certRequest;
        }
        if (null !== $this->ekCert) {
            $res['EkCert'] = $this->ekCert;
        }
        if (null !== $this->ekPubKey) {
            $res['EkPubKey'] = $this->ekPubKey;
        }
        if (null !== $this->includeCertChain) {
            $res['IncludeCertChain'] = $this->includeCertChain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProduceAikcertRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AikName'])) {
            $model->aikName = $map['AikName'];
        }
        if (isset($map['CertRequest'])) {
            $model->certRequest = $map['CertRequest'];
        }
        if (isset($map['EkCert'])) {
            $model->ekCert = $map['EkCert'];
        }
        if (isset($map['EkPubKey'])) {
            $model->ekPubKey = $map['EkPubKey'];
        }
        if (isset($map['IncludeCertChain'])) {
            $model->includeCertChain = $map['IncludeCertChain'];
        }

        return $model;
    }
}
