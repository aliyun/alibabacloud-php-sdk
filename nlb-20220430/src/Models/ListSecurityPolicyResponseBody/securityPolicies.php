<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\ListSecurityPolicyResponseBody;

use AlibabaCloud\SDK\Nlb\V20220430\Models\ListSecurityPolicyResponseBody\securityPolicies\relatedListeners;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListSecurityPolicyResponseBody\securityPolicies\tags;
use AlibabaCloud\Tea\Model;

class securityPolicies extends Model
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
     * @example ECDHE-ECDSA-AES128-SHA
     *
     * @var string
     */
    public $ciphers;

    /**
     * @description The region ID of the NLB instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The listeners that are associated with the NLB instance.
     *
     * @var relatedListeners[]
     */
    public $relatedListeners;

    /**
     * @description The resource group ID.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the TLS security policy.
     *
     * @example tls-bp14bb1e7dll4f****
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description The name of the TLS security policy.
     *
     * @example TLSCipherPolicy
     *
     * @var string
     */
    public $securityPolicyName;

    /**
     * @description The status of the TLS security policy. Valid values:
     *
     *   **Configuring**
     *   **Available**
     *
     * @example Available
     *
     * @var string
     */
    public $securityPolicyStatus;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The supported versions of the TLS protocol. Valid values: **TLSv1.0**, **TLSv1.1**, **TLSv1.2**, and **TLSv1.3**.
     *
     * @example TLSv1.0
     *
     * @var string
     */
    public $tlsVersion;
    protected $_name = [
        'ciphers'              => 'Ciphers',
        'regionId'             => 'RegionId',
        'relatedListeners'     => 'RelatedListeners',
        'resourceGroupId'      => 'ResourceGroupId',
        'securityPolicyId'     => 'SecurityPolicyId',
        'securityPolicyName'   => 'SecurityPolicyName',
        'securityPolicyStatus' => 'SecurityPolicyStatus',
        'tags'                 => 'Tags',
        'tlsVersion'           => 'TlsVersion',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->relatedListeners) {
            $res['RelatedListeners'] = [];
            if (null !== $this->relatedListeners && \is_array($this->relatedListeners)) {
                $n = 0;
                foreach ($this->relatedListeners as $item) {
                    $res['RelatedListeners'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }
        if (null !== $this->securityPolicyName) {
            $res['SecurityPolicyName'] = $this->securityPolicyName;
        }
        if (null !== $this->securityPolicyStatus) {
            $res['SecurityPolicyStatus'] = $this->securityPolicyStatus;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tlsVersion) {
            $res['TlsVersion'] = $this->tlsVersion;
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
            $model->ciphers = $map['Ciphers'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RelatedListeners'])) {
            if (!empty($map['RelatedListeners'])) {
                $model->relatedListeners = [];
                $n                       = 0;
                foreach ($map['RelatedListeners'] as $item) {
                    $model->relatedListeners[$n++] = null !== $item ? relatedListeners::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }
        if (isset($map['SecurityPolicyName'])) {
            $model->securityPolicyName = $map['SecurityPolicyName'];
        }
        if (isset($map['SecurityPolicyStatus'])) {
            $model->securityPolicyStatus = $map['SecurityPolicyStatus'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TlsVersion'])) {
            $model->tlsVersion = $map['TlsVersion'];
        }

        return $model;
    }
}
