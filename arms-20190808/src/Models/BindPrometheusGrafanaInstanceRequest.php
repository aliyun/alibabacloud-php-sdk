<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class BindPrometheusGrafanaInstanceRequest extends Model
{
    /**
     * @description The ID of the Prometheus instance.
     *
     * This parameter is required.
     * @example cc7a37ee31aea4ed1a059eff8034b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the Grafana workspace.
     *
     * This parameter is required.
     * @example grafana-bp1*****
     *
     * @var string
     */
    public $grafanaInstanceId;

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
     * @description The ID of the resource group to which the Prometheus instance belongs.
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'grafanaInstanceId' => 'GrafanaInstanceId',
        'regionId'          => 'RegionId',
        'resourceGroupId'   => 'ResourceGroupId',
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
        if (null !== $this->grafanaInstanceId) {
            $res['GrafanaInstanceId'] = $this->grafanaInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindPrometheusGrafanaInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['GrafanaInstanceId'])) {
            $model->grafanaInstanceId = $map['GrafanaInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
