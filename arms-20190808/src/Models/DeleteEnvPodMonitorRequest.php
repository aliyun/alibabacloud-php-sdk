<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteEnvPodMonitorRequest extends Model
{
    /**
     * @description Environment instance ID.
     *
     * This parameter is required.
     * @example env-xxxxxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The namespace where podMonitor is located
     *
     * This parameter is required.
     * @example arms-prom
     *
     * @var string
     */
    public $namespace;

    /**
     * @description PodMonitor name.
     *
     * This parameter is required.
     * @example arms-admin-pm1
     *
     * @var string
     */
    public $podMonitorName;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'environmentId'  => 'EnvironmentId',
        'namespace'      => 'Namespace',
        'podMonitorName' => 'PodMonitorName',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->podMonitorName) {
            $res['PodMonitorName'] = $this->podMonitorName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEnvPodMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PodMonitorName'])) {
            $model->podMonitorName = $map['PodMonitorName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
