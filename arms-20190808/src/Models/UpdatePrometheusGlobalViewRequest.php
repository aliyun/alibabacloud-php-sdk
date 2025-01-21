<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class UpdatePrometheusGlobalViewRequest extends Model
{
    /**
     * @var bool
     */
    public $allSubClustersSuccess;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string
     */
    public $mostRegionId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
