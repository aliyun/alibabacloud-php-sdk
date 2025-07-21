<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example car-d06p196m1hkg9ukum5pg
     *
     * @var string
     */
    public $consumerAuthorizationRuleId;
    protected $_name = [
        'consumerAuthorizationRuleId' => 'consumerAuthorizationRuleId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerAuthorizationRuleId) {
            $res['consumerAuthorizationRuleId'] = $this->consumerAuthorizationRuleId;
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
        if (isset($map['consumerAuthorizationRuleId'])) {
            $model->consumerAuthorizationRuleId = $map['consumerAuthorizationRuleId'];
        }

        return $model;
    }
}
