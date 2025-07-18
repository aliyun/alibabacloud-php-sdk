<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class GetPrivateAccessPolicyRequest extends Model
{
    /**
     * @description Intranet access policy ID. The value can be obtained from:
     * - [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~): Query multiple intranet access policies in bulk.
     * - [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~): Create an intranet access policy.
     *
     * This parameter is required.
     *
     * @example pa-policy-63b2f1844b86****
     *
     * @var string
     */
    public $policyId;
    protected $_name = [
        'policyId' => 'PolicyId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPrivateAccessPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        return $model;
    }
}
