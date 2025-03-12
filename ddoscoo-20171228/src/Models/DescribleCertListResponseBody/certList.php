<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribleCertListResponseBody;

use AlibabaCloud\Tea\Model;

class certList extends Model
{
    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @example www.aliyun.com
     *
     * @var string
     */
    public $common;

    /**
     * @example false
     *
     * @var bool
     */
    public $domainRelated;

    /**
     * @example 2020-09-23
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @example DigiCert Inc
     *
     * @var string
     */
    public $issuer;

    /**
     * @example testCertName
     *
     * @var string
     */
    public $name;

    /**
     * @example 2019-09-24
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
     * @return certList
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
