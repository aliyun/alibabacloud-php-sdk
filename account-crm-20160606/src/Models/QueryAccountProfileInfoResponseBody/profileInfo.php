<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountProfileInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountProfileInfoResponseBody\profileInfo\city;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountProfileInfoResponseBody\profileInfo\district;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountProfileInfoResponseBody\profileInfo\province;

class profileInfo extends Model
{
    /**
     * @var string
     */
    public $accountAttr;

    /**
     * @var string
     */
    public $accountCertifyType;

    /**
     * @var string
     */
    public $activeNotSetMobile;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $address2;

    /**
     * @var string
     */
    public $address3;

    /**
     * @var string
     */
    public $address4;

    /**
     * @var string
     */
    public $address5;

    /**
     * @var string
     */
    public $address6;

    /**
     * @var string
     */
    public $alipayAccount;

    /**
     * @var string
     */
    public $alipayUid;

    /**
     * @var string
     */
    public $aliyunID;

    /**
     * @var string
     */
    public $aliyunPK;

    /**
     * @var string
     */
    public $authAlipay;

    /**
     * @var string
     */
    public $authDomainUserId;

    /**
     * @var string
     */
    public $b2bhid;

    /**
     * @var string
     */
    public $bankId;

    /**
     * @var string
     */
    public $bankName;

    /**
     * @var string
     */
    public $beiAnAuthCId;

    /**
     * @var string
     */
    public $beiAnIcpNumber;

    /**
     * @var string
     */
    public $beiAnMobile;

    /**
     * @var string
     */
    public $bindAlipayNo;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $certifiedFrom;

    /**
     * @var string
     */
    public $certifiedTime;

    /**
     * @var city
     */
    public $city;

    /**
     * @var string
     */
    public $contactMethod;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var district
     */
    public $district;

    /**
     * @var string
     */
    public $eid;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $fax;

    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $fyl;

    /**
     * @var string
     */
    public $havanaId;

    /**
     * @var string
     */
    public $head;

    /**
     * @var string
     */
    public $headUrl;

    /**
     * @var string
     */
    public $IDNumber;

    /**
     * @var string
     */
    public $isBankIDAuth;

    /**
     * @var string
     */
    public $isCertified;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $nationalityCode;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $own;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $postCode;

    /**
     * @var string
     */
    public $preferredLanguage;

    /**
     * @var bool
     */
    public $processingEnterpriseCertify;

    /**
     * @var province
     */
    public $province;

    /**
     * @var string
     */
    public $registerIP;

    /**
     * @var string
     */
    public $securityMobile;

    /**
     * @var bool
     */
    public $securityQuestionExists;

    /**
     * @var string
     */
    public $selfServicingBusinessRegNum;

    /**
     * @var string
     */
    public $selfServicingIdentificationNum;

    /**
     * @var string
     */
    public $showNickName;

    /**
     * @var string
     */
    public $src;

    /**
     * @var string
     */
    public $taobaoAccount;

    /**
     * @var string
     */
    public $taobaoNickFromHavana;

    /**
     * @var string
     */
    public $tbhid;

    /**
     * @var string
     */
    public $trueName;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $yahooEmail;
    protected $_name = [
        'accountAttr' => 'AccountAttr',
        'accountCertifyType' => 'AccountCertifyType',
        'activeNotSetMobile' => 'ActiveNotSetMobile',
        'address' => 'Address',
        'address2' => 'Address2',
        'address3' => 'Address3',
        'address4' => 'Address4',
        'address5' => 'Address5',
        'address6' => 'Address6',
        'alipayAccount' => 'AlipayAccount',
        'alipayUid' => 'AlipayUid',
        'aliyunID' => 'AliyunID',
        'aliyunPK' => 'AliyunPK',
        'authAlipay' => 'AuthAlipay',
        'authDomainUserId' => 'AuthDomainUserId',
        'b2bhid' => 'B2bhid',
        'bankId' => 'BankId',
        'bankName' => 'BankName',
        'beiAnAuthCId' => 'BeiAnAuthCId',
        'beiAnIcpNumber' => 'BeiAnIcpNumber',
        'beiAnMobile' => 'BeiAnMobile',
        'bindAlipayNo' => 'BindAlipayNo',
        'certType' => 'CertType',
        'certifiedFrom' => 'CertifiedFrom',
        'certifiedTime' => 'CertifiedTime',
        'city' => 'City',
        'contactMethod' => 'ContactMethod',
        'createTime' => 'CreateTime',
        'district' => 'District',
        'eid' => 'Eid',
        'email' => 'Email',
        'fax' => 'Fax',
        'firstName' => 'FirstName',
        'fyl' => 'Fyl',
        'havanaId' => 'HavanaId',
        'head' => 'Head',
        'headUrl' => 'HeadUrl',
        'IDNumber' => 'IDNumber',
        'isBankIDAuth' => 'IsBankIDAuth',
        'isCertified' => 'IsCertified',
        'lastName' => 'LastName',
        'mobile' => 'Mobile',
        'nationalityCode' => 'NationalityCode',
        'nickName' => 'NickName',
        'own' => 'Own',
        'phone' => 'Phone',
        'postCode' => 'PostCode',
        'preferredLanguage' => 'PreferredLanguage',
        'processingEnterpriseCertify' => 'ProcessingEnterpriseCertify',
        'province' => 'Province',
        'registerIP' => 'RegisterIP',
        'securityMobile' => 'SecurityMobile',
        'securityQuestionExists' => 'SecurityQuestionExists',
        'selfServicingBusinessRegNum' => 'SelfServicingBusinessRegNum',
        'selfServicingIdentificationNum' => 'SelfServicingIdentificationNum',
        'showNickName' => 'ShowNickName',
        'src' => 'Src',
        'taobaoAccount' => 'TaobaoAccount',
        'taobaoNickFromHavana' => 'TaobaoNickFromHavana',
        'tbhid' => 'Tbhid',
        'trueName' => 'TrueName',
        'updateTime' => 'UpdateTime',
        'yahooEmail' => 'YahooEmail',
    ];

    public function validate()
    {
        if (null !== $this->city) {
            $this->city->validate();
        }
        if (null !== $this->district) {
            $this->district->validate();
        }
        if (null !== $this->province) {
            $this->province->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountAttr) {
            $res['AccountAttr'] = $this->accountAttr;
        }

        if (null !== $this->accountCertifyType) {
            $res['AccountCertifyType'] = $this->accountCertifyType;
        }

        if (null !== $this->activeNotSetMobile) {
            $res['ActiveNotSetMobile'] = $this->activeNotSetMobile;
        }

        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->address2) {
            $res['Address2'] = $this->address2;
        }

        if (null !== $this->address3) {
            $res['Address3'] = $this->address3;
        }

        if (null !== $this->address4) {
            $res['Address4'] = $this->address4;
        }

        if (null !== $this->address5) {
            $res['Address5'] = $this->address5;
        }

        if (null !== $this->address6) {
            $res['Address6'] = $this->address6;
        }

        if (null !== $this->alipayAccount) {
            $res['AlipayAccount'] = $this->alipayAccount;
        }

        if (null !== $this->alipayUid) {
            $res['AlipayUid'] = $this->alipayUid;
        }

        if (null !== $this->aliyunID) {
            $res['AliyunID'] = $this->aliyunID;
        }

        if (null !== $this->aliyunPK) {
            $res['AliyunPK'] = $this->aliyunPK;
        }

        if (null !== $this->authAlipay) {
            $res['AuthAlipay'] = $this->authAlipay;
        }

        if (null !== $this->authDomainUserId) {
            $res['AuthDomainUserId'] = $this->authDomainUserId;
        }

        if (null !== $this->b2bhid) {
            $res['B2bhid'] = $this->b2bhid;
        }

        if (null !== $this->bankId) {
            $res['BankId'] = $this->bankId;
        }

        if (null !== $this->bankName) {
            $res['BankName'] = $this->bankName;
        }

        if (null !== $this->beiAnAuthCId) {
            $res['BeiAnAuthCId'] = $this->beiAnAuthCId;
        }

        if (null !== $this->beiAnIcpNumber) {
            $res['BeiAnIcpNumber'] = $this->beiAnIcpNumber;
        }

        if (null !== $this->beiAnMobile) {
            $res['BeiAnMobile'] = $this->beiAnMobile;
        }

        if (null !== $this->bindAlipayNo) {
            $res['BindAlipayNo'] = $this->bindAlipayNo;
        }

        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }

        if (null !== $this->certifiedFrom) {
            $res['CertifiedFrom'] = $this->certifiedFrom;
        }

        if (null !== $this->certifiedTime) {
            $res['CertifiedTime'] = $this->certifiedTime;
        }

        if (null !== $this->city) {
            $res['City'] = null !== $this->city ? $this->city->toArray($noStream) : $this->city;
        }

        if (null !== $this->contactMethod) {
            $res['ContactMethod'] = $this->contactMethod;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->district) {
            $res['District'] = null !== $this->district ? $this->district->toArray($noStream) : $this->district;
        }

        if (null !== $this->eid) {
            $res['Eid'] = $this->eid;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->fax) {
            $res['Fax'] = $this->fax;
        }

        if (null !== $this->firstName) {
            $res['FirstName'] = $this->firstName;
        }

        if (null !== $this->fyl) {
            $res['Fyl'] = $this->fyl;
        }

        if (null !== $this->havanaId) {
            $res['HavanaId'] = $this->havanaId;
        }

        if (null !== $this->head) {
            $res['Head'] = $this->head;
        }

        if (null !== $this->headUrl) {
            $res['HeadUrl'] = $this->headUrl;
        }

        if (null !== $this->IDNumber) {
            $res['IDNumber'] = $this->IDNumber;
        }

        if (null !== $this->isBankIDAuth) {
            $res['IsBankIDAuth'] = $this->isBankIDAuth;
        }

        if (null !== $this->isCertified) {
            $res['IsCertified'] = $this->isCertified;
        }

        if (null !== $this->lastName) {
            $res['LastName'] = $this->lastName;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->nationalityCode) {
            $res['NationalityCode'] = $this->nationalityCode;
        }

        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }

        if (null !== $this->own) {
            $res['Own'] = $this->own;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->postCode) {
            $res['PostCode'] = $this->postCode;
        }

        if (null !== $this->preferredLanguage) {
            $res['PreferredLanguage'] = $this->preferredLanguage;
        }

        if (null !== $this->processingEnterpriseCertify) {
            $res['ProcessingEnterpriseCertify'] = $this->processingEnterpriseCertify;
        }

        if (null !== $this->province) {
            $res['Province'] = null !== $this->province ? $this->province->toArray($noStream) : $this->province;
        }

        if (null !== $this->registerIP) {
            $res['RegisterIP'] = $this->registerIP;
        }

        if (null !== $this->securityMobile) {
            $res['SecurityMobile'] = $this->securityMobile;
        }

        if (null !== $this->securityQuestionExists) {
            $res['SecurityQuestionExists'] = $this->securityQuestionExists;
        }

        if (null !== $this->selfServicingBusinessRegNum) {
            $res['SelfServicingBusinessRegNum'] = $this->selfServicingBusinessRegNum;
        }

        if (null !== $this->selfServicingIdentificationNum) {
            $res['SelfServicingIdentificationNum'] = $this->selfServicingIdentificationNum;
        }

        if (null !== $this->showNickName) {
            $res['ShowNickName'] = $this->showNickName;
        }

        if (null !== $this->src) {
            $res['Src'] = $this->src;
        }

        if (null !== $this->taobaoAccount) {
            $res['TaobaoAccount'] = $this->taobaoAccount;
        }

        if (null !== $this->taobaoNickFromHavana) {
            $res['TaobaoNickFromHavana'] = $this->taobaoNickFromHavana;
        }

        if (null !== $this->tbhid) {
            $res['Tbhid'] = $this->tbhid;
        }

        if (null !== $this->trueName) {
            $res['TrueName'] = $this->trueName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->yahooEmail) {
            $res['YahooEmail'] = $this->yahooEmail;
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
        if (isset($map['AccountAttr'])) {
            $model->accountAttr = $map['AccountAttr'];
        }

        if (isset($map['AccountCertifyType'])) {
            $model->accountCertifyType = $map['AccountCertifyType'];
        }

        if (isset($map['ActiveNotSetMobile'])) {
            $model->activeNotSetMobile = $map['ActiveNotSetMobile'];
        }

        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['Address2'])) {
            $model->address2 = $map['Address2'];
        }

        if (isset($map['Address3'])) {
            $model->address3 = $map['Address3'];
        }

        if (isset($map['Address4'])) {
            $model->address4 = $map['Address4'];
        }

        if (isset($map['Address5'])) {
            $model->address5 = $map['Address5'];
        }

        if (isset($map['Address6'])) {
            $model->address6 = $map['Address6'];
        }

        if (isset($map['AlipayAccount'])) {
            $model->alipayAccount = $map['AlipayAccount'];
        }

        if (isset($map['AlipayUid'])) {
            $model->alipayUid = $map['AlipayUid'];
        }

        if (isset($map['AliyunID'])) {
            $model->aliyunID = $map['AliyunID'];
        }

        if (isset($map['AliyunPK'])) {
            $model->aliyunPK = $map['AliyunPK'];
        }

        if (isset($map['AuthAlipay'])) {
            $model->authAlipay = $map['AuthAlipay'];
        }

        if (isset($map['AuthDomainUserId'])) {
            $model->authDomainUserId = $map['AuthDomainUserId'];
        }

        if (isset($map['B2bhid'])) {
            $model->b2bhid = $map['B2bhid'];
        }

        if (isset($map['BankId'])) {
            $model->bankId = $map['BankId'];
        }

        if (isset($map['BankName'])) {
            $model->bankName = $map['BankName'];
        }

        if (isset($map['BeiAnAuthCId'])) {
            $model->beiAnAuthCId = $map['BeiAnAuthCId'];
        }

        if (isset($map['BeiAnIcpNumber'])) {
            $model->beiAnIcpNumber = $map['BeiAnIcpNumber'];
        }

        if (isset($map['BeiAnMobile'])) {
            $model->beiAnMobile = $map['BeiAnMobile'];
        }

        if (isset($map['BindAlipayNo'])) {
            $model->bindAlipayNo = $map['BindAlipayNo'];
        }

        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }

        if (isset($map['CertifiedFrom'])) {
            $model->certifiedFrom = $map['CertifiedFrom'];
        }

        if (isset($map['CertifiedTime'])) {
            $model->certifiedTime = $map['CertifiedTime'];
        }

        if (isset($map['City'])) {
            $model->city = city::fromMap($map['City']);
        }

        if (isset($map['ContactMethod'])) {
            $model->contactMethod = $map['ContactMethod'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['District'])) {
            $model->district = district::fromMap($map['District']);
        }

        if (isset($map['Eid'])) {
            $model->eid = $map['Eid'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Fax'])) {
            $model->fax = $map['Fax'];
        }

        if (isset($map['FirstName'])) {
            $model->firstName = $map['FirstName'];
        }

        if (isset($map['Fyl'])) {
            $model->fyl = $map['Fyl'];
        }

        if (isset($map['HavanaId'])) {
            $model->havanaId = $map['HavanaId'];
        }

        if (isset($map['Head'])) {
            $model->head = $map['Head'];
        }

        if (isset($map['HeadUrl'])) {
            $model->headUrl = $map['HeadUrl'];
        }

        if (isset($map['IDNumber'])) {
            $model->IDNumber = $map['IDNumber'];
        }

        if (isset($map['IsBankIDAuth'])) {
            $model->isBankIDAuth = $map['IsBankIDAuth'];
        }

        if (isset($map['IsCertified'])) {
            $model->isCertified = $map['IsCertified'];
        }

        if (isset($map['LastName'])) {
            $model->lastName = $map['LastName'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['NationalityCode'])) {
            $model->nationalityCode = $map['NationalityCode'];
        }

        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        if (isset($map['Own'])) {
            $model->own = $map['Own'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['PostCode'])) {
            $model->postCode = $map['PostCode'];
        }

        if (isset($map['PreferredLanguage'])) {
            $model->preferredLanguage = $map['PreferredLanguage'];
        }

        if (isset($map['ProcessingEnterpriseCertify'])) {
            $model->processingEnterpriseCertify = $map['ProcessingEnterpriseCertify'];
        }

        if (isset($map['Province'])) {
            $model->province = province::fromMap($map['Province']);
        }

        if (isset($map['RegisterIP'])) {
            $model->registerIP = $map['RegisterIP'];
        }

        if (isset($map['SecurityMobile'])) {
            $model->securityMobile = $map['SecurityMobile'];
        }

        if (isset($map['SecurityQuestionExists'])) {
            $model->securityQuestionExists = $map['SecurityQuestionExists'];
        }

        if (isset($map['SelfServicingBusinessRegNum'])) {
            $model->selfServicingBusinessRegNum = $map['SelfServicingBusinessRegNum'];
        }

        if (isset($map['SelfServicingIdentificationNum'])) {
            $model->selfServicingIdentificationNum = $map['SelfServicingIdentificationNum'];
        }

        if (isset($map['ShowNickName'])) {
            $model->showNickName = $map['ShowNickName'];
        }

        if (isset($map['Src'])) {
            $model->src = $map['Src'];
        }

        if (isset($map['TaobaoAccount'])) {
            $model->taobaoAccount = $map['TaobaoAccount'];
        }

        if (isset($map['TaobaoNickFromHavana'])) {
            $model->taobaoNickFromHavana = $map['TaobaoNickFromHavana'];
        }

        if (isset($map['Tbhid'])) {
            $model->tbhid = $map['Tbhid'];
        }

        if (isset($map['TrueName'])) {
            $model->trueName = $map['TrueName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['YahooEmail'])) {
            $model->yahooEmail = $map['YahooEmail'];
        }

        return $model;
    }
}
