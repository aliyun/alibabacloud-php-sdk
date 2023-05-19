<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class CreateDcdnWafPolicyRequest extends Model
{
    /**
     * @description The ID of the protection policy that you created.
     *
     * @example waf_group
     *
     * @var string
     */
    public $defenseScene;

    /**
     * @description The ID of the protection policy that you created.
     *
     * @example policy_test
     *
     * @var string
     */
    public $policyName;

    /**
     * @description >*   You can call this operation up to 20 times per second per account.
     *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *
     * @example on
     *
     * @var string
     */
    public $policyStatus;

    /**
     * @description The ID of the request.
     *
     * @example default
     *
     * @var string
     */
    public $policyType;
    protected $_name = [
        'defenseScene' => 'DefenseScene',
        'policyName'   => 'PolicyName',
        'policyStatus' => 'PolicyStatus',
        'policyType'   => 'PolicyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseScene) {
            $res['DefenseScene'] = $this->defenseScene;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyStatus) {
            $res['PolicyStatus'] = $this->policyStatus;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDcdnWafPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseScene'])) {
            $model->defenseScene = $map['DefenseScene'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyStatus'])) {
            $model->policyStatus = $map['PolicyStatus'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
