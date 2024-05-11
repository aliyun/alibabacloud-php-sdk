<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class AddPrometheusRemoteWriteRequest extends Model
{
    /**
     * @description The ID of the Prometheus instance. Only a Prometheus instance for Container Service or a Prometheus instance for ECS is supported.
     *
     * This parameter is required.
     * @example cc7a37ee31aea4ed1a059eff8034b\\*\\*\\*\\* or vpc-xxxxx
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
     * @description The details of the remote write configuration item. Specify the value in the YAML format.
     *
     * This parameter is required.
     * @example remote_write:
     * action: keep
     * @var string
     */
    public $remoteWriteYaml;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'regionId'        => 'RegionId',
        'remoteWriteYaml' => 'RemoteWriteYaml',
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
        if (null !== $this->remoteWriteYaml) {
            $res['RemoteWriteYaml'] = $this->remoteWriteYaml;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPrometheusRemoteWriteRequest
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
        if (isset($map['RemoteWriteYaml'])) {
            $model->remoteWriteYaml = $map['RemoteWriteYaml'];
        }

        return $model;
    }
}
