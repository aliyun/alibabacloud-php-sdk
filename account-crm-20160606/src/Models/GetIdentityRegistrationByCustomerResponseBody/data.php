<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetIdentityRegistrationByCustomerResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $accountType;

    /**
     * @var int
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applyStatus;

    /**
     * @var string
     */
    public $auditCode;

    /**
     * @var int
     */
    public $customerId;

    /**
     * @var string
     */
    public $docBackPic;

    /**
     * @var string
     */
    public $docFrontPic;

    /**
     * @var string
     */
    public $docNum;

    /**
     * @var string
     */
    public $docType;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var string
     */
    public $registeredAddress;

    /**
     * @var string
     */
    public $registeredCountry;

    /**
     * @var string
     */
    public $registeredNum;

    /**
     * @var string
     */
    public $tel;
    protected $_name = [
        'accountType' => 'AccountType',
        'applicationId' => 'ApplicationId',
        'applyStatus' => 'ApplyStatus',
        'auditCode' => 'AuditCode',
        'customerId' => 'CustomerId',
        'docBackPic' => 'DocBackPic',
        'docFrontPic' => 'DocFrontPic',
        'docNum' => 'DocNum',
        'docType' => 'DocType',
        'email' => 'Email',
        'fullName' => 'FullName',
        'registeredAddress' => 'RegisteredAddress',
        'registeredCountry' => 'RegisteredCountry',
        'registeredNum' => 'RegisteredNum',
        'tel' => 'Tel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applyStatus) {
            $res['ApplyStatus'] = $this->applyStatus;
        }

        if (null !== $this->auditCode) {
            $res['AuditCode'] = $this->auditCode;
        }

        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }

        if (null !== $this->docBackPic) {
            $res['DocBackPic'] = $this->docBackPic;
        }

        if (null !== $this->docFrontPic) {
            $res['DocFrontPic'] = $this->docFrontPic;
        }

        if (null !== $this->docNum) {
            $res['DocNum'] = $this->docNum;
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }

        if (null !== $this->registeredAddress) {
            $res['RegisteredAddress'] = $this->registeredAddress;
        }

        if (null !== $this->registeredCountry) {
            $res['RegisteredCountry'] = $this->registeredCountry;
        }

        if (null !== $this->registeredNum) {
            $res['RegisteredNum'] = $this->registeredNum;
        }

        if (null !== $this->tel) {
            $res['Tel'] = $this->tel;
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
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ApplyStatus'])) {
            $model->applyStatus = $map['ApplyStatus'];
        }

        if (isset($map['AuditCode'])) {
            $model->auditCode = $map['AuditCode'];
        }

        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }

        if (isset($map['DocBackPic'])) {
            $model->docBackPic = $map['DocBackPic'];
        }

        if (isset($map['DocFrontPic'])) {
            $model->docFrontPic = $map['DocFrontPic'];
        }

        if (isset($map['DocNum'])) {
            $model->docNum = $map['DocNum'];
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }

        if (isset($map['RegisteredAddress'])) {
            $model->registeredAddress = $map['RegisteredAddress'];
        }

        if (isset($map['RegisteredCountry'])) {
            $model->registeredCountry = $map['RegisteredCountry'];
        }

        if (isset($map['RegisteredNum'])) {
            $model->registeredNum = $map['RegisteredNum'];
        }

        if (isset($map['Tel'])) {
            $model->tel = $map['Tel'];
        }

        return $model;
    }
}
