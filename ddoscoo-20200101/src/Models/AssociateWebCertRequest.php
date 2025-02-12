<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class AssociateWebCertRequest extends Model
{
    /**
     * @var string
     */
    public $cert;
    /**
     * @var int
     */
    public $certId;
    /**
     * @var string
     */
    public $certIdentifier;
    /**
     * @var string
     */
    public $certName;
    /**
     * @var string
     */
    public $certRegion;
    /**
     * @var string
     */
    public $domain;
    /**
     * @var string
     */
    public $key;
    protected $_name = [
        'cert'           => 'Cert',
        'certId'         => 'CertId',
        'certIdentifier' => 'CertIdentifier',
        'certName'       => 'CertName',
        'certRegion'     => 'CertRegion',
        'domain'         => 'Domain',
        'key'            => 'Key',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cert) {
            $res['Cert'] = $this->cert;
        }

        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }

        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }

        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        if (null !== $this->certRegion) {
            $res['CertRegion'] = $this->certRegion;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
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
        if (isset($map['Cert'])) {
            $model->cert = $map['Cert'];
        }

        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }

        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }

        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        if (isset($map['CertRegion'])) {
            $model->certRegion = $map['CertRegion'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
