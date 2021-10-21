<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class GetNotaryOrderResponseBody extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var float
     */
    public $orderPrice;

    /**
     * @var string
     */
    public $legalPersonIdCard;

    /**
     * @var string
     */
    public $businessLicenseId;

    /**
     * @var string
     */
    public $notaryPostReceipt;

    /**
     * @var string
     */
    public $companyContactName;

    /**
     * @var int
     */
    public $notaryStatus;

    /**
     * @var string
     */
    public $sellerBackOfIdCard;

    /**
     * @var string
     */
    public $tmRegisterChangeCertificate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $legalPersonName;

    /**
     * @var string
     */
    public $tmImage;

    /**
     * @var int
     */
    public $notaryAcceptDate;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $aliyunOrderId;

    /**
     * @var int
     */
    public $notarySucceedDate;

    /**
     * @var int
     */
    public $applyPostStatus;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $businessLicense;

    /**
     * @var string
     */
    public $receiverName;

    /**
     * @var int
     */
    public $orderDate;

    /**
     * @var string
     */
    public $companyContactPhone;

    /**
     * @var int
     */
    public $notaryType;

    /**
     * @var int
     */
    public $notaryFailedDate;

    /**
     * @var string
     */
    public $tmClassification;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $notaryOrderId;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $receiverPhone;

    /**
     * @var string
     */
    public $tmRegisterCertificate;

    /**
     * @var string
     */
    public $tmName;

    /**
     * @var string
     */
    public $tmRegisterNo;

    /**
     * @var string
     */
    public $sellerCompanyName;

    /**
     * @var string
     */
    public $tmAcceptCertificate;

    /**
     * @var string
     */
    public $receiverPostalCode;

    /**
     * @var string
     */
    public $notaryCertificate;

    /**
     * @var string
     */
    public $legalPersonPhone;

    /**
     * @var string
     */
    public $notaryFailedReason;

    /**
     * @var string
     */
    public $sellerFrontOfIdCard;

    /**
     * @var string
     */
    public $receiverAddress;

    /**
     * @var string
     */
    public $notaryPlatformName;
    protected $_name = [
        'type'                        => 'Type',
        'orderPrice'                  => 'OrderPrice',
        'legalPersonIdCard'           => 'LegalPersonIdCard',
        'businessLicenseId'           => 'BusinessLicenseId',
        'notaryPostReceipt'           => 'NotaryPostReceipt',
        'companyContactName'          => 'CompanyContactName',
        'notaryStatus'                => 'NotaryStatus',
        'sellerBackOfIdCard'          => 'SellerBackOfIdCard',
        'tmRegisterChangeCertificate' => 'TmRegisterChangeCertificate',
        'requestId'                   => 'RequestId',
        'legalPersonName'             => 'LegalPersonName',
        'tmImage'                     => 'TmImage',
        'notaryAcceptDate'            => 'NotaryAcceptDate',
        'errorCode'                   => 'ErrorCode',
        'aliyunOrderId'               => 'AliyunOrderId',
        'notarySucceedDate'           => 'NotarySucceedDate',
        'applyPostStatus'             => 'ApplyPostStatus',
        'errorMsg'                    => 'ErrorMsg',
        'name'                        => 'Name',
        'businessLicense'             => 'BusinessLicense',
        'receiverName'                => 'ReceiverName',
        'orderDate'                   => 'OrderDate',
        'companyContactPhone'         => 'CompanyContactPhone',
        'notaryType'                  => 'NotaryType',
        'notaryFailedDate'            => 'NotaryFailedDate',
        'tmClassification'            => 'TmClassification',
        'success'                     => 'Success',
        'bizId'                       => 'BizId',
        'notaryOrderId'               => 'NotaryOrderId',
        'phone'                       => 'Phone',
        'receiverPhone'               => 'ReceiverPhone',
        'tmRegisterCertificate'       => 'TmRegisterCertificate',
        'tmName'                      => 'TmName',
        'tmRegisterNo'                => 'TmRegisterNo',
        'sellerCompanyName'           => 'SellerCompanyName',
        'tmAcceptCertificate'         => 'TmAcceptCertificate',
        'receiverPostalCode'          => 'ReceiverPostalCode',
        'notaryCertificate'           => 'NotaryCertificate',
        'legalPersonPhone'            => 'LegalPersonPhone',
        'notaryFailedReason'          => 'NotaryFailedReason',
        'sellerFrontOfIdCard'         => 'SellerFrontOfIdCard',
        'receiverAddress'             => 'ReceiverAddress',
        'notaryPlatformName'          => 'NotaryPlatformName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->orderPrice) {
            $res['OrderPrice'] = $this->orderPrice;
        }
        if (null !== $this->legalPersonIdCard) {
            $res['LegalPersonIdCard'] = $this->legalPersonIdCard;
        }
        if (null !== $this->businessLicenseId) {
            $res['BusinessLicenseId'] = $this->businessLicenseId;
        }
        if (null !== $this->notaryPostReceipt) {
            $res['NotaryPostReceipt'] = $this->notaryPostReceipt;
        }
        if (null !== $this->companyContactName) {
            $res['CompanyContactName'] = $this->companyContactName;
        }
        if (null !== $this->notaryStatus) {
            $res['NotaryStatus'] = $this->notaryStatus;
        }
        if (null !== $this->sellerBackOfIdCard) {
            $res['SellerBackOfIdCard'] = $this->sellerBackOfIdCard;
        }
        if (null !== $this->tmRegisterChangeCertificate) {
            $res['TmRegisterChangeCertificate'] = $this->tmRegisterChangeCertificate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->legalPersonName) {
            $res['LegalPersonName'] = $this->legalPersonName;
        }
        if (null !== $this->tmImage) {
            $res['TmImage'] = $this->tmImage;
        }
        if (null !== $this->notaryAcceptDate) {
            $res['NotaryAcceptDate'] = $this->notaryAcceptDate;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->aliyunOrderId) {
            $res['AliyunOrderId'] = $this->aliyunOrderId;
        }
        if (null !== $this->notarySucceedDate) {
            $res['NotarySucceedDate'] = $this->notarySucceedDate;
        }
        if (null !== $this->applyPostStatus) {
            $res['ApplyPostStatus'] = $this->applyPostStatus;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->businessLicense) {
            $res['BusinessLicense'] = $this->businessLicense;
        }
        if (null !== $this->receiverName) {
            $res['ReceiverName'] = $this->receiverName;
        }
        if (null !== $this->orderDate) {
            $res['OrderDate'] = $this->orderDate;
        }
        if (null !== $this->companyContactPhone) {
            $res['CompanyContactPhone'] = $this->companyContactPhone;
        }
        if (null !== $this->notaryType) {
            $res['NotaryType'] = $this->notaryType;
        }
        if (null !== $this->notaryFailedDate) {
            $res['NotaryFailedDate'] = $this->notaryFailedDate;
        }
        if (null !== $this->tmClassification) {
            $res['TmClassification'] = $this->tmClassification;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->notaryOrderId) {
            $res['NotaryOrderId'] = $this->notaryOrderId;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->receiverPhone) {
            $res['ReceiverPhone'] = $this->receiverPhone;
        }
        if (null !== $this->tmRegisterCertificate) {
            $res['TmRegisterCertificate'] = $this->tmRegisterCertificate;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->tmRegisterNo) {
            $res['TmRegisterNo'] = $this->tmRegisterNo;
        }
        if (null !== $this->sellerCompanyName) {
            $res['SellerCompanyName'] = $this->sellerCompanyName;
        }
        if (null !== $this->tmAcceptCertificate) {
            $res['TmAcceptCertificate'] = $this->tmAcceptCertificate;
        }
        if (null !== $this->receiverPostalCode) {
            $res['ReceiverPostalCode'] = $this->receiverPostalCode;
        }
        if (null !== $this->notaryCertificate) {
            $res['NotaryCertificate'] = $this->notaryCertificate;
        }
        if (null !== $this->legalPersonPhone) {
            $res['LegalPersonPhone'] = $this->legalPersonPhone;
        }
        if (null !== $this->notaryFailedReason) {
            $res['NotaryFailedReason'] = $this->notaryFailedReason;
        }
        if (null !== $this->sellerFrontOfIdCard) {
            $res['SellerFrontOfIdCard'] = $this->sellerFrontOfIdCard;
        }
        if (null !== $this->receiverAddress) {
            $res['ReceiverAddress'] = $this->receiverAddress;
        }
        if (null !== $this->notaryPlatformName) {
            $res['NotaryPlatformName'] = $this->notaryPlatformName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNotaryOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['OrderPrice'])) {
            $model->orderPrice = $map['OrderPrice'];
        }
        if (isset($map['LegalPersonIdCard'])) {
            $model->legalPersonIdCard = $map['LegalPersonIdCard'];
        }
        if (isset($map['BusinessLicenseId'])) {
            $model->businessLicenseId = $map['BusinessLicenseId'];
        }
        if (isset($map['NotaryPostReceipt'])) {
            $model->notaryPostReceipt = $map['NotaryPostReceipt'];
        }
        if (isset($map['CompanyContactName'])) {
            $model->companyContactName = $map['CompanyContactName'];
        }
        if (isset($map['NotaryStatus'])) {
            $model->notaryStatus = $map['NotaryStatus'];
        }
        if (isset($map['SellerBackOfIdCard'])) {
            $model->sellerBackOfIdCard = $map['SellerBackOfIdCard'];
        }
        if (isset($map['TmRegisterChangeCertificate'])) {
            $model->tmRegisterChangeCertificate = $map['TmRegisterChangeCertificate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LegalPersonName'])) {
            $model->legalPersonName = $map['LegalPersonName'];
        }
        if (isset($map['TmImage'])) {
            $model->tmImage = $map['TmImage'];
        }
        if (isset($map['NotaryAcceptDate'])) {
            $model->notaryAcceptDate = $map['NotaryAcceptDate'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['AliyunOrderId'])) {
            $model->aliyunOrderId = $map['AliyunOrderId'];
        }
        if (isset($map['NotarySucceedDate'])) {
            $model->notarySucceedDate = $map['NotarySucceedDate'];
        }
        if (isset($map['ApplyPostStatus'])) {
            $model->applyPostStatus = $map['ApplyPostStatus'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['BusinessLicense'])) {
            $model->businessLicense = $map['BusinessLicense'];
        }
        if (isset($map['ReceiverName'])) {
            $model->receiverName = $map['ReceiverName'];
        }
        if (isset($map['OrderDate'])) {
            $model->orderDate = $map['OrderDate'];
        }
        if (isset($map['CompanyContactPhone'])) {
            $model->companyContactPhone = $map['CompanyContactPhone'];
        }
        if (isset($map['NotaryType'])) {
            $model->notaryType = $map['NotaryType'];
        }
        if (isset($map['NotaryFailedDate'])) {
            $model->notaryFailedDate = $map['NotaryFailedDate'];
        }
        if (isset($map['TmClassification'])) {
            $model->tmClassification = $map['TmClassification'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['NotaryOrderId'])) {
            $model->notaryOrderId = $map['NotaryOrderId'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['ReceiverPhone'])) {
            $model->receiverPhone = $map['ReceiverPhone'];
        }
        if (isset($map['TmRegisterCertificate'])) {
            $model->tmRegisterCertificate = $map['TmRegisterCertificate'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['TmRegisterNo'])) {
            $model->tmRegisterNo = $map['TmRegisterNo'];
        }
        if (isset($map['SellerCompanyName'])) {
            $model->sellerCompanyName = $map['SellerCompanyName'];
        }
        if (isset($map['TmAcceptCertificate'])) {
            $model->tmAcceptCertificate = $map['TmAcceptCertificate'];
        }
        if (isset($map['ReceiverPostalCode'])) {
            $model->receiverPostalCode = $map['ReceiverPostalCode'];
        }
        if (isset($map['NotaryCertificate'])) {
            $model->notaryCertificate = $map['NotaryCertificate'];
        }
        if (isset($map['LegalPersonPhone'])) {
            $model->legalPersonPhone = $map['LegalPersonPhone'];
        }
        if (isset($map['NotaryFailedReason'])) {
            $model->notaryFailedReason = $map['NotaryFailedReason'];
        }
        if (isset($map['SellerFrontOfIdCard'])) {
            $model->sellerFrontOfIdCard = $map['SellerFrontOfIdCard'];
        }
        if (isset($map['ReceiverAddress'])) {
            $model->receiverAddress = $map['ReceiverAddress'];
        }
        if (isset($map['NotaryPlatformName'])) {
            $model->notaryPlatformName = $map['NotaryPlatformName'];
        }

        return $model;
    }
}
