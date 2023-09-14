<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsForRegistrationPolicyResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsForRegistrationPolicyResponseBody\policies\userGroups;
use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @example reg-policy-f25c9e5872e5****
     *
     * @var string
     */
    public $policyId;

    /**
     * @var userGroups[]
     */
    public $userGroups;
    protected $_name = [
        'policyId'   => 'PolicyId',
        'userGroups' => 'UserGroups',
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
        if (null !== $this->userGroups) {
            $res['UserGroups'] = [];
            if (null !== $this->userGroups && \is_array($this->userGroups)) {
                $n = 0;
                foreach ($this->userGroups as $item) {
                    $res['UserGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['UserGroups'])) {
            if (!empty($map['UserGroups'])) {
                $model->userGroups = [];
                $n                 = 0;
                foreach ($map['UserGroups'] as $item) {
                    $model->userGroups[$n++] = null !== $item ? userGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
