<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSceneDefensePoliciesResponseBody\policies;

use AlibabaCloud\Tea\Model;

class runtimePolicies extends Model
{
    /**
     * @description The protection rule that is applied when the policy takes effect.
     *
     * If you set **PolicyType** to **1**, the value is **{"cc_rule_enable": false }**. The value indicates that the Frequency Control policy is disabled.
     *
     * If you set **PolicyType** to **2**, the value is **{"ai_rule_enable": 0}**. The value indicates that the Intelligent Protection policy is disabled.
     * @example {"cc_rule_enable": false }
     *
     * @var string
     */
    public $newValue;

    /**
     * @description The protection policy whose status is changed when the policy takes effect. Valid values:
     *
     *   **1**: indicates that the Frequency Control policy is changed.
     *   **2**: indicates that the Intelligent Protection policy is changed.
     *
     * @example 1
     *
     * @var int
     */
    public $policyType;

    /**
     * @description The running status of the policy. Valid values:
     *
     *   **0**: The policy has not been issued or is restored.
     *   **1**: The policy is pending.
     *   **2**: The policy is being restored.
     *   **3**: The policy takes effect.
     *   **4**: The policy fails to take effect.
     *   **5**:The policy fails to be restored.
     *   **6**: The configurations of the protected objects for the policy does not exist because the configurations may be deleted.
     *
     * @example 3
     *
     * @var int
     */
    public $status;

    /**
     * @description The protection rule that is applied before the policy takes effect.
     *
     * If you set **PolicyType** to **1**, the value is **{"cc_rule_enable": true}**. The value indicates that the Frequency Control policy is enabled.
     *
     * If you set **PolicyType** to **2**, the value is **{"ai_rule_enable": 1}**. The value indicates that the Intelligent Protection policy is enabled.
     * @example {"cc_rule_enable": true}
     *
     * @var string
     */
    public $oldValue;
    protected $_name = [
        'newValue'   => 'NewValue',
        'policyType' => 'PolicyType',
        'status'     => 'Status',
        'oldValue'   => 'oldValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->oldValue) {
            $res['oldValue'] = $this->oldValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runtimePolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['oldValue'])) {
            $model->oldValue = $map['oldValue'];
        }

        return $model;
    }
}
