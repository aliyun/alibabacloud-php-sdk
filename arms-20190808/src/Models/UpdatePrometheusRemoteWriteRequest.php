<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdatePrometheusRemoteWriteRequest extends Model
{
    /**
     * @description The ID of the Prometheus instance.
     *
     * @example cc7a37ee31aea4ed1a059eff8034b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the remote write configuration item.
     *
     * @example rw1
     *
     * @var string
     */
    public $remoteWriteName;

    /**
     * @description The remote write configuration. Specify the value in the YAML format.
     *
     * @example remote_write:
     * action: keep
     * @var string
     */
    public $remoteWriteYaml;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'regionId'        => 'RegionId',
        'remoteWriteName' => 'RemoteWriteName',
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
        if (null !== $this->remoteWriteName) {
            $res['RemoteWriteName'] = $this->remoteWriteName;
        }
        if (null !== $this->remoteWriteYaml) {
            $res['RemoteWriteYaml'] = $this->remoteWriteYaml;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePrometheusRemoteWriteRequest
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
        if (isset($map['RemoteWriteYaml'])) {
            $model->remoteWriteYaml = $map['RemoteWriteYaml'];
        }

        return $model;
    }
}
