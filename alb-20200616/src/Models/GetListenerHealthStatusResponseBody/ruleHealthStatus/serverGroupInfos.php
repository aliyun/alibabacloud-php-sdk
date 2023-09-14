<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody\ruleHealthStatus;

use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody\ruleHealthStatus\serverGroupInfos\nonNormalServers;
use AlibabaCloud\Tea\Model;

class serverGroupInfos extends Model
{
    /**
     * @description The action specified for the server group.
     *
     * @example TrafficMirror
     *
     * @var string
     */
    public $actionType;

    /**
     * @description Indicates whether health checks are enabled. If **on** is returned, it indicates that health checks are enabled.
     *
     * @example on
     *
     * @var string
     */
    public $healthCheckEnabled;

    /**
     * @description A list of unhealthy backend servers.
     *
     * @var nonNormalServers[]
     */
    public $nonNormalServers;

    /**
     * @description The ID of the server group that is associated with the listener.
     *
     * @example vsp-bp1qjwo61pqz3ahlt****
     *
     * @var string
     */
    public $serverGroupId;
    protected $_name = [
        'actionType'         => 'ActionType',
        'healthCheckEnabled' => 'HealthCheckEnabled',
        'nonNormalServers'   => 'NonNormalServers',
        'serverGroupId'      => 'ServerGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->healthCheckEnabled) {
            $res['HealthCheckEnabled'] = $this->healthCheckEnabled;
        }
        if (null !== $this->nonNormalServers) {
            $res['NonNormalServers'] = [];
            if (null !== $this->nonNormalServers && \is_array($this->nonNormalServers)) {
                $n = 0;
                foreach ($this->nonNormalServers as $item) {
                    $res['NonNormalServers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverGroupInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['HealthCheckEnabled'])) {
            $model->healthCheckEnabled = $map['HealthCheckEnabled'];
        }
        if (isset($map['NonNormalServers'])) {
            if (!empty($map['NonNormalServers'])) {
                $model->nonNormalServers = [];
                $n                       = 0;
                foreach ($map['NonNormalServers'] as $item) {
                    $model->nonNormalServers[$n++] = null !== $item ? nonNormalServers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }

        return $model;
    }
}
