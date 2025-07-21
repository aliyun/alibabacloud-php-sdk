<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteConsumerAuthorizationRuleRequest extends Model
{
    /**
     * @description The rule IDs.
     *
     * @example car-cus2d1em1hkg7732kuk0
     *
     * @var string
     */
    public $consumerAuthorizationRuleIds;
    protected $_name = [
        'consumerAuthorizationRuleIds' => 'consumerAuthorizationRuleIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerAuthorizationRuleIds) {
            $res['consumerAuthorizationRuleIds'] = $this->consumerAuthorizationRuleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeleteConsumerAuthorizationRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['consumerAuthorizationRuleIds'])) {
            $model->consumerAuthorizationRuleIds = $map['consumerAuthorizationRuleIds'];
        }

        return $model;
    }
}
