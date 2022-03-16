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
    public $instanceId;

    /**
     * @var int
     */
    public $orderId;

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
    public $rootBrand;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $trusteeStatus;

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
        'domain'          => 'Domain',
        'domainCount'     => 'DomainCount',
        'domainType'      => 'DomainType',
        'instanceId'      => 'InstanceId',
        'orderId'         => 'OrderId',
        'partnerOrderId'  => 'PartnerOrderId',
        'productCode'     => 'ProductCode',
        'productName'     => 'ProductName',
        'rootBrand'       => 'RootBrand',
        'sourceType'      => 'SourceType',
        'status'          => 'Status',
        'trusteeStatus'   => 'TrusteeStatus',
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
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
        if (null !== $this->rootBrand) {
            $res['RootBrand'] = $this->rootBrand;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->trusteeStatus) {
            $res['TrusteeStatus'] = $this->trusteeStatus;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
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
        if (isset($map['RootBrand'])) {
            $model->rootBrand = $map['RootBrand'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TrusteeStatus'])) {
            $model->trusteeStatus = $map['TrusteeStatus'];
        }
        if (isset($map['WildDomainCount'])) {
            $model->wildDomainCount = $map['WildDomainCount'];
        }

        return $model;
    }
}
