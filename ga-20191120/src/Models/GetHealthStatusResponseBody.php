<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\GetHealthStatusResponseBody\endpointGroups;
use AlibabaCloud\Tea\Model;

class GetHealthStatusResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $healthStatus;

    /**
     * @var endpointGroups[]
     */
    public $endpointGroups;
    protected $_name = [
        'requestId'      => 'RequestId',
        'listenerId'     => 'ListenerId',
        'healthStatus'   => 'HealthStatus',
        'endpointGroups' => 'EndpointGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->endpointGroups) {
            $res['EndpointGroups'] = [];
            if (null !== $this->endpointGroups && \is_array($this->endpointGroups)) {
                $n = 0;
                foreach ($this->endpointGroups as $item) {
                    $res['EndpointGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHealthStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['EndpointGroups'])) {
            if (!empty($map['EndpointGroups'])) {
                $model->endpointGroups = [];
                $n                     = 0;
                foreach ($map['EndpointGroups'] as $item) {
                    $model->endpointGroups[$n++] = null !== $item ? endpointGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
