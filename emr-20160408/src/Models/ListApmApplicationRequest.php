<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ListApmApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $diagnoseResult;

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
    public $finalStatus;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $orderBy;

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
    public $queue;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $startTimeFrom;

    /**
     * @var int
     */
    public $startTimeTo;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'appId'           => 'AppId',
        'clusterId'       => 'ClusterId',
        'diagnoseResult'  => 'DiagnoseResult',
        'endTimeFrom'     => 'EndTimeFrom',
        'endTimeTo'       => 'EndTimeTo',
        'finalStatus'     => 'FinalStatus',
        'jobType'         => 'JobType',
        'name'            => 'Name',
        'orderBy'         => 'OrderBy',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'queue'           => 'Queue',
        'regionId'        => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'startTimeFrom'   => 'StartTimeFrom',
        'startTimeTo'     => 'StartTimeTo',
        'state'           => 'State',
        'user'            => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->diagnoseResult) {
            $res['DiagnoseResult'] = $this->diagnoseResult;
        }
        if (null !== $this->endTimeFrom) {
            $res['EndTimeFrom'] = $this->endTimeFrom;
        }
        if (null !== $this->endTimeTo) {
            $res['EndTimeTo'] = $this->endTimeTo;
        }
        if (null !== $this->finalStatus) {
            $res['FinalStatus'] = $this->finalStatus;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->startTimeFrom) {
            $res['StartTimeFrom'] = $this->startTimeFrom;
        }
        if (null !== $this->startTimeTo) {
            $res['StartTimeTo'] = $this->startTimeTo;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DiagnoseResult'])) {
            $model->diagnoseResult = $map['DiagnoseResult'];
        }
        if (isset($map['EndTimeFrom'])) {
            $model->endTimeFrom = $map['EndTimeFrom'];
        }
        if (isset($map['EndTimeTo'])) {
            $model->endTimeTo = $map['EndTimeTo'];
        }
        if (isset($map['FinalStatus'])) {
            $model->finalStatus = $map['FinalStatus'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StartTimeFrom'])) {
            $model->startTimeFrom = $map['StartTimeFrom'];
        }
        if (isset($map['StartTimeTo'])) {
            $model->startTimeTo = $map['StartTimeTo'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
