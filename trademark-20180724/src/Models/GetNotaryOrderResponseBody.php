<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class GetNotaryOrderResponseBody extends Model
{
    /**
     * @var string
     */
    public $aliyunOrderId;

    /**
     * @var int
     */
    public $applyPostStatus;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $businessLicense;

    /**
     * @var string
     */
    public $businessLicenseId;

    /**
     * @var string
     */
    public $companyContactName;

    /**
     * @var string
     */
    public $companyContactPhone;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $legalPersonIdCard;

    /**
     * @var string
     */
    public $legalPersonName;

    /**
     * @var string
     */
    public $legalPersonPhone;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $notaryAcceptDate;

    /**
     * @var string
     */
    public $notaryCertificate;

    /**
     * @var int
     */
    public $notaryFailedDate;

    /**
     * @var string
     */
    public $notaryFailedReason;

    /**
     * @var int
     */
    public $notaryOrderId;

    /**
     * @var string
     */
    public $notaryPlatformName;

    /**
     * @var string
     */
    public $notaryPostReceipt;

    /**
     * @var int
     */
    public $notaryStatus;

    /**
     * @var int
     */
    public $notarySucceedDate;

    /**
     * @var int
     */
    public $notaryType;

    /**
     * @var int
     */
    public $orderDate;

    /**
     * @var float
     */
    public $orderPrice;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $receiverAddress;

    /**
     * @var string
     */
    public $receiverName;

    /**
     * @var string
     */
    public $receiverPhone;

    /**
     * @var string
     */
    public $receiverPostalCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sellerBackOfIdCard;

    /**
     * @var string
     */
    public $sellerCompanyName;

    /**
     * @var string
     */
    public $sellerFrontOfIdCard;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $tmAcceptCertificate;

    /**
     * @var string
     */
    public $tmClassification;

    /**
     * @var string
     */
    public $tmImage;

    /**
     * @var string
     */
    public $tmName;

    /**
     * @var string
     */
    public $tmRegisterCertificate;

    /**
     * @var string
     */
    public $tmRegisterChangeCertificate;

    /**
     * @var string
     */
    public $tmRegisterNo;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aliyunOrderId'               => 'AliyunOrderId',
        'applyPostStatus'             => 'ApplyPostStatus',
        'bizId'                       => 'BizId',
        'businessLicense'             => 'BusinessLicense',
        'businessLicenseId'           => 'BusinessLicenseId',
        'companyContactName'          => 'CompanyContactName',
        'companyContactPhone'         => 'CompanyContactPhone',
        'errorCode'                   => 'ErrorCode',
        'errorMsg'                    => 'ErrorMsg',
        'legalPersonIdCard'           => 'LegalPersonIdCard',
        'legalPersonName'             => 'LegalPersonName',
        'legalPersonPhone'            => 'LegalPersonPhone',
        'name'                        => 'Name',
        'notaryAcceptDate'            => 'NotaryAcceptDate',
        'notaryCertificate'           => 'NotaryCertificate',
        'notaryFailedDate'            => 'NotaryFailedDate',
        'notaryFailedReason'          => 'NotaryFailedReason',
        'notaryOrderId'               => 'NotaryOrderId',
        'notaryPlatformName'          => 'NotaryPlatformName',
        'notaryPostReceipt'           => 'NotaryPostReceipt',
        'notaryStatus'                => 'NotaryStatus',
        'notarySucceedDate'           => 'NotarySucceedDate',
        'notaryType'                  => 'NotaryType',
        'orderDate'                   => 'OrderDate',
        'orderPrice'                  => 'OrderPrice',
        'phone'                       => 'Phone',
        'receiverAddress'             => 'ReceiverAddress',
        'receiverName'                => 'ReceiverName',
        'receiverPhone'               => 'ReceiverPhone',
        'receiverPostalCode'          => 'ReceiverPostalCode',
        'requestId'                   => 'RequestId',
        'sellerBackOfIdCard'          => 'SellerBackOfIdCard',
        'sellerCompanyName'           => 'SellerCompanyName',
        'sellerFrontOfIdCard'         => 'SellerFrontOfIdCard',
        'success'                     => 'Success',
        'tmAcceptCertificate'         => 'TmAcceptCertificate',
        'tmClassification'            => 'TmClassification',
        'tmImage'                     => 'TmImage',
        'tmName'                      => 'TmName',
        'tmRegisterCertificate'       => 'TmRegisterCertificate',
        'tmRegisterChangeCertificate' => 'TmRegisterChangeCertificate',
        'tmRegisterNo'                => 'TmRegisterNo',
        'type'                        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunOrderId) {
            $res['AliyunOrderId'] = $this->aliyunOrderId;
        }
        if (null !== $this->applyPostStatus) {
            $res['ApplyPostStatus'] = $this->applyPostStatus;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->businessLicense) {
            $res['BusinessLicense'] = $this->businessLicense;
        }
        if (null !== $this->businessLicenseId) {
            $res['BusinessLicenseId'] = $this->businessLicenseId;
        }
        if (null !== $this->companyContactName) {
            $res['CompanyContactName'] = $this->companyContactName;
        }
        if (null !== $this->companyContactPhone) {
            $res['CompanyContactPhone'] = $this->companyContactPhone;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->legalPersonIdCard) {
            $res['LegalPersonIdCard'] = $this->legalPersonIdCard;
        }
        if (null !== $this->legalPersonName) {
            $res['LegalPersonName'] = $this->legalPersonName;
        }
        if (null !== $this->legalPersonPhone) {
            $res['LegalPersonPhone'] = $this->legalPersonPhone;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->notaryAcceptDate) {
            $res['NotaryAcceptDate'] = $this->notaryAcceptDate;
        }
        if (null !== $this->notaryCertificate) {
            $res['NotaryCertificate'] = $this->notaryCertificate;
        }
        if (null !== $this->notaryFailedDate) {
            $res['NotaryFailedDate'] = $this->notaryFailedDate;
        }
        if (null !== $this->notaryFailedReason) {
            $res['NotaryFailedReason'] = $this->notaryFailedReason;
        }
        if (null !== $this->notaryOrderId) {
            $res['NotaryOrderId'] = $this->notaryOrderId;
        }
        if (null !== $this->notaryPlatformName) {
            $res['NotaryPlatformName'] = $this->notaryPlatformName;
        }
        if (null !== $this->notaryPostReceipt) {
            $res['NotaryPostReceipt'] = $this->notaryPostReceipt;
        }
        if (null !== $this->notaryStatus) {
            $res['NotaryStatus'] = $this->notaryStatus;
        }
        if (null !== $this->notarySucceedDate) {
            $res['NotarySucceedDate'] = $this->notarySucceedDate;
        }
        if (null !== $this->notaryType) {
            $res['NotaryType'] = $this->notaryType;
        }
        if (null !== $this->orderDate) {
            $res['OrderDate'] = $this->orderDate;
        }
        if (null !== $this->orderPrice) {
            $res['OrderPrice'] = $this->orderPrice;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->receiverAddress) {
            $res['ReceiverAddress'] = $this->receiverAddress;
        }
        if (null !== $this->receiverName) {
            $res['ReceiverName'] = $this->receiverName;
        }
        if (null !== $this->receiverPhone) {
            $res['ReceiverPhone'] = $this->receiverPhone;
        }
        if (null !== $this->receiverPostalCode) {
            $res['ReceiverPostalCode'] = $this->receiverPostalCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sellerBackOfIdCard) {
            $res['SellerBackOfIdCard'] = $this->sellerBackOfIdCard;
        }
        if (null !== $this->sellerCompanyName) {
            $res['SellerCompanyName'] = $this->sellerCompanyName;
        }
        if (null !== $this->sellerFrontOfIdCard) {
            $res['SellerFrontOfIdCard'] = $this->sellerFrontOfIdCard;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tmAcceptCertificate) {
            $res['TmAcceptCertificate'] = $this->tmAcceptCertificate;
        }
        if (null !== $this->tmClassification) {
            $res['TmClassification'] = $this->tmClassification;
        }
        if (null !== $this->tmImage) {
            $res['TmImage'] = $this->tmImage;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->tmRegisterCertificate) {
            $res['TmRegisterCertificate'] = $this->tmRegisterCertificate;
        }
        if (null !== $this->tmRegisterChangeCertificate) {
            $res['TmRegisterChangeCertificate'] = $this->tmRegisterChangeCertificate;
        }
        if (null !== $this->tmRegisterNo) {
            $res['TmRegisterNo'] = $this->tmRegisterNo;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AliyunOrderId'])) {
            $model->aliyunOrderId = $map['AliyunOrderId'];
        }
        if (isset($map['ApplyPostStatus'])) {
            $model->applyPostStatus = $map['ApplyPostStatus'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BusinessLicense'])) {
            $model->businessLicense = $map['BusinessLicense'];
        }
        if (isset($map['BusinessLicenseId'])) {
            $model->businessLicenseId = $map['BusinessLicenseId'];
        }
        if (isset($map['CompanyContactName'])) {
            $model->companyContactName = $map['CompanyContactName'];
        }
        if (isset($map['CompanyContactPhone'])) {
            $model->companyContactPhone = $map['CompanyContactPhone'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['LegalPersonIdCard'])) {
            $model->legalPersonIdCard = $map['LegalPersonIdCard'];
        }
        if (isset($map['LegalPersonName'])) {
            $model->legalPersonName = $map['LegalPersonName'];
        }
        if (isset($map['LegalPersonPhone'])) {
            $model->legalPersonPhone = $map['LegalPersonPhone'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NotaryAcceptDate'])) {
            $model->notaryAcceptDate = $map['NotaryAcceptDate'];
        }
        if (isset($map['NotaryCertificate'])) {
            $model->notaryCertificate = $map['NotaryCertificate'];
        }
        if (isset($map['NotaryFailedDate'])) {
            $model->notaryFailedDate = $map['NotaryFailedDate'];
        }
        if (isset($map['NotaryFailedReason'])) {
            $model->notaryFailedReason = $map['NotaryFailedReason'];
        }
        if (isset($map['NotaryOrderId'])) {
            $model->notaryOrderId = $map['NotaryOrderId'];
        }
        if (isset($map['NotaryPlatformName'])) {
            $model->notaryPlatformName = $map['NotaryPlatformName'];
        }
        if (isset($map['NotaryPostReceipt'])) {
            $model->notaryPostReceipt = $map['NotaryPostReceipt'];
        }
        if (isset($map['NotaryStatus'])) {
            $model->notaryStatus = $map['NotaryStatus'];
        }
        if (isset($map['NotarySucceedDate'])) {
            $model->notarySucceedDate = $map['NotarySucceedDate'];
        }
        if (isset($map['NotaryType'])) {
            $model->notaryType = $map['NotaryType'];
        }
        if (isset($map['OrderDate'])) {
            $model->orderDate = $map['OrderDate'];
        }
        if (isset($map['OrderPrice'])) {
            $model->orderPrice = $map['OrderPrice'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['ReceiverAddress'])) {
            $model->receiverAddress = $map['ReceiverAddress'];
        }
        if (isset($map['ReceiverName'])) {
            $model->receiverName = $map['ReceiverName'];
        }
        if (isset($map['ReceiverPhone'])) {
            $model->receiverPhone = $map['ReceiverPhone'];
        }
        if (isset($map['ReceiverPostalCode'])) {
            $model->receiverPostalCode = $map['ReceiverPostalCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SellerBackOfIdCard'])) {
            $model->sellerBackOfIdCard = $map['SellerBackOfIdCard'];
        }
        if (isset($map['SellerCompanyName'])) {
            $model->sellerCompanyName = $map['SellerCompanyName'];
        }
        if (isset($map['SellerFrontOfIdCard'])) {
            $model->sellerFrontOfIdCard = $map['SellerFrontOfIdCard'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TmAcceptCertificate'])) {
            $model->tmAcceptCertificate = $map['TmAcceptCertificate'];
        }
        if (isset($map['TmClassification'])) {
            $model->tmClassification = $map['TmClassification'];
        }
        if (isset($map['TmImage'])) {
            $model->tmImage = $map['TmImage'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['TmRegisterCertificate'])) {
            $model->tmRegisterCertificate = $map['TmRegisterCertificate'];
        }
        if (isset($map['TmRegisterChangeCertificate'])) {
            $model->tmRegisterChangeCertificate = $map['TmRegisterChangeCertificate'];
        }
        if (isset($map['TmRegisterNo'])) {
            $model->tmRegisterNo = $map['TmRegisterNo'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
