<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\SDK\Nlb\V20220430\Models\CreateSecurityPolicyRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateSecurityPolicyRequest extends Model
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
     *   **TLS_AES_128_GCM_SHA256**
     *   **TLS_AES_256_GCM_SHA384**
     *   **TLS_CHACHA20_POLY1305_SHA256**
     *   **TLS_AES_128_CCM_SHA256**
     *   **TLS_AES_128_CCM_8_SHA256**
     *
     * This parameter is required.
     * @var string[]
     */
    public $ciphers;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must ensure that it is unique among all requests. ClientToken can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether only to precheck the request. Valid values:
     *
     *   **true**: checks the request but does not create the security policy. The system prechecks the required parameters, request syntax, and limits. If the request fails the precheck, an error message is returned. If the request passes the precheck, the `DryRunOperation` error code is returned.
     *   **false** (default): sends the request. If the request passes the precheck, an HTTP 2xx status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the region where the NLB instance is deployed.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/443657.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The name of the security policy.
     *
     * The name must be 1 to 200 characters in length, and can contain letters, digits, periods (.), underscores (_), and hyphens (-).
     * @example TLSCipherPolicy
     *
     * @var string
     */
    public $securityPolicyName;

    /**
     * @description 标签列表。
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The supported versions of the Transport Layer Security (TLS) protocol. Valid values: **TLSv1.0**, **TLSv1.1**, **TLSv1.2**, and **TLSv1.3**.
     *
     * This parameter is required.
     * @var string[]
     */
    public $tlsVersions;
    protected $_name = [
        'ciphers'            => 'Ciphers',
        'clientToken'        => 'ClientToken',
        'dryRun'             => 'DryRun',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
        'securityPolicyName' => 'SecurityPolicyName',
        'tag'                => 'Tag',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityPolicyName) {
            $res['SecurityPolicyName'] = $this->securityPolicyName;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tlsVersions) {
            $res['TlsVersions'] = $this->tlsVersions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSecurityPolicyRequest
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityPolicyName'])) {
            $model->securityPolicyName = $map['SecurityPolicyName'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TlsVersions'])) {
            if (!empty($map['TlsVersions'])) {
                $model->tlsVersions = $map['TlsVersions'];
            }
        }

        return $model;
    }
}
