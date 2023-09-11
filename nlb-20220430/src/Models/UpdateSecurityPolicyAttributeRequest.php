<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\Tea\Model;

class UpdateSecurityPolicyAttributeRequest extends Model
{
    /**
     * @description The supported cipher suites, which are determined by the TLS protocol version. You can specify at most 32 cipher suites.
     *
     * TLS 1.0 and TLS 1.1 support the following cipher suites:
     *
     *   **ECDHE-ECDSA-AES128-SHA**
     *   **ECDHE-ECDSA-AES256-SHA**
     *   **ECDHE-RSA-AES128-SHA**
     *   **ECDHE-RSA-AES256-SHA**
     *   **AES128-SHA**
     *   **AES256-SHA**
     *   **DES-CBC3-SHA**
     *
     * TLS 1.2 supports the following cipher suites:
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
     * TLS 1.3 supports the following cipher suites:
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
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * > If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false**(default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The region ID of the NLB instance.
     *
     * You can call the [DescribeRegions](~~443657~~) operation to obtain the region ID.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the TLS security policy.
     *
     * @example tls-bp14bb1e7dll4f****
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description The name of the security policy.
     *
     * The name must be 1 to 200 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-).
     * @example TLSCipherPolicy
     *
     * @var string
     */
    public $securityPolicyName;

    /**
     * @description The supported versions of the Transport Layer Security (TLS) protocol. Valid values: **TLSv1.0**, **TLSv1.1**, **TLSv1.2**, and **TLSv1.3**. You can specify at most four TLS protocol versions.
     *
     * @var string[]
     */
    public $tlsVersions;
    protected $_name = [
        'ciphers'            => 'Ciphers',
        'clientToken'        => 'ClientToken',
        'dryRun'             => 'DryRun',
        'regionId'           => 'RegionId',
        'securityPolicyId'   => 'SecurityPolicyId',
        'securityPolicyName' => 'SecurityPolicyName',
        'tlsVersions'        => 'TlsVersions',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }
        if (null !== $this->securityPolicyName) {
            $res['SecurityPolicyName'] = $this->securityPolicyName;
        }
        if (null !== $this->tlsVersions) {
            $res['TlsVersions'] = $this->tlsVersions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSecurityPolicyAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ciphers'])) {
            if (!empty($map['Ciphers'])) {
                $model->ciphers = $map['Ciphers'];
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }
        if (isset($map['SecurityPolicyName'])) {
            $model->securityPolicyName = $map['SecurityPolicyName'];
        }
        if (isset($map['TlsVersions'])) {
            if (!empty($map['TlsVersions'])) {
                $model->tlsVersions = $map['TlsVersions'];
            }
        }

        return $model;
    }
}
