<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeServerRelatedGlobalAccelerationInstancesResponseBody\globalAccelerationInstances;

use AlibabaCloud\Tea\Model;

class globalAccelerationInstance extends Model
{
    /**
     * @example ga-t4nku6vv9****
     *
     * @var string
     */
    public $globalAccelerationInstanceId;

    /**
     * @example 12.34.56.78
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @example ap-southeast-1
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 172.24.52.234
     *
     * @var string
     */
    public $serverIpAddress;
    protected $_name = [
        'globalAccelerationInstanceId' => 'GlobalAccelerationInstanceId',
        'ipAddress'                    => 'IpAddress',
        'regionId'                     => 'RegionId',
        'serverIpAddress'              => 'ServerIpAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalAccelerationInstanceId) {
            $res['GlobalAccelerationInstanceId'] = $this->globalAccelerationInstanceId;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serverIpAddress) {
            $res['ServerIpAddress'] = $this->serverIpAddress;
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
        if (isset($map['GlobalAccelerationInstanceId'])) {
            $model->globalAccelerationInstanceId = $map['GlobalAccelerationInstanceId'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServerIpAddress'])) {
            $model->serverIpAddress = $map['ServerIpAddress'];
        }

        return $model;
    }
}
