<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListUserGroupsForPrivateAccessPolicyRequest extends Model
{
    /**
     * @var string[]
     */
    public $policyIds;
    protected $_name = [
        'policyIds' => 'PolicyIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyIds) {
            $res['PolicyIds'] = $this->policyIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserGroupsForPrivateAccessPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyIds'])) {
            if (!empty($map['PolicyIds'])) {
                $model->policyIds = $map['PolicyIds'];
            }
        }

        return $model;
    }
}
