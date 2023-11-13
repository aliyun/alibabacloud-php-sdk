<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCertsResponseBody;

use AlibabaCloud\Tea\Model;

class certs extends Model
{
    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @description The domain name that is associated with the certificate.
     *
     * @example www.aliyun.com
     *
     * @var string
     */
    public $common;

    /**
     * @description Indicates whether the certificate is associated with the domain name. Valid values:
     *
     *   **true**: The certificate is associated with the domain name.
     *   **false**: The certificate is not associated with the domain name.
     *
     * @example true
     *
     * @var bool
     */
    public $domainRelated;

    /**
     * @description The expiration date of the certificate. string
     *
     * @example 2021-09-12
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The ID of the certificate.
     *
     * @example 81
     *
     * @var int
     */
    public $id;

    /**
     * @description The certificate authority (CA) that issued the certificate.
     *
     * @example Symantec
     *
     * @var string
     */
    public $issuer;

    /**
     * @description The name of the certificate.
     *
     * @example testcert
     *
     * @var string
     */
    public $name;

    /**
     * @description The issuance date of the certificate. string
     *
     * @example 2019-09-12
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'certIdentifier' => 'CertIdentifier',
        'common'         => 'Common',
        'domainRelated'  => 'DomainRelated',
        'endDate'        => 'EndDate',
        'id'             => 'Id',
        'issuer'         => 'Issuer',
        'name'           => 'Name',
        'startDate'      => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->common) {
            $res['Common'] = $this->common;
        }
        if (null !== $this->domainRelated) {
            $res['DomainRelated'] = $this->domainRelated;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
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
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }
        if (isset($map['Common'])) {
            $model->common = $map['Common'];
        }
        if (isset($map['DomainRelated'])) {
            $model->domainRelated = $map['DomainRelated'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
