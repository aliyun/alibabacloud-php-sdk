<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ListApmApplicationRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $startTimeFrom;

    /**
     * @var int
     */
    public $startTimeTo;

    /**
     * @var int
     */
    public $endTimeFrom;

    /**
     * @var int
     */
    public $endTimeTo;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $finalStatus;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $queue;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $diagnoseResult;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId'        => 'RegionId',
        'startTimeFrom'   => 'StartTimeFrom',
        'startTimeTo'     => 'StartTimeTo',
        'endTimeFrom'     => 'EndTimeFrom',
        'endTimeTo'       => 'EndTimeTo',
        'clusterId'       => 'ClusterId',
        'appId'           => 'AppId',
        'state'           => 'State',
        'finalStatus'     => 'FinalStatus',
        'user'            => 'User',
        'queue'           => 'Queue',
        'name'            => 'Name',
        'jobType'         => 'JobType',
        'orderBy'         => 'OrderBy',
        'diagnoseResult'  => 'DiagnoseResult',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTimeFrom) {
            $res['StartTimeFrom'] = $this->startTimeFrom;
        }
        if (null !== $this->startTimeTo) {
            $res['StartTimeTo'] = $this->startTimeTo;
        }
        if (null !== $this->endTimeFrom) {
            $res['EndTimeFrom'] = $this->endTimeFrom;
        }
        if (null !== $this->endTimeTo) {
            $res['EndTimeTo'] = $this->endTimeTo;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->finalStatus) {
            $res['FinalStatus'] = $this->finalStatus;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->diagnoseResult) {
            $res['DiagnoseResult'] = $this->diagnoseResult;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApmApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTimeFrom'])) {
            $model->startTimeFrom = $map['StartTimeFrom'];
        }
        if (isset($map['StartTimeTo'])) {
            $model->startTimeTo = $map['StartTimeTo'];
        }
        if (isset($map['EndTimeFrom'])) {
            $model->endTimeFrom = $map['EndTimeFrom'];
        }
        if (isset($map['EndTimeTo'])) {
            $model->endTimeTo = $map['EndTimeTo'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['FinalStatus'])) {
            $model->finalStatus = $map['FinalStatus'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['DiagnoseResult'])) {
            $model->diagnoseResult = $map['DiagnoseResult'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
