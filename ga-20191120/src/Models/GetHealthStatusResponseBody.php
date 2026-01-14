<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetHealthStatusResponseBody\endpointGroups;

class GetHealthStatusResponseBody extends Model
{
    /**
     * @var endpointGroups[]
     */
    public $endpointGroups;

    /**
     * @var string
     */
    public $healthStatus;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'endpointGroups' => 'EndpointGroups',
        'healthStatus' => 'HealthStatus',
        'listenerId' => 'ListenerId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->endpointGroups)) {
            Model::validateArray($this->endpointGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointGroups) {
            if (\is_array($this->endpointGroups)) {
                $res['EndpointGroups'] = [];
                $n1 = 0;
                foreach ($this->endpointGroups as $item1) {
                    $res['EndpointGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }

        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['EndpointGroups'])) {
            if (!empty($map['EndpointGroups'])) {
                $model->endpointGroups = [];
                $n1 = 0;
                foreach ($map['EndpointGroups'] as $item1) {
                    $model->endpointGroups[$n1] = endpointGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }

        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
