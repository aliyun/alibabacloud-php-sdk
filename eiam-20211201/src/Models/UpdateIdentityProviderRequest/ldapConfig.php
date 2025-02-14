<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest;

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
                $n1                             = 0;
                foreach ($this->certificateFingerprints as $item1) {
                    $res['CertificateFingerprints'][$n1++] = $item1;
                }
            }
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
                $n1                             = 0;
                foreach ($map['CertificateFingerprints'] as $item1) {
                    $model->certificateFingerprints[$n1++] = $item1;
                }
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
