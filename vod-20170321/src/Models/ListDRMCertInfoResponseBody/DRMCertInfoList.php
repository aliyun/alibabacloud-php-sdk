<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListDRMCertInfoResponseBody;

use AlibabaCloud\Dara\Model;

class DRMCertInfoList extends Model
{
    /**
     * @var string
     */
    public $ask;

    /**
     * @var string
     */
    public $certId;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $DRMType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $passPhrase;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $servCert;
    protected $_name = [
        'ask' => 'Ask',
        'certId' => 'CertId',
        'certName' => 'CertName',
        'creationTime' => 'CreationTime',
        'DRMType' => 'DRMType',
        'description' => 'Description',
        'passPhrase' => 'PassPhrase',
        'privateKey' => 'PrivateKey',
        'servCert' => 'ServCert',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ask) {
            $res['Ask'] = $this->ask;
        }

        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }

        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->DRMType) {
            $res['DRMType'] = $this->DRMType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->passPhrase) {
            $res['PassPhrase'] = $this->passPhrase;
        }

        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }

        if (null !== $this->servCert) {
            $res['ServCert'] = $this->servCert;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ask'])) {
            $model->ask = $map['Ask'];
        }

        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }

        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DRMType'])) {
            $model->DRMType = $map['DRMType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['PassPhrase'])) {
            $model->passPhrase = $map['PassPhrase'];
        }

        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }

        if (isset($map['ServCert'])) {
            $model->servCert = $map['ServCert'];
        }

        return $model;
    }
}
