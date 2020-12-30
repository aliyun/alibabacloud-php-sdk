<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponseBody\globalAccelerationInstances\globalAccelerationInstance\backendServers;

use AlibabaCloud\Tea\Model;

class backendServer extends Model
{
    /**
     * @var string
     */
    public $serverIpAddress;

    /**
     * @var string
     */
    public $serverId;

    /**
     * @var string
     */
    public $serverType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'serverIpAddress' => 'ServerIpAddress',
        'serverId'        => 'ServerId',
        'serverType'      => 'ServerType',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverIpAddress) {
            $res['ServerIpAddress'] = $this->serverIpAddress;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ServerIpAddress'])) {
            $model->serverIpAddress = $map['ServerIpAddress'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
