<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DeletePolicyGroupRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $policyGroupIds;
    protected $_name = [
        'policyGroupIds' => 'PolicyGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyGroupIds) {
            $res['PolicyGroupIds'] = $this->policyGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePolicyGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyGroupIds'])) {
            if (!empty($map['PolicyGroupIds'])) {
                $model->policyGroupIds = $map['PolicyGroupIds'];
            }
        }

        return $model;
    }
}
