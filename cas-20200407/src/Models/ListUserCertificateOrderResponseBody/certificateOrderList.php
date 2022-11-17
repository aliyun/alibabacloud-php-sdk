<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListUserCertificateOrderResponseBody;

use AlibabaCloud\Tea\Model;

class certificateOrderList extends Model
{
    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var int
     */
    public $aliyunOrderId;

    /**
     * @var int
     */
    public $buyDate;

    /**
     * @var int
     */
    public $certEndTime;

    /**
     * @var int
     */
    public $certStartTime;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var int
     */
    public $certificateId;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $domainCount;

    /**
     * @var string
     */
    public $domainType;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var string
     */
    public $partnerOrderId;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $rootBrand;

    /**
     * @var string
     */
    public $sans;

    /**
     * @var string
     */
    public $serialNo;

    /**
     * @var string
     */
    public $sha2;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $trusteeStatus;

    /**
     * @var bool
     */
    public $upload;

    /**
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
