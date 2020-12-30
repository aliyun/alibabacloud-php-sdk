<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeServerRelatedGlobalAccelerationInstancesResponseBody\globalAccelerationInstances;

use AlibabaCloud\Tea\Model;

class globalAccelerationInstance extends Model
{
    /**
     * @var string
     */
    public $serverIpAddress;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $globalAccelerationInstanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'serverIpAddress'              => 'ServerIpAddress',
        'ipAddress'                    => 'IpAddress',
        'globalAccelerationInstanceId' => 'GlobalAccelerationInstanceId',
        'regionId'                     => 'RegionId',
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
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->globalAccelerationInstanceId) {
            $res['GlobalAccelerationInstanceId'] = $this->globalAccelerationInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return globalAccelerationInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerIpAddress'])) {
            $model->serverIpAddress = $map['ServerIpAddress'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['GlobalAccelerationInstanceId'])) {
            $model->globalAccelerationInstanceId = $map['GlobalAccelerationInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
