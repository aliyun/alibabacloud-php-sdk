<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;

use AlibabaCloud\Dara\Model;

class ldapConfig extends Model
{
    /**
     * @var string
     */
    public $administratorPassword;

    /**
     * @var string
     */
    public $administratorUsername;

    /**
     * @var string
     */
    public $certificateFingerprintStatus;

    /**
     * @var string[]
     */
    public $certificateFingerprints;

    /**
     * @var string
     */
    public $groupMemberAttributeName;

    /**
     * @var string
     */
    public $groupObjectClass;

    /**
     * @var string
     */
    public $groupObjectClassCustomFilter;

    /**
     * @var string
     */
    public $ldapProtocol;

    /**
     * @var string
     */
    public $ldapServerHost;

    /**
     * @var int
     */
    public $ldapServerPort;

    /**
     * @var string
     */
    public $organizationUnitObjectClass;

    /**
     * @var string
     */
    public $startTlsStatus;

    /**
     * @var string
     */
    public $userLoginIdentifier;

    /**
     * @var string
     */
    public $userObjectClass;

    /**
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

    public function validate()
    {
        if (\is_array($this->certificateFingerprints)) {
            Model::validateArray($this->certificateFingerprints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->certificateFingerprints)) {
                $res['CertificateFingerprints'] = [];
                $n1 = 0;
                foreach ($this->certificateFingerprints as $item1) {
                    $res['CertificateFingerprints'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->certificateFingerprints = [];
                $n1 = 0;
                foreach ($map['CertificateFingerprints'] as $item1) {
                    $model->certificateFingerprints[$n1] = $item1;
                    ++$n1;
                }
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
