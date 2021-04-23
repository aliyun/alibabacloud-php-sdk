<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeDRMCertListResponseBody\DRMCertInfoListList;

use AlibabaCloud\Tea\Model;

class certInfo extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $servCert;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $passphrase;

    /**
     * @var string
     */
    public $certId;

    /**
     * @var string
     */
    public $ask;
    protected $_name = [
        'description' => 'Description',
        'privateKey'  => 'PrivateKey',
        'servCert'    => 'ServCert',
        'certName'    => 'CertName',
        'passphrase'  => 'Passphrase',
        'certId'      => 'CertId',
        'ask'         => 'Ask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->servCert) {
            $res['ServCert'] = $this->servCert;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->passphrase) {
            $res['Passphrase'] = $this->passphrase;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->ask) {
            $res['Ask'] = $this->ask;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['ServCert'])) {
            $model->servCert = $map['ServCert'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['Passphrase'])) {
            $model->passphrase = $map['Passphrase'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['Ask'])) {
            $model->ask = $map['Ask'];
        }

        return $model;
    }
}
