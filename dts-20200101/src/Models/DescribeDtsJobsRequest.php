<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDtsJobsRequest extends Model
{
    /**
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @var int
     */
    public $dedicatedClusterNodeId;

    /**
     * @var string
     */
    public $dtsJobId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $orderColumn;

    /**
     * @var string
     */
    public $orderDirection;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dedicatedClusterId'     => 'DedicatedClusterId',
        'dedicatedClusterNodeId' => 'DedicatedClusterNodeId',
        'dtsJobId'               => 'DtsJobId',
        'groupId'                => 'GroupId',
        'jobType'                => 'JobType',
        'orderColumn'            => 'OrderColumn',
        'orderDirection'         => 'OrderDirection',
        'ownerId'                => 'OwnerId',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'params'                 => 'Params',
        'region'                 => 'Region',
        'regionId'               => 'RegionId',
        'status'                 => 'Status',
        'tags'                   => 'Tags',
        'type'                   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedClusterId) {
            $res['DedicatedClusterId'] = $this->dedicatedClusterId;
        }
        if (null !== $this->dedicatedClusterNodeId) {
            $res['DedicatedClusterNodeId'] = $this->dedicatedClusterNodeId;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->orderColumn) {
            $res['OrderColumn'] = $this->orderColumn;
        }
        if (null !== $this->orderDirection) {
            $res['OrderDirection'] = $this->orderDirection;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDtsJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedClusterId'])) {
            $model->dedicatedClusterId = $map['DedicatedClusterId'];
        }
        if (isset($map['DedicatedClusterNodeId'])) {
            $model->dedicatedClusterNodeId = $map['DedicatedClusterNodeId'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['OrderColumn'])) {
            $model->orderColumn = $map['OrderColumn'];
        }
        if (isset($map['OrderDirection'])) {
            $model->orderDirection = $map['OrderDirection'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
