<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRulesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The authentication rule IDs.
     *
     * @var string[]
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['consumerAuthorizationRuleIds'])) {
            if (!empty($map['consumerAuthorizationRuleIds'])) {
                $model->consumerAuthorizationRuleIds = $map['consumerAuthorizationRuleIds'];
            }
        }

        return $model;
    }
}
