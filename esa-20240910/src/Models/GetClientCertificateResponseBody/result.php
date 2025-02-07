<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetClientCertificateResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $CACertificateId;
    /**
     * @var string
     */
    public $commonName;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $issuer;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $notAfter;
    /**
     * @var string
     */
    public $notBefore;
    /**
     * @var string
     */
    public $pubkeyAlgorithm;
    /**
     * @var string
     */
    public $SAN;
    /**
     * @var string
     */
    public $signatureAlgorithm;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'CACertificateId'    => 'CACertificateId',
        'commonName'         => 'CommonName',
        'createTime'         => 'CreateTime',
        'id'                 => 'Id',
        'issuer'             => 'Issuer',
        'name'               => 'Name',
        'notAfter'           => 'NotAfter',
        'notBefore'          => 'NotBefore',
        'pubkeyAlgorithm'    => 'PubkeyAlgorithm',
        'SAN'                => 'SAN',
        'signatureAlgorithm' => 'SignatureAlgorithm',
        'status'             => 'Status',
        'type'               => 'Type',
        'updateTime'         => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CACertificateId) {
            $res['CACertificateId'] = $this->CACertificateId;
        }

        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }

        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }

        if (null !== $this->pubkeyAlgorithm) {
            $res['PubkeyAlgorithm'] = $this->pubkeyAlgorithm;
        }

        if (null !== $this->SAN) {
            $res['SAN'] = $this->SAN;
        }

        if (null !== $this->signatureAlgorithm) {
            $res['SignatureAlgorithm'] = $this->signatureAlgorithm;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CACertificateId'])) {
            $model->CACertificateId = $map['CACertificateId'];
        }

        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }

        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }

        if (isset($map['PubkeyAlgorithm'])) {
            $model->pubkeyAlgorithm = $map['PubkeyAlgorithm'];
        }

        if (isset($map['SAN'])) {
            $model->SAN = $map['SAN'];
        }

        if (isset($map['SignatureAlgorithm'])) {
            $model->signatureAlgorithm = $map['SignatureAlgorithm'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
