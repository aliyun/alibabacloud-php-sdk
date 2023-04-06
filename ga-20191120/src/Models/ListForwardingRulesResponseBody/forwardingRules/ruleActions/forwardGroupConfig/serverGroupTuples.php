<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponseBody\forwardingRules\ruleActions\forwardGroupConfig;

use AlibabaCloud\Tea\Model;

class serverGroupTuples extends Model
{
    /**
     * @description The ID of the endpoint group.
     *
     * >  For GA instances created after July 12, 2022, all forwarding condition types and forwarding action types are supported. We recommend that you call **RuleActionType** and **RuleActionValue** to query forwarding actions.
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
