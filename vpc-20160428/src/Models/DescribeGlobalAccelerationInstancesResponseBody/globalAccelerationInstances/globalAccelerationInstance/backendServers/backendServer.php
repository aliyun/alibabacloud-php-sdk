<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponseBody\globalAccelerationInstances\globalAccelerationInstance\backendServers;

use AlibabaCloud\Dara\Model;

class backendServer extends Model
{
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $serverId;
    /**
     * @var string
     */
    public $serverIpAddress;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
