<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListDashboardsByNameRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $dashBoardName;

    /**
     * @var string
     */
    public $dashBoardVersion;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var bool
     */
    public $onlyQuery;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'        => 'ClusterId',
        'clusterType'      => 'ClusterType',
        'dashBoardName'    => 'DashBoardName',
        'dashBoardVersion' => 'DashBoardVersion',
        'dataSourceType'   => 'DataSourceType',
        'groupName'        => 'GroupName',
        'onlyQuery'        => 'OnlyQuery',
        'productCode'      => 'ProductCode',
        'regionId'         => 'RegionId',
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
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->dashBoardName) {
            $res['DashBoardName'] = $this->dashBoardName;
        }
        if (null !== $this->dashBoardVersion) {
            $res['DashBoardVersion'] = $this->dashBoardVersion;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->onlyQuery) {
            $res['OnlyQuery'] = $this->onlyQuery;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDashboardsByNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['DashBoardName'])) {
            $model->dashBoardName = $map['DashBoardName'];
        }
        if (isset($map['DashBoardVersion'])) {
            $model->dashBoardVersion = $map['DashBoardVersion'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['OnlyQuery'])) {
            $model->onlyQuery = $map['OnlyQuery'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
