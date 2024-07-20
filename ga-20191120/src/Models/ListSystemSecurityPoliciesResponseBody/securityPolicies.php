<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListSystemSecurityPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class securityPolicies extends Model
{
    /**
     * @description The supported cipher suites. The value of this parameter is determined by the value of **TLSVersions**.
     *
     * The specified cipher suites must be supported by at least one value of **TLSVersions**. For example, if you set TLSVersions to **TLSv1.3**, you must specify cipher suites that are supported by **TLSv1.3**.
     *
     *   Valid values when TLSVersions is set to **TLSv1.0** or **TLSv1.1**:
     *
     *   ECDHE-ECDSA-AES128-SHA
     *   ECDHE-ECDSA-AES256-SHA
     *   ECDHE-RSA-AES128-SHA
     *   ECDHE-RSA-AES256-SHA
     *   AES128-SHA
     *   AES256-SHA
     *   DES-CBC3-SHA
     *
     *   Valid values when TLSVersions is set to **TLSv1.2**:
     *
     *   ECDHE-ECDSA-AES128-SHA
     *   ECDHE-ECDSA-AES256-SHA
     *   ECDHE-RSA-AES128-SHA
     *   ECDHE-RSA-AES256-SHA
     *   AES128-SHA
     *   AES256-SHA
     *   DES-CBC3-SHA
     *   ECDHE-ECDSA-AES128-GCM-SHA256
     *   ECDHE-ECDSA-AES256-GCM-SHA384
     *   ECDHE-ECDSA-AES128-SHA256
     *   ECDHE-ECDSA-AES256-SHA384
     *   ECDHE-RSA-AES128-GCM-SHA256
     *   ECDHE-RSA-AES256-GCM-SHA384
     *   ECDHE-RSA-AES128-SHA256
     *   ECDHE-RSA-AES256-SHA384
     *   AES128-GCM-SHA256
     *   AES256-GCM-SHA384
     *   AES128-SHA256
     *   AES256-SHA256
     *
     *   Valid values when TLSVersions is set to **TLSv1.3**:
     *
     *   TLS_AES_128_GCM_SHA256
     *   TLS_AES_256_GCM_SHA384
     *   TLS_CHACHA20_POLY1305_SHA256
     *   TLS_AES_128_CCM_SHA256
     *   TLS_AES_128_CCM_8_SHA256
     *
     * @var string[]
     */
    public $ciphers;

    /**
     * @description The ID of the TLS security policy.
     *
     * @example tls_cipher_policy_1_1
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description The supported TLS versions. Valid values: **TLSv1.0**, **TLSv1.1**, **TLSv1.2**, and **TLSv1.3**.
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
