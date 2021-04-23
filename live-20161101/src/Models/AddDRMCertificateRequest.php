<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddDRMCertificateRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $servCert;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $passphrase;

    /**
     * @var string
     */
    public $ask;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'ownerId'     => 'OwnerId',
        'certName'    => 'CertName',
        'servCert'    => 'ServCert',
        'privateKey'  => 'PrivateKey',
        'passphrase'  => 'Passphrase',
        'ask'         => 'Ask',
        'description' => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->servCert) {
            $res['ServCert'] = $this->servCert;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->passphrase) {
            $res['Passphrase'] = $this->passphrase;
        }
        if (null !== $this->ask) {
            $res['Ask'] = $this->ask;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDRMCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['ServCert'])) {
            $model->servCert = $map['ServCert'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['Passphrase'])) {
            $model->passphrase = $map['Passphrase'];
        }
        if (isset($map['Ask'])) {
            $model->ask = $map['Ask'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
