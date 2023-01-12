<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListSystemSecurityPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class securityPolicies extends Model
{
    /**
     * @description The supported cipher suites, which depend on the **TLSVersions** value.
     *
     * The specified cipher suites must be supported by at least one **TLS protocol version** that you select. For example, if you set the TLSVersions.N parameter to **TLSv1.3**, you can specify only cipher suites that are supported by **TLSv1.3**.
     *
     *   **TLSv1.0** and **TLSv1.1** support the following cipher suites:
     *
     *   **ECDHE-ECDSA-AES128-SHA**
     *   **ECDHE-ECDSA-AES256-SHA**
     *   **ECDHE-RSA-AES128-SHA**
     *   **ECDHE-RSA-AES256-SHA**
     *   **AES128-SHA**
     *   **AES256-SHA**
     *   **DES-CBC3-SHA**
     *
     *   **TLS 1.2** supports the following cipher suites:
     *
     *   **ECDHE-ECDSA-AES128-SHA**
     *   **ECDHE-ECDSA-AES256-SHA**
     *   **ECDHE-RSA-AES128-SHA**
     *   **ECDHE-RSA-AES256-SHA**
     *   **AES128-SHA**
     *   **AES256-SHA**
     *   **DES-CBC3-SHA**
     *   **ECDHE-ECDSA-AES128-GCM-SHA256**
     *   **ECDHE-ECDSA-AES256-GCM-SHA384**
     *   **ECDHE-ECDSA-AES128-SHA256**
     *   **ECDHE-ECDSA-AES256-SHA384**
     *   **ECDHE-RSA-AES128-GCM-SHA256**
     *   **ECDHE-RSA-AES256-GCM-SHA384**
     *   **ECDHE-RSA-AES128-SHA256**
     *   **ECDHE-RSA-AES256-SHA384**
     *   **AES128-GCM-SHA256**
     *   **AES256-GCM-SHA384**
     *   **AES128-SHA256**
     *   **AES256-SHA256**
     *
     *   **TLSv1.3** supports the following cipher suites:
     *
     *   **TLS_AES\_128\_GCM_SHA256**
     *   **TLS_AES\_256\_GCM_SHA384**
     *   **TLS_CHACHA20\_POLY1305\_SHA256**
     *   **TLS_AES\_128\_CCM_SHA256**
     *   **TLS_AES\_128\_CCM\_8\_SHA256**
     *
     * @var string[]
     */
    public $ciphers;

    /**
     * @description The ID of the security policy.
     *
     * @example tls_cipher_policy_1_1
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description The supported TLS protocol versions. Valid values: **TLSv1.0**, **TLSv1.1**, **TLSv1.2**, and **TLSv1.3**.
     *
     * @var string[]
     */
    public $tlsVersions;
    protected $_name = [
        'ciphers'          => 'Ciphers',
        'securityPolicyId' => 'SecurityPolicyId',
        'tlsVersions'      => 'TlsVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ciphers) {
            $res['Ciphers'] = $this->ciphers;
        }
        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }
        if (null !== $this->tlsVersions) {
            $res['TlsVersions'] = $this->tlsVersions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ciphers'])) {
            if (!empty($map['Ciphers'])) {
                $model->ciphers = $map['Ciphers'];
            }
        }
        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }
        if (isset($map['TlsVersions'])) {
            if (!empty($map['TlsVersions'])) {
                $model->tlsVersions = $map['TlsVersions'];
            }
        }

        return $model;
    }
}
