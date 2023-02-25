<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class ModifyDcdnWafPolicyRequest extends Model
{
    /**
     * @description The ID of the protection policy that you want to modify. You can specify only one ID in each request.
     *
     * @example 1000001
     *
     * @var int
     */
    public $policyId;

    /**
     * @description The new name of the protection policy.
     *
     * >  You must specify PolicyName or PolicyStatus.
     * @example policy_test
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The new status of the protection policy. Valid values:
     *
     *   **on**
     *   **off**
     *
     * >  You must specify PolicyName or PolicyStatus.
     * @example on
     *
     * @var string
     */
    public $policyStatus;
    protected $_name = [
        'policyId'     => 'PolicyId',
        'policyName'   => 'PolicyName',
        'policyStatus' => 'PolicyStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyStatus) {
            $res['PolicyStatus'] = $this->policyStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDcdnWafPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyStatus'])) {
            $model->policyStatus = $map['PolicyStatus'];
        }

        return $model;
    }
}
