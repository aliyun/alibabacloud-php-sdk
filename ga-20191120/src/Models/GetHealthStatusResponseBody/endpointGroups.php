<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\GetHealthStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetHealthStatusResponseBody\endpointGroups\endpoints;

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
        'endpointGroupId' => 'EndpointGroupId',
        'endpointGroupType' => 'EndpointGroupType',
        'endpoints' => 'Endpoints',
        'forwardingRuleIds' => 'ForwardingRuleIds',
        'healthStatus' => 'HealthStatus',
    ];

    public function validate()
    {
        if (\is_array($this->endpoints)) {
            Model::validateArray($this->endpoints);
        }
        if (\is_array($this->forwardingRuleIds)) {
            Model::validateArray($this->forwardingRuleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }

        if (null !== $this->endpointGroupType) {
            $res['EndpointGroupType'] = $this->endpointGroupType;
        }

        if (null !== $this->endpoints) {
            if (\is_array($this->endpoints)) {
                $res['Endpoints'] = [];
                $n1 = 0;
                foreach ($this->endpoints as $item1) {
                    $res['Endpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->forwardingRuleIds) {
            if (\is_array($this->forwardingRuleIds)) {
                $res['ForwardingRuleIds'] = [];
                $n1 = 0;
                foreach ($this->forwardingRuleIds as $item1) {
                    $res['ForwardingRuleIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Endpoints'] as $item1) {
                    $model->endpoints[$n1] = endpoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ForwardingRuleIds'])) {
            if (!empty($map['ForwardingRuleIds'])) {
                $model->forwardingRuleIds = [];
                $n1 = 0;
                foreach ($map['ForwardingRuleIds'] as $item1) {
                    $model->forwardingRuleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }

        return $model;
    }
}
