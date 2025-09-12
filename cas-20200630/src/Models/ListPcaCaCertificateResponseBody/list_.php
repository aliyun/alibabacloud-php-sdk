<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\ListPcaCaCertificateResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var string
     */
    public $commonName;

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
    public $status;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'certIdentifier' => 'CertIdentifier',
        'commonName' => 'CommonName',
        'issuerIdentifier' => 'IssuerIdentifier',
        'privateCaInstanceId' => 'PrivateCaInstanceId',
        'privateCaRegionId' => 'PrivateCaRegionId',
        'status' => 'Status',
        'userId' => 'UserId',
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

        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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

        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
