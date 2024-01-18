<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryDomainByInstanceIdResponseBody\dnsList;
use AlibabaCloud\Tea\Model;

class QueryDomainByInstanceIdResponseBody extends Model
{
    /**
     * @var dnsList
     */
    public $dnsList;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var bool
     */
    public $domainNameProxyService;

    /**
     * @var string
     */
    public $domainNameVerificationStatus;

    /**
     * @var string
     */
    public $email;

    /**
     * @var bool
     */
    public $emailVerificationClientHold;

    /**
     * @var int
     */
    public $emailVerificationStatus;

    /**
     * @var string
     */
    public $expirationDate;

    /**
     * @var int
     */
    public $expirationDateLong;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $premium;

    /**
     * @var string
     */
    public $realNameStatus;

    /**
     * @var string
     */
    public $registrantName;

    /**
     * @var string
     */
    public $registrantOrganization;

    /**
     * @var string
     */
    public $registrantType;

    /**
     * @var string
     */
    public $registrantUpdatingStatus;

    /**
     * @var string
     */
    public $registrationDate;

    /**
     * @var int
     */
    public $registrationDateLong;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $transferOutStatus;

    /**
     * @var string
     */
    public $transferProhibitionLock;

    /**
     * @var string
     */
    public $updateProhibitionLock;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'dnsList'                      => 'DnsList',
        'domainName'                   => 'DomainName',
        'domainNameProxyService'       => 'DomainNameProxyService',
        'domainNameVerificationStatus' => 'DomainNameVerificationStatus',
        'email'                        => 'Email',
        'emailVerificationClientHold'  => 'EmailVerificationClientHold',
        'emailVerificationStatus'      => 'EmailVerificationStatus',
        'expirationDate'               => 'ExpirationDate',
        'expirationDateLong'           => 'ExpirationDateLong',
        'instanceId'                   => 'InstanceId',
        'premium'                      => 'Premium',
        'realNameStatus'               => 'RealNameStatus',
        'registrantName'               => 'RegistrantName',
        'registrantOrganization'       => 'RegistrantOrganization',
        'registrantType'               => 'RegistrantType',
        'registrantUpdatingStatus'     => 'RegistrantUpdatingStatus',
        'registrationDate'             => 'RegistrationDate',
        'registrationDateLong'         => 'RegistrationDateLong',
        'requestId'                    => 'RequestId',
        'transferOutStatus'            => 'TransferOutStatus',
        'transferProhibitionLock'      => 'TransferProhibitionLock',
        'updateProhibitionLock'        => 'UpdateProhibitionLock',
        'userId'                       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsList) {
            $res['DnsList'] = null !== $this->dnsList ? $this->dnsList->toMap() : null;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainNameProxyService) {
            $res['DomainNameProxyService'] = $this->domainNameProxyService;
        }
        if (null !== $this->domainNameVerificationStatus) {
            $res['DomainNameVerificationStatus'] = $this->domainNameVerificationStatus;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->emailVerificationClientHold) {
            $res['EmailVerificationClientHold'] = $this->emailVerificationClientHold;
        }
        if (null !== $this->emailVerificationStatus) {
            $res['EmailVerificationStatus'] = $this->emailVerificationStatus;
        }
        if (null !== $this->expirationDate) {
            $res['ExpirationDate'] = $this->expirationDate;
        }
        if (null !== $this->expirationDateLong) {
            $res['ExpirationDateLong'] = $this->expirationDateLong;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->premium) {
            $res['Premium'] = $this->premium;
        }
        if (null !== $this->realNameStatus) {
            $res['RealNameStatus'] = $this->realNameStatus;
        }
        if (null !== $this->registrantName) {
            $res['RegistrantName'] = $this->registrantName;
        }
        if (null !== $this->registrantOrganization) {
            $res['RegistrantOrganization'] = $this->registrantOrganization;
        }
        if (null !== $this->registrantType) {
            $res['RegistrantType'] = $this->registrantType;
        }
        if (null !== $this->registrantUpdatingStatus) {
            $res['RegistrantUpdatingStatus'] = $this->registrantUpdatingStatus;
        }
        if (null !== $this->registrationDate) {
            $res['RegistrationDate'] = $this->registrationDate;
        }
        if (null !== $this->registrationDateLong) {
            $res['RegistrationDateLong'] = $this->registrationDateLong;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->transferOutStatus) {
            $res['TransferOutStatus'] = $this->transferOutStatus;
        }
        if (null !== $this->transferProhibitionLock) {
            $res['TransferProhibitionLock'] = $this->transferProhibitionLock;
        }
        if (null !== $this->updateProhibitionLock) {
            $res['UpdateProhibitionLock'] = $this->updateProhibitionLock;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDomainByInstanceIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsList'])) {
            $model->dnsList = dnsList::fromMap($map['DnsList']);
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainNameProxyService'])) {
            $model->domainNameProxyService = $map['DomainNameProxyService'];
        }
        if (isset($map['DomainNameVerificationStatus'])) {
            $model->domainNameVerificationStatus = $map['DomainNameVerificationStatus'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['EmailVerificationClientHold'])) {
            $model->emailVerificationClientHold = $map['EmailVerificationClientHold'];
        }
        if (isset($map['EmailVerificationStatus'])) {
            $model->emailVerificationStatus = $map['EmailVerificationStatus'];
        }
        if (isset($map['ExpirationDate'])) {
            $model->expirationDate = $map['ExpirationDate'];
        }
        if (isset($map['ExpirationDateLong'])) {
            $model->expirationDateLong = $map['ExpirationDateLong'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Premium'])) {
            $model->premium = $map['Premium'];
        }
        if (isset($map['RealNameStatus'])) {
            $model->realNameStatus = $map['RealNameStatus'];
        }
        if (isset($map['RegistrantName'])) {
            $model->registrantName = $map['RegistrantName'];
        }
        if (isset($map['RegistrantOrganization'])) {
            $model->registrantOrganization = $map['RegistrantOrganization'];
        }
        if (isset($map['RegistrantType'])) {
            $model->registrantType = $map['RegistrantType'];
        }
        if (isset($map['RegistrantUpdatingStatus'])) {
            $model->registrantUpdatingStatus = $map['RegistrantUpdatingStatus'];
        }
        if (isset($map['RegistrationDate'])) {
            $model->registrationDate = $map['RegistrationDate'];
        }
        if (isset($map['RegistrationDateLong'])) {
            $model->registrationDateLong = $map['RegistrationDateLong'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TransferOutStatus'])) {
            $model->transferOutStatus = $map['TransferOutStatus'];
        }
        if (isset($map['TransferProhibitionLock'])) {
            $model->transferProhibitionLock = $map['TransferProhibitionLock'];
        }
        if (isset($map['UpdateProhibitionLock'])) {
            $model->updateProhibitionLock = $map['UpdateProhibitionLock'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
