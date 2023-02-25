<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafPolicyValidDomainsResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafPolicyValidDomainsResponseBody\domains\policies;
use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @description The protected domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The policy that is bound to the domain name.
     *
     * @var policies[]
     */
    public $policies;

    /**
     * @description The ID of the protection policy.
     *
     * @example 1000001
     *
     * @var int
     */
    public $policyId;

    /**
     * @description The name of the protection policy.
     *
     * @example test1
     *
     * @var string
     */
    public $policyName;

    /**
     * @description Indicates whether the protection policy is the default policy. Valid values:
     *
     *   default: The protection policy is the default policy.
     *   custom: The protection policy is not the default policy.
     *
     * @example default
     *
     * @var string
     */
    public $policyType;
    protected $_name = [
        'domainName' => 'DomainName',
        'policies'   => 'Policies',
        'policyId'   => 'PolicyId',
        'policyName' => 'PolicyName',
        'policyType' => 'PolicyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->policies) {
            $res['Policies'] = [];
            if (null !== $this->policies && \is_array($this->policies)) {
                $n = 0;
                foreach ($this->policies as $item) {
                    $res['Policies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Policies'])) {
            if (!empty($map['Policies'])) {
                $model->policies = [];
                $n               = 0;
                foreach ($map['Policies'] as $item) {
                    $model->policies[$n++] = null !== $item ? policies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
