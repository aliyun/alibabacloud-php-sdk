<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceInstanceCertsResponseBody;

use AlibabaCloud\Tea\Model;

class certs extends Model
{
    /**
     * @description The time when the certificate expires.
     *
     * @example 1708415521211
     *
     * @var int
     */
    public $afterDate;

    /**
     * @description The time when the certificate was issued.
     *
     * @example 1708415521211
     *
     * @var int
     */
    public $beforeDate;

    /**
     * @description The globally unique ID of the certificate. The value is in the "Certificate ID-cn-hangzhou" format. For example, if the ID of the certificate is 123, the value of CertIdentifier is 123-cn-hangzhou.
     *
     * @example 123-cn-hangzhou
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description The name of the certificate.
     *
     * @example demoCertName
     *
     * @var string
     */
    public $certName;

    /**
     * @description The common name.
     *
     * @example *.aliyundemo.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The domain name for which the certificate is issued.
     *
     * @example waf.aliyundemo.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description Indicates whether the certificate chain is complete.
     *
     * @example true
     *
     * @var bool
     */
    public $isChainCompleted;
    protected $_name = [
        'afterDate'        => 'AfterDate',
        'beforeDate'       => 'BeforeDate',
        'certIdentifier'   => 'CertIdentifier',
        'certName'         => 'CertName',
        'commonName'       => 'CommonName',
        'domain'           => 'Domain',
        'isChainCompleted' => 'IsChainCompleted',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterDate) {
            $res['AfterDate'] = $this->afterDate;
        }
        if (null !== $this->beforeDate) {
            $res['BeforeDate'] = $this->beforeDate;
        }
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->isChainCompleted) {
            $res['IsChainCompleted'] = $this->isChainCompleted;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AfterDate'])) {
            $model->afterDate = $map['AfterDate'];
        }
        if (isset($map['BeforeDate'])) {
            $model->beforeDate = $map['BeforeDate'];
        }
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['IsChainCompleted'])) {
            $model->isChainCompleted = $map['IsChainCompleted'];
        }

        return $model;
    }
}
