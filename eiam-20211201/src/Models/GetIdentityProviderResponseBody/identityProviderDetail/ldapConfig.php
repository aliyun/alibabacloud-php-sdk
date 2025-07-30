<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail;

use AlibabaCloud\Tea\Model;

class ldapConfig extends Model
{
    /**
     * @description Administrator password.
     *
     * @example XXXX
     *
     * @var string
     */
    public $administratorPassword;

    /**
     * @description Administrator username.
     *
     * @example example.com
     *
     * @var string
     */
    public $administratorUsername;

    /**
     * @description Whether to verify the fingerprint certificate.
     *
     * @example enabled
     *
     * @var string
     */
    public $certificateFingerprintStatus;

    /**
     * @description Certificate fingerprint list.
     *
     * @var string[]
     */
    public $certificateFingerprints;

    /**
     * @description Ldap protocol.
     *
     * @example ldap
     *
     * @var string
     */
    public $ldapProtocol;

    /**
     * @description ldap server host.
     *
     * @example 127.xx.xx.100
     *
     * @var string
     */
    public $ldapServerHost;

    /**
     * @description ldap server port.
     *
     * @example 389
     *
     * @var int
     */
    public $ldapServerPort;

    /**
     * @description StartTls status.
     *
     * @example enabled
     *
     * @var string
     */
    public $startTlsStatus;
    protected $_name = [
        'administratorPassword' => 'AdministratorPassword',
        'administratorUsername' => 'AdministratorUsername',
        'certificateFingerprintStatus' => 'CertificateFingerprintStatus',
        'certificateFingerprints' => 'CertificateFingerprints',
        'ldapProtocol' => 'LdapProtocol',
        'ldapServerHost' => 'LdapServerHost',
        'ldapServerPort' => 'LdapServerPort',
        'startTlsStatus' => 'StartTlsStatus',
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
        if (null !== $this->ldapProtocol) {
            $res['LdapProtocol'] = $this->ldapProtocol;
        }
        if (null !== $this->ldapServerHost) {
            $res['LdapServerHost'] = $this->ldapServerHost;
        }
        if (null !== $this->ldapServerPort) {
            $res['LdapServerPort'] = $this->ldapServerPort;
        }
        if (null !== $this->startTlsStatus) {
            $res['StartTlsStatus'] = $this->startTlsStatus;
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
        if (isset($map['LdapProtocol'])) {
            $model->ldapProtocol = $map['LdapProtocol'];
        }
        if (isset($map['LdapServerHost'])) {
            $model->ldapServerHost = $map['LdapServerHost'];
        }
        if (isset($map['LdapServerPort'])) {
            $model->ldapServerPort = $map['LdapServerPort'];
        }
        if (isset($map['StartTlsStatus'])) {
            $model->startTlsStatus = $map['StartTlsStatus'];
        }

        return $model;
    }
}
