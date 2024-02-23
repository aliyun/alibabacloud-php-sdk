<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListCertResponseBody;

use AlibabaCloud\Tea\Model;

class certList extends Model
{
    /**
     * @description The expiration time of the certificate. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1634283958000
     *
     * @var int
     */
    public $afterDate;

    /**
     * @description The issuance time of the certificate. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1665819958000
     *
     * @var int
     */
    public $beforeDate;

    /**
     * @description The type of the certificate.
     *
     *   **CA**: the CA certificate.
     *   **CERT**: a issued certificate.
     *
     * @example CERT
     *
     * @var string
     */
    public $certType;

    /**
     * @description The domain name.
     *
     * @example aliyun.alibaba.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @description Indicates whether the certificate contains a private key. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $existPrivateKey;

    /**
     * @description The unique identifier of the certificate.
     *
     * @example 14dcc8afc7578e
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The issuer of the certificate.
     *
     * @example mySSL
     *
     * @var string
     */
    public $issuer;

    /**
     * @description All domain names that are bound to the certificate. Multiple domain names are separated by commas (,).
     *
     * @example *.alibaba.com,aliyun.alibaba.com
     *
     * @var string
     */
    public $sans;

    /**
     * @description The source of the certificate. Valid values:
     *
     *   **upload**: uploaded certificate
     *   **aliyun**: Alibaba Cloud certificate
     *
     * @example aliyun
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The status of the certificate. Valid values:
     *
     *   **ISSUE**: issued
     *   **REVOKE**: revoked
     *
     * @example ISSUE
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the certificate application repository.
     *
     * @example 2
     *
     * @var int
     */
    public $whId;

    /**
     * @description The instance ID of the certificate application repository.
     *
     * @example test_whInstanceId
     *
     * @var string
     */
    public $whInstanceId;
    protected $_name = [
        'afterDate'       => 'AfterDate',
        'beforeDate'      => 'BeforeDate',
        'certType'        => 'CertType',
        'commonName'      => 'CommonName',
        'existPrivateKey' => 'ExistPrivateKey',
        'identifier'      => 'Identifier',
        'issuer'          => 'Issuer',
        'sans'            => 'Sans',
        'sourceType'      => 'SourceType',
        'status'          => 'Status',
        'whId'            => 'WhId',
        'whInstanceId'    => 'WhInstanceId',
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
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->existPrivateKey) {
            $res['ExistPrivateKey'] = $this->existPrivateKey;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->sans) {
            $res['Sans'] = $this->sans;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->whId) {
            $res['WhId'] = $this->whId;
        }
        if (null !== $this->whInstanceId) {
            $res['WhInstanceId'] = $this->whInstanceId;
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
        if (isset($map['AfterDate'])) {
            $model->afterDate = $map['AfterDate'];
        }
        if (isset($map['BeforeDate'])) {
            $model->beforeDate = $map['BeforeDate'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['ExistPrivateKey'])) {
            $model->existPrivateKey = $map['ExistPrivateKey'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['Sans'])) {
            $model->sans = $map['Sans'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WhId'])) {
            $model->whId = $map['WhId'];
        }
        if (isset($map['WhInstanceId'])) {
            $model->whInstanceId = $map['WhInstanceId'];
        }

        return $model;
    }
}
