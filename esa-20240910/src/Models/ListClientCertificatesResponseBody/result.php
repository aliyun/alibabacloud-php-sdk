<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListClientCertificatesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example baba39055622c008b90285a8838ed09a
     *
     * @var string
     */
    public $CACertificateId;

    /**
     * @example www.example.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @example 2024-06-24 07:48:51
     *
     * @var string
     */
    public $createTime;

    /**
     * @example babab9db65ee5efcca9f3d41d4b50d66
     *
     * @var string
     */
    public $id;

    /**
     * @example GlobalSign nv-sa
     *
     * @var string
     */
    public $issuer;

    /**
     * @example yourCertName
     *
     * @var string
     */
    public $name;

    /**
     * @example 2024-03-31 02:08:00
     *
     * @var string
     */
    public $notAfter;

    /**
     * @example 2023-03-31 02:08:00
     *
     * @var string
     */
    public $notBefore;

    /**
     * @example RSA
     *
     * @var string
     */
    public $pubkeyAlgorithm;

    /**
     * @example www.example.com,*.example.com
     *
     * @var string
     */
    public $SAN;

    /**
     * @example SHA256-RSA
     *
     * @var string
     */
    public $signatureAlgorithm;

    /**
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @example dcdn
     *
     * @var string
     */
    public $type;

    /**
     * @example 2024-07-20 06:18:42
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return result
     */
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
