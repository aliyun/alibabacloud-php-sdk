<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class DescribeWarehouseCertResponseBody extends Model
{
    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var string
     */
    public $certStatus;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $issuerIdentifier;

    /**
     * @var string
     */
    public $privateCaInstanceId;

    /**
     * @var string
     */
    public $privateCaRegionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $warehouseInstanceId;
    protected $_name = [
        'certIdentifier' => 'CertIdentifier',
        'certStatus' => 'CertStatus',
        'certType' => 'CertType',
        'commonName' => 'CommonName',
        'content' => 'Content',
        'fingerprint' => 'Fingerprint',
        'issuer' => 'Issuer',
        'issuerIdentifier' => 'IssuerIdentifier',
        'privateCaInstanceId' => 'PrivateCaInstanceId',
        'privateCaRegionId' => 'PrivateCaRegionId',
        'requestId' => 'RequestId',
        'warehouseInstanceId' => 'WarehouseInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }

        if (null !== $this->certStatus) {
            $res['CertStatus'] = $this->certStatus;
        }

        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }

        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->issuerIdentifier) {
            $res['IssuerIdentifier'] = $this->issuerIdentifier;
        }

        if (null !== $this->privateCaInstanceId) {
            $res['PrivateCaInstanceId'] = $this->privateCaInstanceId;
        }

        if (null !== $this->privateCaRegionId) {
            $res['PrivateCaRegionId'] = $this->privateCaRegionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->warehouseInstanceId) {
            $res['WarehouseInstanceId'] = $this->warehouseInstanceId;
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
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }

        if (isset($map['CertStatus'])) {
            $model->certStatus = $map['CertStatus'];
        }

        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }

        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['IssuerIdentifier'])) {
            $model->issuerIdentifier = $map['IssuerIdentifier'];
        }

        if (isset($map['PrivateCaInstanceId'])) {
            $model->privateCaInstanceId = $map['PrivateCaInstanceId'];
        }

        if (isset($map['PrivateCaRegionId'])) {
            $model->privateCaRegionId = $map['PrivateCaRegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WarehouseInstanceId'])) {
            $model->warehouseInstanceId = $map['WarehouseInstanceId'];
        }

        return $model;
    }
}
