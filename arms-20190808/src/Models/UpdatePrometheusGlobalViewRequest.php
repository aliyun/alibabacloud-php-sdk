<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdatePrometheusGlobalViewRequest extends Model
{
    /**
     * @description To edit a GlobalView aggregated instance, do you require all passed child instances to be verified successfully before creating a GlobalView instance (optional, default to false):
     * - false
     * @example true
     *
     * @var bool
     */
    public $allSubClustersSuccess;

    /**
     * @description The ID of the Prometheus instance.
     *
     * This parameter is required.
     * @example global****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the global aggregation instance.
     *
     * @example zyGlobalView
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The region ID of the global aggregation instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $mostRegionId;

    /**
     * @description The ID of the region in which the Prometheus instance resides.
     *
     * This parameter is required.
     * @example cn-shenzhen
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

    /**
     * @description The data sources of the Prometheus instance for GlobalView.
     *
     * This parameter is required.
     * @example [ { "headers":{ }, "regionId":"cn-hangzhou", "sourceType":"AlibabaPrometheus", "extras":{ }, "clusterId":"c39a1048921e04f***********", "sourceName":"arms-luyao-test", "dataSource":"", "userId":"1672753***********" }, { "headers":{ }, "regionId":"cn-beijing", "sourceType":"AlibabaPrometheus", "extras":{ }, "clusterId":"c6b6485496d5b40***********", "sourceName":"agent-321-test", "dataSource":"", "userId":"1672753***********" }, { "headers":{ }, "regionId":"cn-zhangjiakou", "sourceType":"AlibabaPrometheus", "extras":{ }, "clusterId":"c261a4f3200c446***********", "sourceName":"zaifeng-cardinality-01", "dataSource":"", "userId":"1672753***********" } ]
     *
     * @var string
     */
    public $subClustersJson;
    protected $_name = [
        'allSubClustersSuccess' => 'AllSubClustersSuccess',
        'clusterId'             => 'ClusterId',
        'groupName'             => 'GroupName',
        'mostRegionId'          => 'MostRegionId',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'subClustersJson'       => 'SubClustersJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allSubClustersSuccess) {
            $res['AllSubClustersSuccess'] = $this->allSubClustersSuccess;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->mostRegionId) {
            $res['MostRegionId'] = $this->mostRegionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->subClustersJson) {
            $res['SubClustersJson'] = $this->subClustersJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePrometheusGlobalViewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllSubClustersSuccess'])) {
            $model->allSubClustersSuccess = $map['AllSubClustersSuccess'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['MostRegionId'])) {
            $model->mostRegionId = $map['MostRegionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SubClustersJson'])) {
            $model->subClustersJson = $map['SubClustersJson'];
        }

        return $model;
    }
}
