<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBClusterRequest extends Model
{
    /**
     * @var string
     */
    public $cacheSize;

    /**
     * @var int
     */
    public $clusterNodeCount;

    /**
     * @var string
     */
    public $clusterNodeType;

    /**
     * @var string
     */
    public $DBClusterClass;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var float
     */
    public $scaleMax;

    /**
     * @var float
     */
    public $scaleMin;
    protected $_name = [
        'cacheSize' => 'CacheSize',
        'clusterNodeCount' => 'ClusterNodeCount',
        'clusterNodeType' => 'ClusterNodeType',
        'DBClusterClass' => 'DBClusterClass',
        'DBClusterId' => 'DBClusterId',
        'DBInstanceId' => 'DBInstanceId',
        'engine' => 'Engine',
        'regionId' => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scaleMax' => 'ScaleMax',
        'scaleMin' => 'ScaleMin',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheSize) {
            $res['CacheSize'] = $this->cacheSize;
        }

        if (null !== $this->clusterNodeCount) {
            $res['ClusterNodeCount'] = $this->clusterNodeCount;
        }

        if (null !== $this->clusterNodeType) {
            $res['ClusterNodeType'] = $this->clusterNodeType;
        }

        if (null !== $this->DBClusterClass) {
            $res['DBClusterClass'] = $this->DBClusterClass;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }

        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
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
        if (isset($map['CacheSize'])) {
            $model->cacheSize = $map['CacheSize'];
        }

        if (isset($map['ClusterNodeCount'])) {
            $model->clusterNodeCount = $map['ClusterNodeCount'];
        }

        if (isset($map['ClusterNodeType'])) {
            $model->clusterNodeType = $map['ClusterNodeType'];
        }

        if (isset($map['DBClusterClass'])) {
            $model->DBClusterClass = $map['DBClusterClass'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }

        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }

        return $model;
    }
}
