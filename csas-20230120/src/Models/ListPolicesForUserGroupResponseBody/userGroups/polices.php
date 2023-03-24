<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForUserGroupResponseBody\userGroups;

use AlibabaCloud\Tea\Model;

class polices extends Model
{
    /**
     * @example private_access_policy_name
     *
     * @var string
     */
    public $name;

    /**
     * @example pa-policy-ce2bf7236fab****
     *
     * @var string
     */
    public $policyId;

    /**
     * @example PrivateAccess
     *
     * @var string
     */
    public $policyType;
    protected $_name = [
        'name'       => 'Name',
        'policyId'   => 'PolicyId',
        'policyType' => 'PolicyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return polices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
