<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class GetUserCertificateDetailResponseBody extends Model
{
    /**
     * @description The algorithm.
     *
     * @example RSA
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description Indicates whether the certificate was purchased from Alibaba Cloud. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $buyInAliyun;

    /**
     * @description The content of the certificate.
     *
     * @example ----BEGIN CERTIFICATE----- MIIF*** -----END CERTIFICATE-----
     *
     * @var string
     */
    public $cert;

    /**
     * @description The city of the company or organization to which the certificate purchaser belongs.
     *
     * @example hangzhou
     *
     * @var string
     */
    public $city;

    /**
     * @description The parent domain name that is bound to the certificate.
     *
     * @example *.com
     *
     * @var string
     */
    public $common;

    /**
     * @description The country or region of the company or organization to which the certificate purchaser belongs.
     *
     * @example CN
     *
     * @var string
     */
    public $country;

    /**
     * @description The content of the encryption certificate in PEM format.
     *
     * @example -----BEGIN CERTIFICATE-----
     * MIICDzCCA***
     * -----END CERTIFICATE-----
     * @var string
     */
    public $encryptCert;

    /**
     * @description The private key of the encryption certificate in the PEM format.
     *
     * @example -----BEGIN EC PRIVATE KEY-----
     * MHcCAQEEI****
     * -----END EC PRIVATE KEY-----
     * @var string
     */
    public $encryptPrivateKey;

    /**
     * @description The expiration date of the certificate.
     *
     * @example 2023-10-25
     *
     * @var string
     */
    public $endDate;

    /**
     * @description Indicates whether the certificate has expired. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $expired;

    /**
     * @description The fingerprint of the certificate.
     *
     * @example 1D7801BBE772D5DE55CBF1F88AEB41A42402DA07
     *
     * @var string
     */
    public $fingerprint;

    /**
     * @description The ID of the certificate.
     *
     * @example 121345
     *
     * @var int
     */
    public $id;

    /**
     * @description The certificate authority (CA) that issued the certificate.
     *
     * @example Digicert
     *
     * @var string
     */
    public $issuer;

    /**
     * @description The private key.
     *
     * @example -----BEGIN RSA PRIVATE KEY----- MII***-----END RSA PRIVATE KEY-----
     *
     * @var string
     */
    public $key;

    /**
     * @description The name of the certificate.
     *
     * @example cert_name
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the certificate application order.
     *
     * @example 123456
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The name of the company or organization to which the certificate purchaser belongs.
     *
     * @example Alibaba
     *
     * @var string
     */
    public $orgName;

    /**
     * @description The province of the company or organization to which the certificate purchaser belongs.
     *
     * @example zhejiang
     *
     * @var string
     */
    public $province;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 15C66C7B-671A-4297-9187-2C4477247A74
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the certificate belongs.
     *
     * @example rg-aek****wia
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description All domain names that are bound to the certificate.
     *
     * @example *.com
     *
     * @var string
     */
    public $sans;

    /**
     * @description The content of the signing certificate in the PEM format.
     *
     * @example -----BEGIN CERTIFICATE-----
     * MIICDzCCAbagAw****
     * -----END CERTIFICATE-----
     * @var string
     */
    public $signCert;

    /**
     * @description The private key of the signing certificate in the PEM format.
     *
     * @example -----BEGIN EC PRIVATE KEY-----
     * MHcCAQEEILR****
     * -----END EC PRIVATE KEY-----
     * @var string
     */
    public $signPrivateKey;

    /**
     * @description The issuance date of the certificate.
     *
     * @example 2018-07-13
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'algorithm'         => 'Algorithm',
        'buyInAliyun'       => 'BuyInAliyun',
        'cert'              => 'Cert',
        'city'              => 'City',
        'common'            => 'Common',
        'country'           => 'Country',
        'encryptCert'       => 'EncryptCert',
        'encryptPrivateKey' => 'EncryptPrivateKey',
        'endDate'           => 'EndDate',
        'expired'           => 'Expired',
        'fingerprint'       => 'Fingerprint',
        'id'                => 'Id',
        'issuer'            => 'Issuer',
        'key'               => 'Key',
        'name'              => 'Name',
        'orderId'           => 'OrderId',
        'orgName'           => 'OrgName',
        'province'          => 'Province',
        'requestId'         => 'RequestId',
        'resourceGroupId'   => 'ResourceGroupId',
        'sans'              => 'Sans',
        'signCert'          => 'SignCert',
        'signPrivateKey'    => 'SignPrivateKey',
        'startDate'         => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->buyInAliyun) {
            $res['BuyInAliyun'] = $this->buyInAliyun;
        }
        if (null !== $this->cert) {
            $res['Cert'] = $this->cert;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->common) {
            $res['Common'] = $this->common;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->encryptCert) {
            $res['EncryptCert'] = $this->encryptCert;
        }
        if (null !== $this->encryptPrivateKey) {
            $res['EncryptPrivateKey'] = $this->encryptPrivateKey;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sans) {
            $res['Sans'] = $this->sans;
        }
        if (null !== $this->signCert) {
            $res['SignCert'] = $this->signCert;
        }
        if (null !== $this->signPrivateKey) {
            $res['SignPrivateKey'] = $this->signPrivateKey;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserCertificateDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['BuyInAliyun'])) {
            $model->buyInAliyun = $map['BuyInAliyun'];
        }
        if (isset($map['Cert'])) {
            $model->cert = $map['Cert'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Common'])) {
            $model->common = $map['Common'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['EncryptCert'])) {
            $model->encryptCert = $map['EncryptCert'];
        }
        if (isset($map['EncryptPrivateKey'])) {
            $model->encryptPrivateKey = $map['EncryptPrivateKey'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Sans'])) {
            $model->sans = $map['Sans'];
        }
        if (isset($map['SignCert'])) {
            $model->signCert = $map['SignCert'];
        }
        if (isset($map['SignPrivateKey'])) {
            $model->signPrivateKey = $map['SignPrivateKey'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
