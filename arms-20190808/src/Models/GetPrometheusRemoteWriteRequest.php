<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetPrometheusRemoteWriteRequest extends Model
{
    /**
     * @description The ID of the Prometheus instance. Only a Prometheus instance for Container Service or a Prometheus instance for ECS is supported.
     *
     * This parameter is required.
     * @example cc7a37ee31aea4ed1a059eff8034b\\*\\*\\*\\* or vpc-\\*\\*\\*
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the remote write configuration item.
     *
     * This parameter is required.
     * @example rw1
     *
     * @var string
     */
    public $remoteWriteName;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'regionId'        => 'RegionId',
        'remoteWriteName' => 'RemoteWriteName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remoteWriteName) {
            $res['RemoteWriteName'] = $this->remoteWriteName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPrometheusRemoteWriteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemoteWriteName'])) {
            $model->remoteWriteName = $map['RemoteWriteName'];
        }

        return $model;
    }
}
