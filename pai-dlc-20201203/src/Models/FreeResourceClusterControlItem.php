<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class FreeResourceClusterControlItem extends Model
{
    /**
     * @var string
     */
    public $clusterID;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var bool
     */
    public $crossClusters;

    /**
     * @var bool
     */
    public $enableFreeResource;

    /**
     * @example frcc-whateversth
     *
     * @var string
     */
    public $freeResourceClusterControlId;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifyTime;

    /**
     * @var string
     */
    public $regionID;
    protected $_name = [
        'clusterID'                    => 'ClusterID',
        'clusterName'                  => 'ClusterName',
        'crossClusters'                => 'CrossClusters',
        'enableFreeResource'           => 'EnableFreeResource',
        'freeResourceClusterControlId' => 'FreeResourceClusterControlId',
        'gmtCreateTime'                => 'GmtCreateTime',
        'gmtModifyTime'                => 'GmtModifyTime',
        'regionID'                     => 'RegionID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterID) {
            $res['ClusterID'] = $this->clusterID;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->crossClusters) {
            $res['CrossClusters'] = $this->crossClusters;
        }
        if (null !== $this->enableFreeResource) {
            $res['EnableFreeResource'] = $this->enableFreeResource;
        }
        if (null !== $this->freeResourceClusterControlId) {
            $res['FreeResourceClusterControlId'] = $this->freeResourceClusterControlId;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifyTime) {
            $res['GmtModifyTime'] = $this->gmtModifyTime;
        }
        if (null !== $this->regionID) {
            $res['RegionID'] = $this->regionID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FreeResourceClusterControlItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterID'])) {
            $model->clusterID = $map['ClusterID'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CrossClusters'])) {
            $model->crossClusters = $map['CrossClusters'];
        }
        if (isset($map['EnableFreeResource'])) {
            $model->enableFreeResource = $map['EnableFreeResource'];
        }
        if (isset($map['FreeResourceClusterControlId'])) {
            $model->freeResourceClusterControlId = $map['FreeResourceClusterControlId'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifyTime'])) {
            $model->gmtModifyTime = $map['GmtModifyTime'];
        }
        if (isset($map['RegionID'])) {
            $model->regionID = $map['RegionID'];
        }

        return $model;
    }
}
