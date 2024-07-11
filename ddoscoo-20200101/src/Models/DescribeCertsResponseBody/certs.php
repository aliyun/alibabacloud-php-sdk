<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCertsResponseBody;

use AlibabaCloud\Tea\Model;

class certs extends Model
{
    /**
     * @description The global certificate ID, which is in the certificate ID-cn-hangzhou format. If the ID of the certificate is 123, CertIdentifier is 123-cn-hangzhou.
     *
     * @example 126345-ap-southeast-1
     *
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
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $domainRelated;

    /**
     * @description The expiration date of the certificate. The value is a string.
     *
     * @example 2021-09-12
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The certificate ID.
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
     * @description The issuance date of the certificate. The value is a string.
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
