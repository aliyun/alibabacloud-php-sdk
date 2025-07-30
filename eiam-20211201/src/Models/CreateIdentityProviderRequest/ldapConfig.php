<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;

use AlibabaCloud\Tea\Model;

class ldapConfig extends Model
{
    /**
     * @description Administrator password.
     *
     * @example xxxx
     *
     * @var string
     */
    public $administratorPassword;

    /**
     * @description Administrator username.
     *
     * @example DC=example,DC=com
     *
     * @var string
     */
    public $administratorUsername;

    /**
     * @description Whether to verify the certificate fingerprint. Value range:
     *
     * - Disabled: disabled
     *
     * - Enabled: enabled
     *
     * @example enabled
     *
     * @var string
     */
    public $certificateFingerprintStatus;

    /**
     * @description List of certificate fingerprints.
     *
     * @var string[]
     */
    public $certificateFingerprints;

    /**
     * @description Group member attribute name.
     *
     * @example member
     *
     * @var string
     */
    public $groupMemberAttributeName;

    /**
     * @description Group ObjectClass.
     *
     * @example group
     *
     * @var string
     */
    public $groupObjectClass;

    /**
     * @description Custom filter for Group ObjectClass.
     *
     * @example (|(cn=test)(group=test@test.com))
     *
     * @var string
     */
    public $groupObjectClassCustomFilter;

    /**
     * @description Communication protocol.
     *
     * @example ldap
     *
     * @var string
     */
    public $ldapProtocol;

    /**
     * @description AD/LDAP server address.
     *
     * @example 123.xx.xx.89
     *
     * @var string
     */
    public $ldapServerHost;

    /**
     * @description AD/LDAP port number.
     *
     * @example 636
     *
     * @var int
     */
    public $ldapServerPort;

    /**
     * @description Organization Unit ObjectClass.
     *
     * @example organizationUnit,top
     *
     * @var string
     */
    public $organizationUnitObjectClass;

    /**
     * @description Whether startTLS is enabled. Value range:
     * - Disabled: disabled
     *
     * - Enabled: enabled
     *
     * @example enabled
     *
     * @var string
     */
    public $startTlsStatus;

    /**
     * @description User login identifier.
     *
     * @example userPrincipalName, mail
     *
     * @var string
     */
    public $userLoginIdentifier;

    /**
     * @description User ObjectClass.
     *
     * @example person,user
     *
     * @var string
     */
    public $userObjectClass;

    /**
     * @description Custom filter for User ObjectClass.
     *
     * @example (|(cn=test)(mail=test@test.com))
     *
     * @var string
     */
    public $userObjectClassCustomFilter;
    protected $_name = [
        'administratorPassword' => 'AdministratorPassword',
        'administratorUsername' => 'AdministratorUsername',
        'certificateFingerprintStatus' => 'CertificateFingerprintStatus',
        'certificateFingerprints' => 'CertificateFingerprints',
        'groupMemberAttributeName' => 'GroupMemberAttributeName',
        'groupObjectClass' => 'GroupObjectClass',
        'groupObjectClassCustomFilter' => 'GroupObjectClassCustomFilter',
        'ldapProtocol' => 'LdapProtocol',
        'ldapServerHost' => 'LdapServerHost',
        'ldapServerPort' => 'LdapServerPort',
        'organizationUnitObjectClass' => 'OrganizationUnitObjectClass',
        'startTlsStatus' => 'StartTlsStatus',
        'userLoginIdentifier' => 'UserLoginIdentifier',
        'userObjectClass' => 'UserObjectClass',
        'userObjectClassCustomFilter' => 'UserObjectClassCustomFilter',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->administratorPassword) {
            $res['AdministratorPassword'] = $this->administratorPassword;
        }
        if (null !== $this->administratorUsername) {
            $res['AdministratorUsername'] = $this->administratorUsername;
        }
        if (null !== $this->certificateFingerprintStatus) {
            $res['CertificateFingerprintStatus'] = $this->certificateFingerprintStatus;
        }
        if (null !== $this->certificateFingerprints) {
            $res['CertificateFingerprints'] = $this->certificateFingerprints;
        }
        if (null !== $this->groupMemberAttributeName) {
            $res['GroupMemberAttributeName'] = $this->groupMemberAttributeName;
        }
        if (null !== $this->groupObjectClass) {
            $res['GroupObjectClass'] = $this->groupObjectClass;
        }
        if (null !== $this->groupObjectClassCustomFilter) {
            $res['GroupObjectClassCustomFilter'] = $this->groupObjectClassCustomFilter;
        }
        if (null !== $this->ldapProtocol) {
            $res['LdapProtocol'] = $this->ldapProtocol;
        }
        if (null !== $this->ldapServerHost) {
            $res['LdapServerHost'] = $this->ldapServerHost;
        }
        if (null !== $this->ldapServerPort) {
            $res['LdapServerPort'] = $this->ldapServerPort;
        }
        if (null !== $this->organizationUnitObjectClass) {
            $res['OrganizationUnitObjectClass'] = $this->organizationUnitObjectClass;
        }
        if (null !== $this->startTlsStatus) {
            $res['StartTlsStatus'] = $this->startTlsStatus;
        }
        if (null !== $this->userLoginIdentifier) {
            $res['UserLoginIdentifier'] = $this->userLoginIdentifier;
        }
        if (null !== $this->userObjectClass) {
            $res['UserObjectClass'] = $this->userObjectClass;
        }
        if (null !== $this->userObjectClassCustomFilter) {
            $res['UserObjectClassCustomFilter'] = $this->userObjectClassCustomFilter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ldapConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdministratorPassword'])) {
            $model->administratorPassword = $map['AdministratorPassword'];
        }
        if (isset($map['AdministratorUsername'])) {
            $model->administratorUsername = $map['AdministratorUsername'];
        }
        if (isset($map['CertificateFingerprintStatus'])) {
            $model->certificateFingerprintStatus = $map['CertificateFingerprintStatus'];
        }
        if (isset($map['CertificateFingerprints'])) {
            if (!empty($map['CertificateFingerprints'])) {
                $model->certificateFingerprints = $map['CertificateFingerprints'];
            }
        }
        if (isset($map['GroupMemberAttributeName'])) {
            $model->groupMemberAttributeName = $map['GroupMemberAttributeName'];
        }
        if (isset($map['GroupObjectClass'])) {
            $model->groupObjectClass = $map['GroupObjectClass'];
        }
        if (isset($map['GroupObjectClassCustomFilter'])) {
            $model->groupObjectClassCustomFilter = $map['GroupObjectClassCustomFilter'];
        }
        if (isset($map['LdapProtocol'])) {
            $model->ldapProtocol = $map['LdapProtocol'];
        }
        if (isset($map['LdapServerHost'])) {
            $model->ldapServerHost = $map['LdapServerHost'];
        }
        if (isset($map['LdapServerPort'])) {
            $model->ldapServerPort = $map['LdapServerPort'];
        }
        if (isset($map['OrganizationUnitObjectClass'])) {
            $model->organizationUnitObjectClass = $map['OrganizationUnitObjectClass'];
        }
        if (isset($map['StartTlsStatus'])) {
            $model->startTlsStatus = $map['StartTlsStatus'];
        }
        if (isset($map['UserLoginIdentifier'])) {
            $model->userLoginIdentifier = $map['UserLoginIdentifier'];
        }
        if (isset($map['UserObjectClass'])) {
            $model->userObjectClass = $map['UserObjectClass'];
        }
        if (isset($map['UserObjectClassCustomFilter'])) {
            $model->userObjectClassCustomFilter = $map['UserObjectClassCustomFilter'];
        }

        return $model;
    }
}
