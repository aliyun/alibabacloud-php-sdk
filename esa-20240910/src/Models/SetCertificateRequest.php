<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class SetCertificateRequest extends Model
{
    /**
     * @description The certificate ID on Certificate Management Service.
     *
     * @example 30000478
     *
     * @var int
     */
    public $casId;

    /**
     * @description The certificate content.
     *
     * @example -----BEGIN CERTIFICATE-----
     *
     * @var string
     */
    public $certificate;

    /**
     * @description The certificate ID on ESA.
     *
     * @example 30001303
     *
     * @var string
     */
    public $id;

    /**
     * @description The certificate name.
     *
     * @example yourCertName
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The private key of the certificate.
     *
     * @example -----BEGIN PRIVATE KEY-----
     *
     * @var string
     */
    public $privateKey;

    /**
     * @description The region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The certificate type. Valid values:
     *
     *   cas: a certificate purchased by using Certificate Management Service.
     *   upload: a custom certificate that you upload.
     *
     * This parameter is required.
     *
     * @example cas
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'casId' => 'CasId',
        'certificate' => 'Certificate',
        'id' => 'Id',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'privateKey' => 'PrivateKey',
        'region' => 'Region',
        'securityToken' => 'SecurityToken',
        'siteId' => 'SiteId',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casId) {
            $res['CasId'] = $this->casId;
        }
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasId'])) {
            $model->casId = $map['CasId'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
