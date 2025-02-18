<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListCertResponseBody;

use AlibabaCloud\Dara\Model;

class certList extends Model
{
    /**
     * @var int
     */
    public $afterDate;
    /**
     * @var int
     */
    public $beforeDate;
    /**
     * @var string
     */
    public $certType;
    /**
     * @var string
     */
    public $commonName;
    /**
     * @var bool
     */
    public $existPrivateKey;
    /**
     * @var string
     */
    public $identifier;
    /**
     * @var string
     */
    public $issuer;
    /**
     * @var string
     */
    public $sans;
    /**
     * @var string
     */
    public $sourceType;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $whId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
