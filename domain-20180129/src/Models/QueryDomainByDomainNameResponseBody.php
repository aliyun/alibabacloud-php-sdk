<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainByDomainNameResponseBody\dnsList;
use AlibabaCloud\Tea\Model;

class QueryDomainByDomainNameResponseBody extends Model
{
    /**
     * @var string
     */
    public $email;

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
    public $realNameStatus;

    /**
     * @var bool
     */
    public $premium;

    /**
     * @var string
     */
    public $domainNameVerificationStatus;

    /**
     * @var int
     */
    public $expirationDateLong;

    /**
     * @var dnsList
     */
    public $dnsList;

    /**
     * @var string
     */
    public $transferOutStatus;

    /**
     * @var string
     */
    public $zhRegistrantOrganization;

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
    public $registrantOrganization;

    /**
     * @var string
     */
    public $transferProhibitionLock;

    /**
     * @var bool
     */
    public $domainNameProxyService;

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
    public $requestId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $zhRegistrantName;

    /**
     * @var string
     */
    public $expirationDate;

    /**
     * @var string
     */
    public $registrantName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $updateProhibitionLock;
    protected $_name = [
        'email'                        => 'Email',
        'registrationDate'             => 'RegistrationDate',
        'registrationDateLong'         => 'RegistrationDateLong',
        'realNameStatus'               => 'RealNameStatus',
        'premium'                      => 'Premium',
        'domainNameVerificationStatus' => 'DomainNameVerificationStatus',
        'expirationDateLong'           => 'ExpirationDateLong',
        'dnsList'                      => 'DnsList',
        'transferOutStatus'            => 'TransferOutStatus',
        'zhRegistrantOrganization'     => 'ZhRegistrantOrganization',
        'emailVerificationClientHold'  => 'EmailVerificationClientHold',
        'emailVerificationStatus'      => 'EmailVerificationStatus',
        'registrantOrganization'       => 'RegistrantOrganization',
        'transferProhibitionLock'      => 'TransferProhibitionLock',
        'domainNameProxyService'       => 'DomainNameProxyService',
        'registrantType'               => 'RegistrantType',
        'registrantUpdatingStatus'     => 'RegistrantUpdatingStatus',
        'requestId'                    => 'RequestId',
        'domainName'                   => 'DomainName',
        'instanceId'                   => 'InstanceId',
        'zhRegistrantName'             => 'ZhRegistrantName',
        'expirationDate'               => 'ExpirationDate',
        'registrantName'               => 'RegistrantName',
        'userId'                       => 'UserId',
        'updateProhibitionLock'        => 'UpdateProhibitionLock',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->registrationDate) {
            $res['RegistrationDate'] = $this->registrationDate;
        }
        if (null !== $this->registrationDateLong) {
            $res['RegistrationDateLong'] = $this->registrationDateLong;
        }
        if (null !== $this->realNameStatus) {
            $res['RealNameStatus'] = $this->realNameStatus;
        }
        if (null !== $this->premium) {
            $res['Premium'] = $this->premium;
        }
        if (null !== $this->domainNameVerificationStatus) {
            $res['DomainNameVerificationStatus'] = $this->domainNameVerificationStatus;
        }
        if (null !== $this->expirationDateLong) {
            $res['ExpirationDateLong'] = $this->expirationDateLong;
        }
        if (null !== $this->dnsList) {
            $res['DnsList'] = null !== $this->dnsList ? $this->dnsList->toMap() : null;
        }
        if (null !== $this->transferOutStatus) {
            $res['TransferOutStatus'] = $this->transferOutStatus;
        }
        if (null !== $this->zhRegistrantOrganization) {
            $res['ZhRegistrantOrganization'] = $this->zhRegistrantOrganization;
        }
        if (null !== $this->emailVerificationClientHold) {
            $res['EmailVerificationClientHold'] = $this->emailVerificationClientHold;
        }
        if (null !== $this->emailVerificationStatus) {
            $res['EmailVerificationStatus'] = $this->emailVerificationStatus;
        }
        if (null !== $this->registrantOrganization) {
            $res['RegistrantOrganization'] = $this->registrantOrganization;
        }
        if (null !== $this->transferProhibitionLock) {
            $res['TransferProhibitionLock'] = $this->transferProhibitionLock;
        }
        if (null !== $this->domainNameProxyService) {
            $res['DomainNameProxyService'] = $this->domainNameProxyService;
        }
        if (null !== $this->registrantType) {
            $res['RegistrantType'] = $this->registrantType;
        }
        if (null !== $this->registrantUpdatingStatus) {
            $res['RegistrantUpdatingStatus'] = $this->registrantUpdatingStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->zhRegistrantName) {
            $res['ZhRegistrantName'] = $this->zhRegistrantName;
        }
        if (null !== $this->expirationDate) {
            $res['ExpirationDate'] = $this->expirationDate;
        }
        if (null !== $this->registrantName) {
            $res['RegistrantName'] = $this->registrantName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->updateProhibitionLock) {
            $res['UpdateProhibitionLock'] = $this->updateProhibitionLock;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDomainByDomainNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['RegistrationDate'])) {
            $model->registrationDate = $map['RegistrationDate'];
        }
        if (isset($map['RegistrationDateLong'])) {
            $model->registrationDateLong = $map['RegistrationDateLong'];
        }
        if (isset($map['RealNameStatus'])) {
            $model->realNameStatus = $map['RealNameStatus'];
        }
        if (isset($map['Premium'])) {
            $model->premium = $map['Premium'];
        }
        if (isset($map['DomainNameVerificationStatus'])) {
            $model->domainNameVerificationStatus = $map['DomainNameVerificationStatus'];
        }
        if (isset($map['ExpirationDateLong'])) {
            $model->expirationDateLong = $map['ExpirationDateLong'];
        }
        if (isset($map['DnsList'])) {
            $model->dnsList = dnsList::fromMap($map['DnsList']);
        }
        if (isset($map['TransferOutStatus'])) {
            $model->transferOutStatus = $map['TransferOutStatus'];
        }
        if (isset($map['ZhRegistrantOrganization'])) {
            $model->zhRegistrantOrganization = $map['ZhRegistrantOrganization'];
        }
        if (isset($map['EmailVerificationClientHold'])) {
            $model->emailVerificationClientHold = $map['EmailVerificationClientHold'];
        }
        if (isset($map['EmailVerificationStatus'])) {
            $model->emailVerificationStatus = $map['EmailVerificationStatus'];
        }
        if (isset($map['RegistrantOrganization'])) {
            $model->registrantOrganization = $map['RegistrantOrganization'];
        }
        if (isset($map['TransferProhibitionLock'])) {
            $model->transferProhibitionLock = $map['TransferProhibitionLock'];
        }
        if (isset($map['DomainNameProxyService'])) {
            $model->domainNameProxyService = $map['DomainNameProxyService'];
        }
        if (isset($map['RegistrantType'])) {
            $model->registrantType = $map['RegistrantType'];
        }
        if (isset($map['RegistrantUpdatingStatus'])) {
            $model->registrantUpdatingStatus = $map['RegistrantUpdatingStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ZhRegistrantName'])) {
            $model->zhRegistrantName = $map['ZhRegistrantName'];
        }
        if (isset($map['ExpirationDate'])) {
            $model->expirationDate = $map['ExpirationDate'];
        }
        if (isset($map['RegistrantName'])) {
            $model->registrantName = $map['RegistrantName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UpdateProhibitionLock'])) {
            $model->updateProhibitionLock = $map['UpdateProhibitionLock'];
        }

        return $model;
    }
}
