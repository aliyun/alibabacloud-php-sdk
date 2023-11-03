<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DescribeEnvServiceMonitorRequest extends Model
{
    /**
     * @description The ID of the environment instance.
     *
     * @example env-xxxxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The namespace where the ServiceMonitor is located.
     *
     * @example arms-prom
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the ServiceMonitor.
     *
     * @example arms-admin1
     *
     * @var string
     */
    public $serviceMonitorName;
    protected $_name = [
        'environmentId'      => 'EnvironmentId',
        'namespace'          => 'Namespace',
        'regionId'           => 'RegionId',
        'serviceMonitorName' => 'ServiceMonitorName',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceMonitorName) {
            $res['ServiceMonitorName'] = $this->serviceMonitorName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnvServiceMonitorRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceMonitorName'])) {
            $model->serviceMonitorName = $map['ServiceMonitorName'];
        }

        return $model;
    }
}
