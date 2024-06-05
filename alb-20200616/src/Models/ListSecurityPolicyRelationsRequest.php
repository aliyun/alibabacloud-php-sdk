<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class ListSecurityPolicyRelationsRequest extends Model
{
    /**
     * @description The security policy IDs. You can specify up to five IDs.
     *
     * This parameter is required.
     * @var string[]
     */
    public $securityPolicyIds;
    protected $_name = [
        'securityPolicyIds' => 'SecurityPolicyIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityPolicyIds) {
            $res['SecurityPolicyIds'] = $this->securityPolicyIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSecurityPolicyRelationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityPolicyIds'])) {
            if (!empty($map['SecurityPolicyIds'])) {
                $model->securityPolicyIds = $map['SecurityPolicyIds'];
            }
        }

        return $model;
    }
}
