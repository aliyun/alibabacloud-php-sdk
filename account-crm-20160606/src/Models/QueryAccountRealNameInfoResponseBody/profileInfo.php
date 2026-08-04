<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountRealNameInfoResponseBody;

use AlibabaCloud\Dara\Model;

class profileInfo extends Model
{
    /**
     * @var string
     */
    public $accountCertifyType;

    /**
     * @var string
     */
    public $authAlipay;

    /**
     * @var string
     */
    public $authBeiAnCid;

    /**
     * @var string
     */
    public $authDomain;

    /**
     * @var string
     */
    public $certifiedFrom;

    /**
     * @var string
     */
    public $certifiedTime;

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
    public $licenseNumber;

    /**
     * @var string
     */
    public $licenseType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $processingEnterpriseCertify;
    protected $_name = [
        'accountCertifyType' => 'AccountCertifyType',
        'authAlipay' => 'AuthAlipay',
        'authBeiAnCid' => 'AuthBeiAnCid',
        'authDomain' => 'AuthDomain',
        'certifiedFrom' => 'CertifiedFrom',
        'certifiedTime' => 'CertifiedTime',
        'isBankIDAuth' => 'IsBankIDAuth',
        'isCertified' => 'IsCertified',
        'licenseNumber' => 'LicenseNumber',
        'licenseType' => 'LicenseType',
        'name' => 'Name',
        'processingEnterpriseCertify' => 'ProcessingEnterpriseCertify',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountCertifyType) {
            $res['AccountCertifyType'] = $this->accountCertifyType;
        }

        if (null !== $this->authAlipay) {
            $res['AuthAlipay'] = $this->authAlipay;
        }

        if (null !== $this->authBeiAnCid) {
            $res['AuthBeiAnCid'] = $this->authBeiAnCid;
        }

        if (null !== $this->authDomain) {
            $res['AuthDomain'] = $this->authDomain;
        }

        if (null !== $this->certifiedFrom) {
            $res['CertifiedFrom'] = $this->certifiedFrom;
        }

        if (null !== $this->certifiedTime) {
            $res['CertifiedTime'] = $this->certifiedTime;
        }

        if (null !== $this->isBankIDAuth) {
            $res['IsBankIDAuth'] = $this->isBankIDAuth;
        }

        if (null !== $this->isCertified) {
            $res['IsCertified'] = $this->isCertified;
        }

        if (null !== $this->licenseNumber) {
            $res['LicenseNumber'] = $this->licenseNumber;
        }

        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->processingEnterpriseCertify) {
            $res['ProcessingEnterpriseCertify'] = $this->processingEnterpriseCertify;
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
        if (isset($map['AccountCertifyType'])) {
            $model->accountCertifyType = $map['AccountCertifyType'];
        }

        if (isset($map['AuthAlipay'])) {
            $model->authAlipay = $map['AuthAlipay'];
        }

        if (isset($map['AuthBeiAnCid'])) {
            $model->authBeiAnCid = $map['AuthBeiAnCid'];
        }

        if (isset($map['AuthDomain'])) {
            $model->authDomain = $map['AuthDomain'];
        }

        if (isset($map['CertifiedFrom'])) {
            $model->certifiedFrom = $map['CertifiedFrom'];
        }

        if (isset($map['CertifiedTime'])) {
            $model->certifiedTime = $map['CertifiedTime'];
        }

        if (isset($map['IsBankIDAuth'])) {
            $model->isBankIDAuth = $map['IsBankIDAuth'];
        }

        if (isset($map['IsCertified'])) {
            $model->isCertified = $map['IsCertified'];
        }

        if (isset($map['LicenseNumber'])) {
            $model->licenseNumber = $map['LicenseNumber'];
        }

        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProcessingEnterpriseCertify'])) {
            $model->processingEnterpriseCertify = $map['ProcessingEnterpriseCertify'];
        }

        return $model;
    }
}
