<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class FreeResourceItem extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $availableNumber;

    /**
     * @var string
     */
    public $clusterID;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @example freeres-whateversth
     *
     * @var string
     */
    public $freeResourceId;

    /**
     * @example 2021-01-18T12:52:15Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-18T12:52:15Z
     *
     * @var string
     */
    public $gmtModifyTime;

    /**
     * @example inner
     *
     * @var string
     */
    public $regionID;

    /**
     * @example cpu
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'availableNumber' => 'AvailableNumber',
        'clusterID'       => 'ClusterID',
        'clusterName'     => 'ClusterName',
        'freeResourceId'  => 'FreeResourceId',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifyTime'   => 'GmtModifyTime',
        'regionID'        => 'RegionID',
        'resourceType'    => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableNumber) {
            $res['AvailableNumber'] = $this->availableNumber;
        }
        if (null !== $this->clusterID) {
            $res['ClusterID'] = $this->clusterID;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->freeResourceId) {
            $res['FreeResourceId'] = $this->freeResourceId;
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FreeResourceItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableNumber'])) {
            $model->availableNumber = $map['AvailableNumber'];
        }
        if (isset($map['ClusterID'])) {
            $model->clusterID = $map['ClusterID'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['FreeResourceId'])) {
            $model->freeResourceId = $map['FreeResourceId'];
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
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
