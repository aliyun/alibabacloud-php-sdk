<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponseBody\globalAccelerationInstances\globalAccelerationInstance\backendServers;

use AlibabaCloud\Tea\Model;

class backendServer extends Model
{
    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example i-2zeg83zvn5d4ed4y****
     *
     * @var string
     */
    public $serverId;

    /**
     * @example 172.xx.xx.109
     *
     * @var string
     */
    public $serverIpAddress;

    /**
     * @example EcsInstance
     *
     * @var string
     */
    public $serverType;
    protected $_name = [
        'regionId'        => 'RegionId',
        'serverId'        => 'ServerId',
        'serverIpAddress' => 'ServerIpAddress',
        'serverType'      => 'ServerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->serverIpAddress) {
            $res['ServerIpAddress'] = $this->serverIpAddress;
        }
        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backendServer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['ServerIpAddress'])) {
            $model->serverIpAddress = $map['ServerIpAddress'];
        }
        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }

        return $model;
    }
}
