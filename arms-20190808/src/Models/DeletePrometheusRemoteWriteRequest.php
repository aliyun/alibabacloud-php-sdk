<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeletePrometheusRemoteWriteRequest extends Model
{
    /**
     * @description The ID of the Prometheus instance.
     *
     * This parameter is required.
     * @example cc7a37ee31aea4ed1a059eff8034b\\*\\*\\*\\* or vpc-xxxx
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
     * @description The names of the remote write configuration items that you want to delete. Separate configuration items with commas (,).
     *
     * This parameter is required.
     * @example name1,name2
     *
     * @var string
     */
    public $remoteWriteNames;
    protected $_name = [
        'clusterId'        => 'ClusterId',
        'regionId'         => 'RegionId',
        'remoteWriteNames' => 'RemoteWriteNames',
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
        if (null !== $this->remoteWriteNames) {
            $res['RemoteWriteNames'] = $this->remoteWriteNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePrometheusRemoteWriteRequest
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
        if (isset($map['RemoteWriteNames'])) {
            $model->remoteWriteNames = $map['RemoteWriteNames'];
        }

        return $model;
    }
}
