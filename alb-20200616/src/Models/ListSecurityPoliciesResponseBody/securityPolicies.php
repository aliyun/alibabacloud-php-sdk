<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPoliciesResponseBody;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPoliciesResponseBody\securityPolicies\tags;
use AlibabaCloud\Tea\Model;

class securityPolicies extends Model
{
    /**
     * @description The supported cipher suites.
     *
     * @var string[]
     */
    public $ciphers;

    /**
     * @description The time when the ACL was created. The time follows the `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2023-02-15T07:37:33Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the security policy.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description The name of the security policy.
     *
     * @example test-secrity
     *
     * @var string
     */
    public $securityPolicyName;

    /**
     * @description The status of the security policy. Valid values:
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
     * @description The supported TLS protocol versions.
     *
     * @var string[]
     */
    public $TLSVersions;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'ciphers'              => 'Ciphers',
        'createTime'           => 'CreateTime',
        'resourceGroupId'      => 'ResourceGroupId',
        'securityPolicyId'     => 'SecurityPolicyId',
        'securityPolicyName'   => 'SecurityPolicyName',
        'securityPolicyStatus' => 'SecurityPolicyStatus',
        'TLSVersions'          => 'TLSVersions',
        'tags'                 => 'Tags',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->TLSVersions) {
            $res['TLSVersions'] = $this->TLSVersions;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['TLSVersions'])) {
            if (!empty($map['TLSVersions'])) {
                $model->TLSVersions = $map['TLSVersions'];
            }
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

        return $model;
    }
}
