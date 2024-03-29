<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponseBody\forwardingRules\ruleActions\forwardGroupConfig;

use AlibabaCloud\Tea\Model;

class serverGroupTuples extends Model
{
    /**
     * @description The endpoint group ID.
     *
     * >  GA instances created after July 12, 2022 support all forwarding condition types and action types. We recommend that you query forwarding conditions and actions by calling the **RuleActionType** and **RuleActionValue** operations.
     * @example epg-bp1enpdcrqhl78g6r****
     *
     * @var string
     */
    public $endpointGroupId;
    protected $_name = [
        'endpointGroupId' => 'EndpointGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverGroupTuples
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }

        return $model;
    }
}
