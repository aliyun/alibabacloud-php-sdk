<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListUserGroupsForPrivateAccessPolicyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $policyIdsShrink;
    protected $_name = [
        'policyIdsShrink' => 'PolicyIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyIdsShrink) {
            $res['PolicyIds'] = $this->policyIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserGroupsForPrivateAccessPolicyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyIds'])) {
            $model->policyIdsShrink = $map['PolicyIds'];
        }

        return $model;
    }
}
