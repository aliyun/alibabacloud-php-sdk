<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainByDomainNameResponseBody\dnsList;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainByDomainNameResponseBody\tag;
use AlibabaCloud\Tea\Model;

class QueryDomainByDomainNameResponseBody extends Model
{
    /**
     * @description The Domain Name System (DNS) servers of the domain name.
     *
     * @var dnsList
     */
    public $dnsList;

    /**
     * @description The ID of the domain name group. You can call the [QueryDomainGroupList](~~69362~~) operation to query the ID of the domain name group.
     *
     * @example 123456
     *
     * @var int
     */
    public $domainGroupId;

    /**
     * @description The name of the domain name group.
     *
     * @var string
     */
    public $domainGroupName;

    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Indicates whether privacy protection is enabled for the domain name.
     *
     * @example false
     *
     * @var bool
     */
    public $domainNameProxyService;

    /**
     * @description The status of name auditing for the domain name. Valid values:
     *
     *   **NONAUDIT**: The name auditing for the domain name is not performed.
     *   **SUCCEED**: The name auditing for the domain name is successful.
     *   **FAILED**: The name auditing for the domain name fails.
     *   **AUDITING**: The name auditing for the domain name is in progress.
     *
     * @example SUCCEED
     *
     * @var string
     */
    public $domainNameVerificationStatus;

    /**
     * @description The status of the domain name. Valid values:
     *
     *   1: The domain name needs to be renewed.
     *   2: The domain name needs to be redeemed.
     *   3: The domain name is normal.
     *
     * @example 3
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @description The type of the domain name. Valid values:
     *
     *   New gTLD
     *   gTLD
     *   ccTLD
     *
     * @example gTLD
     *
     * @var string
     */
    public $domainType;

    /**
     * @description The email address of the domain name registrant.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description Indicates whether the domain name is in the ClientHold state.
     *
     * @example false
     *
     * @var bool
     */
    public $emailVerificationClientHold;

    /**
     * @description Indicates whether the email address passes verification. Valid values:
     *
     *   **0**: The email address fails the verification.
     *   **1**: The email address passes the verification.
     *
     * @example 1
     *
     * @var int
     */
    public $emailVerificationStatus;

    /**
     * @description The number of days from the expiration date of the domain name to the current date.
     *
     * @example 356
     *
     * @var int
     */
    public $expirationCurrDateDiff;

    /**
     * @description The expiration date.
     *
     * @example 2019-12-07 17:02:13
     *
     * @var string
     */
    public $expirationDate;

    /**
     * @description The timestamp generated when the domain name expired.
     *
     * @example 1625111915000
     *
     * @var int
     */
    public $expirationDateLong;

    /**
     * @description Indicates whether the domain name expires. Valid values:
     *
     *   **1**: The domain name does not expire.
     *   **2**: The domain name expires.
     *
     * @example 1
     *
     * @var string
     */
    public $expirationDateStatus;

    /**
     * @description The instance ID of the domain name.
     *
     * @example S20179H1BBI9****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether the domain name is a premium domain name.
     *
     * @example false
     *
     * @var bool
     */
    public $premium;

    /**
     * @description The status of real-name verification for the domain name. Valid values:
     *
     *   **NONAUDIT**: The real-name verification is not performed.
     *   **SUCCEED**: The real-name verification is successful.
     *   **FAILED**: The real-name verification fails.
     *   **AUDITING**: The real-name verification is in progress.
     *
     * @example NONAUDIT
     *
     * @var string
     */
    public $realNameStatus;

    /**
     * @description The name of the contact.
     *
     * @example Test litm
     *
     * @var string
     */
    public $registrantName;

    /**
     * @description The registrant of the domain name.
     *
     * @example Test litm
     *
     * @var string
     */
    public $registrantOrganization;

    /**
     * @description The type of contact who registers the domain name. Valid values:
     *
     *   **1**: individual.
     *   **2**: enterprise.
     *
     * @example 1
     *
     * @var string
     */
    public $registrantType;

    /**
     * @description The status of the information about the domain name registrant. Valid values:
     *
     *   **PENDING**: The information about the domain name registrant is being modified.
     *   **NORMAL**: normal.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $registrantUpdatingStatus;

    /**
     * @description The time when the domain name was registered.
     *
     * @example 2017-12-07 17:02:13
     *
     * @var string
     */
    public $registrationDate;

    /**
     * @description The timestamp generated when the domain name was registered.
     *
     * @example 1584675448000
     *
     * @var int
     */
    public $registrationDateLong;

    /**
     * @description The remarks on the domain name.
     *
     * @var string
     */
    public $remark;

    /**
     * @description The request ID.
     *
     * @example 44101664-3E70-4F0E-89E5-CCB74BF*****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmw6bpc6n7zai
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags.
     *
     * @var tag
     */
    public $tag;

    /**
     * @description The transfer status of the domain name. Valid values:
     *
     *   **NORMAL**: The domain name is normal.
     *   **PENDING**: The domain name is being transferred out from Alibaba Cloud.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $transferOutStatus;

    /**
     * @description The status of the transfer lock for the domain name. Valid values:
     *
     *   **NONE_SETTING**: No transfer lock is configured.
     *   **OPEN**: The transfer lock is enabled.
     *   **CLOSE**: The transfer lock is disabled.
     *
     * @example CLOSE
     *
     * @var string
     */
    public $transferProhibitionLock;

    /**
     * @description The status of the security lock for the domain name. Valid values:
     *
     *   **NONE_SETTING**: No security lock is configured.
     *   **OPEN**: The security lock is enabled.
     *   **CLOSE**: The security lock is disabled.
     *
     * @example CLOSE
     *
     * @var string
     */
    public $updateProhibitionLock;

    /**
     * @description The user ID.
     *
     * @example 121000000****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The Chinese name of the domain name contact.
     *
     * @var string
     */
    public $zhRegistrantName;

    /**
     * @description The Chinese name of the domain name registrant.
     *
     * @var string
     */
    public $zhRegistrantOrganization;
    protected $_name = [
        'dnsList'                      => 'DnsList',
        'domainGroupId'                => 'DomainGroupId',
        'domainGroupName'              => 'DomainGroupName',
        'domainName'                   => 'DomainName',
        'domainNameProxyService'       => 'DomainNameProxyService',
        'domainNameVerificationStatus' => 'DomainNameVerificationStatus',
        'domainStatus'                 => 'DomainStatus',
        'domainType'                   => 'DomainType',
        'email'                        => 'Email',
        'emailVerificationClientHold'  => 'EmailVerificationClientHold',
        'emailVerificationStatus'      => 'EmailVerificationStatus',
        'expirationCurrDateDiff'       => 'ExpirationCurrDateDiff',
        'expirationDate'               => 'ExpirationDate',
        'expirationDateLong'           => 'ExpirationDateLong',
        'expirationDateStatus'         => 'ExpirationDateStatus',
        'instanceId'                   => 'InstanceId',
        'premium'                      => 'Premium',
        'realNameStatus'               => 'RealNameStatus',
        'registrantName'               => 'RegistrantName',
        'registrantOrganization'       => 'RegistrantOrganization',
        'registrantType'               => 'RegistrantType',
        'registrantUpdatingStatus'     => 'RegistrantUpdatingStatus',
        'registrationDate'             => 'RegistrationDate',
        'registrationDateLong'         => 'RegistrationDateLong',
        'remark'                       => 'Remark',
        'requestId'                    => 'RequestId',
        'resourceGroupId'              => 'ResourceGroupId',
        'tag'                          => 'Tag',
        'transferOutStatus'            => 'TransferOutStatus',
        'transferProhibitionLock'      => 'TransferProhibitionLock',
        'updateProhibitionLock'        => 'UpdateProhibitionLock',
        'userId'                       => 'UserId',
        'zhRegistrantName'             => 'ZhRegistrantName',
        'zhRegistrantOrganization'     => 'ZhRegistrantOrganization',
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
        if (null !== $this->domainGroupId) {
            $res['DomainGroupId'] = $this->domainGroupId;
        }
        if (null !== $this->domainGroupName) {
            $res['DomainGroupName'] = $this->domainGroupName;
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
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
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
        if (null !== $this->expirationCurrDateDiff) {
            $res['ExpirationCurrDateDiff'] = $this->expirationCurrDateDiff;
        }
        if (null !== $this->expirationDate) {
            $res['ExpirationDate'] = $this->expirationDate;
        }
        if (null !== $this->expirationDateLong) {
            $res['ExpirationDateLong'] = $this->expirationDateLong;
        }
        if (null !== $this->expirationDateStatus) {
            $res['ExpirationDateStatus'] = $this->expirationDateStatus;
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
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = null !== $this->tag ? $this->tag->toMap() : null;
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
        if (null !== $this->zhRegistrantName) {
            $res['ZhRegistrantName'] = $this->zhRegistrantName;
        }
        if (null !== $this->zhRegistrantOrganization) {
            $res['ZhRegistrantOrganization'] = $this->zhRegistrantOrganization;
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
        if (isset($map['DnsList'])) {
            $model->dnsList = dnsList::fromMap($map['DnsList']);
        }
        if (isset($map['DomainGroupId'])) {
            $model->domainGroupId = $map['DomainGroupId'];
        }
        if (isset($map['DomainGroupName'])) {
            $model->domainGroupName = $map['DomainGroupName'];
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
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
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
        if (isset($map['ExpirationCurrDateDiff'])) {
            $model->expirationCurrDateDiff = $map['ExpirationCurrDateDiff'];
        }
        if (isset($map['ExpirationDate'])) {
            $model->expirationDate = $map['ExpirationDate'];
        }
        if (isset($map['ExpirationDateLong'])) {
            $model->expirationDateLong = $map['ExpirationDateLong'];
        }
        if (isset($map['ExpirationDateStatus'])) {
            $model->expirationDateStatus = $map['ExpirationDateStatus'];
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
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = tag::fromMap($map['Tag']);
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
        if (isset($map['ZhRegistrantName'])) {
            $model->zhRegistrantName = $map['ZhRegistrantName'];
        }
        if (isset($map['ZhRegistrantOrganization'])) {
            $model->zhRegistrantOrganization = $map['ZhRegistrantOrganization'];
        }

        return $model;
    }
}
