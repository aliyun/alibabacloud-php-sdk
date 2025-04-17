<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus\serverGroupInfos\servers;

class serverGroupInfos extends Model
{
    /**
     * @var bool
     */
    public $healthCheckEnabled;

    /**
     * @var string
     */
    public $serverGroupId;

    /**
     * @var servers[]
     */
    public $servers;
    protected $_name = [
        'healthCheckEnabled' => 'HealthCheckEnabled',
        'serverGroupId' => 'ServerGroupId',
        'servers' => 'Servers',
    ];

    public function validate()
    {
        if (\is_array($this->servers)) {
            Model::validateArray($this->servers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->healthCheckEnabled) {
            $res['HealthCheckEnabled'] = $this->healthCheckEnabled;
        }

        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }

        if (null !== $this->servers) {
            if (\is_array($this->servers)) {
                $res['Servers'] = [];
                $n1 = 0;
                foreach ($this->servers as $item1) {
                    $res['Servers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['HealthCheckEnabled'])) {
            $model->healthCheckEnabled = $map['HealthCheckEnabled'];
        }

        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }

        if (isset($map['Servers'])) {
            if (!empty($map['Servers'])) {
                $model->servers = [];
                $n1 = 0;
                foreach ($map['Servers'] as $item1) {
                    $model->servers[$n1++] = servers::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
