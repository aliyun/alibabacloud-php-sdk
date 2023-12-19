<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListUserCertificateOrderResponseBody;

use AlibabaCloud\Tea\Model;

class certificateOrderList extends Model
{
    /**
     * @description The algorithm. This parameter is returned only if OrderType is set to CPACK or BUY.
     *
     * @example RSA
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The ID of the Alibaba Cloud order. This parameter is returned only if OrderType is set to CPACK or BUY.
     *
     * @example 234567
     *
     * @var int
     */
    public $aliyunOrderId;

    /**
     * @description The time at which the order was placed. Unit: milliseconds. This parameter is returned only if OrderType is set to CPACK or BUY.
     *
     * @example 1634283958000
     *
     * @var int
     */
    public $buyDate;

    /**
     * @description The time at which the certificate expires. Unit: milliseconds. This parameter is returned only if OrderType is set to CPACK or BUY.
     *
     * @example 1665819958000
     *
     * @var int
     */
    public $certEndTime;

    /**
     * @description The time at which the certificate starts to take effect. Unit: milliseconds. This parameter is returned only if OrderType is set to CPACK or BUY.
     *
     * @example 1665819958000
     *
     * @var int
     */
    public $certStartTime;

    /**
     * @description The type of the certificate. This parameter is returned only if OrderType is set to CPACK or BUY. Valid values:
     *
     *   **DV**: domain validated (DV) certificate
     *   **EV**: extended validation (EV) certificate
     *   **OV**: organization validated (OV) certificate
     *   **FREE**: free certificate
     *
     * @example FREE
     *
     * @var string
     */
    public $certType;

    /**
     * @description The ID of the certificate. This parameter is returned only if OrderType is set to CERT or UPLOAD.
     *
     * @example 896521
     *
     * @var int
     */
    public $certificateId;

    /**
     * @description The city in which the organization is located. This parameter is returned only if OrderType is set to CERT or UPLOAD.
     *
     * @example Hangzhou
     *
     * @var string
     */
    public $city;

    /**
     * @description The parent domain name of the certificate. This parameter is returned only if OrderType is set to CERT or UPLOAD.
     *
     * @example aliyun.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The code of the country in which the organization is located. This parameter is returned only if OrderType is set to CERT or UPLOAD.
     *
     * @example CN
     *
     * @var string
     */
    public $country;

    /**
     * @description The domain name. This parameter is returned only if OrderType is set to CPACK or BUY.
     *
     * @example aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The total number of domain names that can be bound to the certificate. This parameter is returned only if OrderType is set to CPACK or BUY.
     *
     * @example 1
     *
     * @var int
     */
    public $domainCount;

    /**
     * @description The type of the domain name. This parameter is returned only if OrderType is set to CPACK or BUY. Valid values:
     *
     *   **ONE**: single domain name
     *   **MULTIPLE**: multiple domain names
     *   **WILDCARD**: single wildcard domain name
     *   **M_WILDCARD**: multiple wildcard domain names
     *   **MIX**: hybrid domain name
     *
     * @example ONE
     *
     * @var string
     */
    public $domainType;

    /**
     * @description The time at which the certificate expires. This parameter is returned only if OrderType is set to CERT or UPLOAD.
     *
     * @example 2022-11-17
     *
     * @var string
     */
    public $endDate;

    /**
     * @description Indicates whether the certificate expires. This parameter is returned only if OrderType is set to CERT or UPLOAD.
     *
     * @example true
     *
     * @var bool
     */
    public $expired;

    /**
     * @description The fingerprint of the certificate. This parameter is returned only if OrderType is set to CERT or UPLOAD.
     *
     * @example CC6B3696E7C7CA715BD26E28E45FF3E3DF435C03
     *
     * @var string
     */
    public $fingerprint;

    /**
     * @description The ID of the resource.
     *
     * @example cas-instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The issuer of the certificate. This parameter is returned only if OrderType is set to CERT or UPLOAD.
     *
     * @example MyIssuer
     *
     * @var string
     */
    public $issuer;

    /**
     * @description The name of the certificate. This parameter is returned only if OrderType is set to CERT or UPLOAD.
     *
     * @example cert-name
     *
     * @var string
     */
    public $name;

    /**
     * @description The order ID. This parameter is returned only if OrderType is set to CPACK or BUY.
     *
     * @example 2345687
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The name of the organization that is associated with the certificate. This parameter is returned only if OrderType is set to CERT or UPLOAD.
     *
     * @example Alibaba Cloud
     *
     * @var string
     */
    public $orgName;

    /**
     * @description The ID of the certificate authority (CA) order. This parameter is returned only if OrderType is set to CPACK or BUY.
     *
     * @example ca-123456
     *
     * @var string
     */
    public $partnerOrderId;

    /**
     * @description The specification ID of the order. This parameter is returned only if OrderType is set to CPACK or BUY.
     *
     * @example bykj123456
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The specification name of the order. This parameter is returned only if OrderType is set to CPACK or BUY.
     *
     * @example CFCA
     *
     * @var string
     */
    public $productName;

    /**
     * @description The name of the province or autonomous region in which the organization is located. This parameter is returned only if OrderType is set to CERT or UPLOAD.
     *
     * @example Zhejiang
     *
     * @var string
     */
    public $province;

    /**
     * @description The ID of the resource group. This parameter is returned only if OrderType is set to CERT or UPLOAD.
     *
     * @example rg-ae******4wia
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The brand of the certificate. Valid values: WoSign, CFCA, DigiCert, and vTrus. This parameter is returned only if OrderType is set to CPACK or BUY.
     *
     * @example CFCA
     *
     * @var string
     */
    public $rootBrand;

    /**
     * @description All domain names that are bound to the certificate. Multiple domain names are separated by commas (,). This parameter is returned only if OrderType is set to CERT or UPLOAD.
     *
     * @example aliyun.com
     *
     * @var string
     */
    public $sans;

    /**
     * @description The serial number of the certificate. This parameter is returned only if OrderType is set to CERT or UPLOAD.
     *
     * @example 040a6e493cffdda6d744acf99b6576cf
     *
     * @var string
     */
    public $serialNo;

    /**
     * @description The SHA-2 value of the certificate. This parameter is returned only if OrderType is set to CERT or UPLOAD.
     *
     * @example 56B4DED2243A81DD909D7C39824FFE4DDBD87F91BFA46CD333FF212FE0E7CB11
     *
     * @var string
     */
    public $sha2;

    /**
     * @description The type of the order. This parameter is returned only if OrderType is set to CPACK or BUY.
     *
     *   **cpack**: virtual resource order
     *   **buy**: purchase order
     *
     * @example buy
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The time at which the certificate starts to take effect. This parameter is returned only if OrderType is set to CERT or UPLOAD.
     *
     * @example 2021-11-16
     *
     * @var string
     */
    public $startDate;

    /**
     * @description The certificate status of the order. This parameter is returned only if OrderType is set to CPACK or BUY.
     *
     *   **PAYED**: pending application
     *   **CHECKING**: reviewing
     *   **CHECKED_FAIL**: review failed
     *   **ISSUED**: issued
     *   **WILLEXPIRED**: about to expire
     *   **EXPIRED**: expired
     *   **NOTACTIVATED**: not activated
     *   **REVOKED**: revoked
     *
     * @example PAYED
     *
     * @var string
     */
    public $status;

    /**
     * @description The hosting status of the certificate. This parameter is returned only if OrderType is set to CPACK or BUY.
     *
     *   **unTrustee**: not hosted
     *   **trustee**: hosted
     *
     * @example unTrustee
     *
     * @var string
     */
    public $trusteeStatus;

    /**
     * @description Indicates whether the certificate is an uploaded certificate. This parameter is returned only if OrderType is set to CERT or UPLOAD.
     *
     * @example false
     *
     * @var bool
     */
    public $upload;

    /**
     * @description The number of wildcard domain names that can be bound to the certificate. This parameter is returned only if OrderType is set to CPACK or BUY.
     *
     * @example 0
     *
     * @var int
     */
    public $wildDomainCount;
    protected $_name = [
        'algorithm'       => 'Algorithm',
        'aliyunOrderId'   => 'AliyunOrderId',
        'buyDate'         => 'BuyDate',
        'certEndTime'     => 'CertEndTime',
        'certStartTime'   => 'CertStartTime',
        'certType'        => 'CertType',
        'certificateId'   => 'CertificateId',
        'city'            => 'City',
        'commonName'      => 'CommonName',
        'country'         => 'Country',
        'domain'          => 'Domain',
        'domainCount'     => 'DomainCount',
        'domainType'      => 'DomainType',
        'endDate'         => 'EndDate',
        'expired'         => 'Expired',
        'fingerprint'     => 'Fingerprint',
        'instanceId'      => 'InstanceId',
        'issuer'          => 'Issuer',
        'name'            => 'Name',
        'orderId'         => 'OrderId',
        'orgName'         => 'OrgName',
        'partnerOrderId'  => 'PartnerOrderId',
        'productCode'     => 'ProductCode',
        'productName'     => 'ProductName',
        'province'        => 'Province',
        'resourceGroupId' => 'ResourceGroupId',
        'rootBrand'       => 'RootBrand',
        'sans'            => 'Sans',
        'serialNo'        => 'SerialNo',
        'sha2'            => 'Sha2',
        'sourceType'      => 'SourceType',
        'startDate'       => 'StartDate',
        'status'          => 'Status',
        'trusteeStatus'   => 'TrusteeStatus',
        'upload'          => 'Upload',
        'wildDomainCount' => 'WildDomainCount',
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
        if (null !== $this->aliyunOrderId) {
            $res['AliyunOrderId'] = $this->aliyunOrderId;
        }
        if (null !== $this->buyDate) {
            $res['BuyDate'] = $this->buyDate;
        }
        if (null !== $this->certEndTime) {
            $res['CertEndTime'] = $this->certEndTime;
        }
        if (null !== $this->certStartTime) {
            $res['CertStartTime'] = $this->certStartTime;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
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
        if (null !== $this->partnerOrderId) {
            $res['PartnerOrderId'] = $this->partnerOrderId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->rootBrand) {
            $res['RootBrand'] = $this->rootBrand;
        }
        if (null !== $this->sans) {
            $res['Sans'] = $this->sans;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }
        if (null !== $this->sha2) {
            $res['Sha2'] = $this->sha2;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->trusteeStatus) {
            $res['TrusteeStatus'] = $this->trusteeStatus;
        }
        if (null !== $this->upload) {
            $res['Upload'] = $this->upload;
        }
        if (null !== $this->wildDomainCount) {
            $res['WildDomainCount'] = $this->wildDomainCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificateOrderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['AliyunOrderId'])) {
            $model->aliyunOrderId = $map['AliyunOrderId'];
        }
        if (isset($map['BuyDate'])) {
            $model->buyDate = $map['BuyDate'];
        }
        if (isset($map['CertEndTime'])) {
            $model->certEndTime = $map['CertEndTime'];
        }
        if (isset($map['CertStartTime'])) {
            $model->certStartTime = $map['CertStartTime'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
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
        if (isset($map['PartnerOrderId'])) {
            $model->partnerOrderId = $map['PartnerOrderId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RootBrand'])) {
            $model->rootBrand = $map['RootBrand'];
        }
        if (isset($map['Sans'])) {
            $model->sans = $map['Sans'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }
        if (isset($map['Sha2'])) {
            $model->sha2 = $map['Sha2'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TrusteeStatus'])) {
            $model->trusteeStatus = $map['TrusteeStatus'];
        }
        if (isset($map['Upload'])) {
            $model->upload = $map['Upload'];
        }
        if (isset($map['WildDomainCount'])) {
            $model->wildDomainCount = $map['WildDomainCount'];
        }

        return $model;
    }
}
