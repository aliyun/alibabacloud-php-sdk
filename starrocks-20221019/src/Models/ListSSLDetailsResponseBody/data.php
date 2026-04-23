<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\ListSSLDetailsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $aliases;

    /**
     * @var bool
     */
    public $customCert;

    /**
     * @var bool
     */
    public $enableSSL;

    /**
     * @var bool
     */
    public $isValid;

    /**
     * @var string
     */
    public $issuerDN;

    /**
     * @var int
     */
    public $notAfter;

    /**
     * @var int
     */
    public $notBefore;

    /**
     * @var string
     */
    public $sslCertificateText;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subjectDN;
    protected $_name = [
        'aliases' => 'Aliases',
        'customCert' => 'CustomCert',
        'enableSSL' => 'EnableSSL',
        'isValid' => 'IsValid',
        'issuerDN' => 'IssuerDN',
        'notAfter' => 'NotAfter',
        'notBefore' => 'NotBefore',
        'sslCertificateText' => 'SslCertificateText',
        'status' => 'Status',
        'subjectDN' => 'SubjectDN',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliases) {
            $res['Aliases'] = $this->aliases;
        }

        if (null !== $this->customCert) {
            $res['CustomCert'] = $this->customCert;
        }

        if (null !== $this->enableSSL) {
            $res['EnableSSL'] = $this->enableSSL;
        }

        if (null !== $this->isValid) {
            $res['IsValid'] = $this->isValid;
        }

        if (null !== $this->issuerDN) {
            $res['IssuerDN'] = $this->issuerDN;
        }

        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }

        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }

        if (null !== $this->sslCertificateText) {
            $res['SslCertificateText'] = $this->sslCertificateText;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subjectDN) {
            $res['SubjectDN'] = $this->subjectDN;
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
        if (isset($map['Aliases'])) {
            $model->aliases = $map['Aliases'];
        }

        if (isset($map['CustomCert'])) {
            $model->customCert = $map['CustomCert'];
        }

        if (isset($map['EnableSSL'])) {
            $model->enableSSL = $map['EnableSSL'];
        }

        if (isset($map['IsValid'])) {
            $model->isValid = $map['IsValid'];
        }

        if (isset($map['IssuerDN'])) {
            $model->issuerDN = $map['IssuerDN'];
        }

        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }

        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }

        if (isset($map['SslCertificateText'])) {
            $model->sslCertificateText = $map['SslCertificateText'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubjectDN'])) {
            $model->subjectDN = $map['SubjectDN'];
        }

        return $model;
    }
}
