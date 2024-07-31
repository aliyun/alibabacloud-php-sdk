<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefaultHttpsResponseBody;

use AlibabaCloud\Tea\Model;

class defaultHttps extends Model
{
    /**
     * @example 123-cn-hangzhou
     *
     * @var string
     */
    public $certId;

    /**
     * @example 1
     *
     * @var string
     */
    public $cipherSuite;

    /**
     * @example ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384
     *
     * @var string
     */
    public $customCiphers;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableTLSv3;

    /**
     * @example tlsv1
     *
     * @var string
     */
    public $TLSVersion;
    protected $_name = [
        'certId'        => 'CertId',
        'cipherSuite'   => 'CipherSuite',
        'customCiphers' => 'CustomCiphers',
        'enableTLSv3'   => 'EnableTLSv3',
        'TLSVersion'    => 'TLSVersion',
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
        if (null !== $this->cipherSuite) {
            $res['CipherSuite'] = $this->cipherSuite;
        }
        if (null !== $this->customCiphers) {
            $res['CustomCiphers'] = $this->customCiphers;
        }
        if (null !== $this->enableTLSv3) {
            $res['EnableTLSv3'] = $this->enableTLSv3;
        }
        if (null !== $this->TLSVersion) {
            $res['TLSVersion'] = $this->TLSVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defaultHttps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CipherSuite'])) {
            $model->cipherSuite = $map['CipherSuite'];
        }
        if (isset($map['CustomCiphers'])) {
            $model->customCiphers = $map['CustomCiphers'];
        }
        if (isset($map['EnableTLSv3'])) {
            $model->enableTLSv3 = $map['EnableTLSv3'];
        }
        if (isset($map['TLSVersion'])) {
            $model->TLSVersion = $map['TLSVersion'];
        }

        return $model;
    }
}
