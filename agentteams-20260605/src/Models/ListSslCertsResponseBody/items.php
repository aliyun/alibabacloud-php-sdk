<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListSslCertsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $algorithm;

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
     * @var bool
     */
    public $chainCompleted;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var int
     */
    public $notAfterTimestamp;

    /**
     * @var int
     */
    public $notBeforeTimestamp;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'certId' => 'CertId',
        'certIdentifier' => 'CertIdentifier',
        'certName' => 'CertName',
        'chainCompleted' => 'ChainCompleted',
        'commonName' => 'CommonName',
        'domain' => 'Domain',
        'issuer' => 'Issuer',
        'notAfterTimestamp' => 'NotAfterTimestamp',
        'notBeforeTimestamp' => 'NotBeforeTimestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
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

        if (null !== $this->chainCompleted) {
            $res['ChainCompleted'] = $this->chainCompleted;
        }

        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->notAfterTimestamp) {
            $res['NotAfterTimestamp'] = $this->notAfterTimestamp;
        }

        if (null !== $this->notBeforeTimestamp) {
            $res['NotBeforeTimestamp'] = $this->notBeforeTimestamp;
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
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
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

        if (isset($map['ChainCompleted'])) {
            $model->chainCompleted = $map['ChainCompleted'];
        }

        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['NotAfterTimestamp'])) {
            $model->notAfterTimestamp = $map['NotAfterTimestamp'];
        }

        if (isset($map['NotBeforeTimestamp'])) {
            $model->notBeforeTimestamp = $map['NotBeforeTimestamp'];
        }

        return $model;
    }
}
