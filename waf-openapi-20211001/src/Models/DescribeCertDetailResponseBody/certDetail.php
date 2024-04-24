<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCertDetailResponseBody;

use AlibabaCloud\Tea\Model;

class certDetail extends Model
{
    /**
     * @description The time when the certificate expires. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1976256736582
     *
     * @var int
     */
    public $afterDate;

    /**
     * @description The time when the certificate was issued. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1976256736582
     *
     * @var int
     */
    public $beforeDate;

    /**
     * @description The ID of the certificate.
     *
     * @example 123-cn-hangzhou
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description The name of the certificate.
     *
     * @example testCertName
     *
     * @var string
     */
    public $certName;

    /**
     * @description The primary domain name, which is a common name.
     *
     * @example *.xxxaliyun.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The domain name that is associated with the certificate.
     *
     * @example demo.xxxaliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The other domain names that are associated with the certificate.
     *
     * @var string[]
     */
    public $sans;
    protected $_name = [
        'afterDate'      => 'AfterDate',
        'beforeDate'     => 'BeforeDate',
        'certIdentifier' => 'CertIdentifier',
        'certName'       => 'CertName',
        'commonName'     => 'CommonName',
        'domain'         => 'Domain',
        'sans'           => 'Sans',
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
        if (null !== $this->sans) {
            $res['Sans'] = $this->sans;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certDetail
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
        if (isset($map['Sans'])) {
            if (!empty($map['Sans'])) {
                $model->sans = $map['Sans'];
            }
        }

        return $model;
    }
}
