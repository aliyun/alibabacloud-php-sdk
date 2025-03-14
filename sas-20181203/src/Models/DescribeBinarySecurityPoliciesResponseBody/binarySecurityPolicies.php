<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBinarySecurityPoliciesResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBinarySecurityPoliciesResponseBody\binarySecurityPolicies\clusters;
use AlibabaCloud\Tea\Model;

class binarySecurityPolicies extends Model
{
    /**
     * @description The information about clusters.
     *
     * @var clusters[]
     */
    public $clusters;

    /**
     * @description The name of the policy.
     *
     * @example logtail
     *
     * @var string
     */
    public $name;

    /**
     * @description The content of the policy. The value is in the JSON format. A key supports the following values:
     *
     *   **policyMode**: the type of the policy. Default value: requireAttestor.
     *   **requiredAttestors**: the required witnesses.
     *
     * @example {\\"PolicyMode\\":\\"requireAttestor\\",\\"RequiredAttestors\\":[\\"test-xcs-04-11-hhht\\"]}
     *
     * @var mixed[]
     */
    public $policy;

    /**
     * @description The description.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The status of the policy. Valid values:
     *
     *   **enabled**
     *   **disabled**
     *
     * @example enabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clusters' => 'Clusters',
        'name' => 'Name',
        'policy' => 'Policy',
        'remark' => 'Remark',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusters) {
            $res['Clusters'] = [];
            if (null !== $this->clusters && \is_array($this->clusters)) {
                $n = 0;
                foreach ($this->clusters as $item) {
                    $res['Clusters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return binarySecurityPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clusters'])) {
            if (!empty($map['Clusters'])) {
                $model->clusters = [];
                $n = 0;
                foreach ($map['Clusters'] as $item) {
                    $model->clusters[$n++] = null !== $item ? clusters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
