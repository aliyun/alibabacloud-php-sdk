<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail;

use AlibabaCloud\Tea\Model;

class ldapConfig extends Model
{
    /**
     * @description 管理员密码
     *
     * @example XXXX
     *
     * @var string
     */
    public $administratorPassword;

    /**
     * @description 管理员账号
     *
     * @example example.com
     *
     * @var string
     */
    public $administratorUsername;

    /**
     * @description 是否验证指纹证书
     *
     * @example enabled
     *
     * @var string
     */
    public $certificateFingerprintStatus;

    /**
     * @description 证书指纹列表
     *
     * @var string[]
     */
    public $certificateFingerprints;

    /**
     * @description 通信协议
     *
     * @example ldap
     *
     * @var string
     */
    public $ldapProtocol;

    /**
     * @description ad/ldap 服务器地址
     *
     * @example 127.xx.xx.100
     *
     * @var string
     */
    public $ldapServerHost;

    /**
     * @description ad/ldap 服务器地址
     *
     * @example 389
     *
     * @var int
     */
    public $ldapServerPort;

    /**
     * @description startTls是否开启
     *
     * @example enabled
     *
     * @var string
     */
    public $startTlsStatus;
    protected $_name = [
        'administratorPassword'        => 'AdministratorPassword',
        'administratorUsername'        => 'AdministratorUsername',
        'certificateFingerprintStatus' => 'CertificateFingerprintStatus',
        'certificateFingerprints'      => 'CertificateFingerprints',
        'ldapProtocol'                 => 'LdapProtocol',
        'ldapServerHost'               => 'LdapServerHost',
        'ldapServerPort'               => 'LdapServerPort',
        'startTlsStatus'               => 'StartTlsStatus',
    ];

    public function validate()
    {
    }

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
