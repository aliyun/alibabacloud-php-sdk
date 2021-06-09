<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class securityPolicies extends Model
{
    /**
     * @description 加密套件
     *
     * @var string[]
     */
    public $ciphers;

    /**
     * @description 资源组id
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description 安全策略id
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description 安全策略名称
     *
     * @var string
     */
    public $securityPolicyName;

    /**
     * @description 状态
     *
     * @var string
     */
    public $securityPolicyStatus;

    /**
     * @description TLS策略
     *
     * @var string[]
     */
    public $TLSVersions;
    protected $_name = [
        'ciphers'              => 'Ciphers',
        'resourceGroupId'      => 'ResourceGroupId',
        'securityPolicyId'     => 'SecurityPolicyId',
        'securityPolicyName'   => 'SecurityPolicyName',
        'securityPolicyStatus' => 'SecurityPolicyStatus',
        'TLSVersions'          => 'TLSVersions',
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

        return $model;
    }
}
