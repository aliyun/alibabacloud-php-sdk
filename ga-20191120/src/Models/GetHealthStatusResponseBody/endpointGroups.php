<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\GetHealthStatusResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\GetHealthStatusResponseBody\endpointGroups\endpoints;
use AlibabaCloud\Tea\Model;

class endpointGroups extends Model
{
    /**
     * @var string
     */
    public $endpointGroupId;

    /**
     * @var string
     */
    public $endpointGroupType;

    /**
     * @var endpoints[]
     */
    public $endpoints;

    /**
     * @var string[]
     */
    public $forwardingRuleIds;

    /**
     * @var string
     */
    public $healthStatus;
    protected $_name = [
        'endpointGroupId'   => 'EndpointGroupId',
        'endpointGroupType' => 'EndpointGroupType',
        'endpoints'         => 'Endpoints',
        'forwardingRuleIds' => 'ForwardingRuleIds',
        'healthStatus'      => 'HealthStatus',
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
        if (null !== $this->endpointGroupType) {
            $res['EndpointGroupType'] = $this->endpointGroupType;
        }
        if (null !== $this->endpoints) {
            $res['Endpoints'] = [];
            if (null !== $this->endpoints && \is_array($this->endpoints)) {
                $n = 0;
                foreach ($this->endpoints as $item) {
                    $res['Endpoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->forwardingRuleIds) {
            $res['ForwardingRuleIds'] = $this->forwardingRuleIds;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpointGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['EndpointGroupType'])) {
            $model->endpointGroupType = $map['EndpointGroupType'];
        }
        if (isset($map['Endpoints'])) {
            if (!empty($map['Endpoints'])) {
                $model->endpoints = [];
                $n                = 0;
                foreach ($map['Endpoints'] as $item) {
                    $model->endpoints[$n++] = null !== $item ? endpoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ForwardingRuleIds'])) {
            if (!empty($map['ForwardingRuleIds'])) {
                $model->forwardingRuleIds = $map['ForwardingRuleIds'];
            }
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }

        return $model;
    }
}
