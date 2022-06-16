<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class ListDeployOrdersRequest extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $deployCategory;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $endTimeGreaterThan;

    /**
     * @var string
     */
    public $endTimeGreaterThanOrEqualTo;

    /**
     * @var string
     */
    public $endTimeLessThan;

    /**
     * @var string
     */
    public $endTimeLessThanOrEqualTo;

    /**
     * @var int
     */
    public $envId;

    /**
     * @var string
     */
    public $envType;

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
    public $partitionType;

    /**
     * @var string
     */
    public $pauseType;

    /**
     * @var int[]
     */
    public $resultList;

    /**
     * @var string
     */
    public $startTimeGreaterThan;

    /**
     * @var string
     */
    public $startTimeGreaterThanOrEqualTo;

    /**
     * @var string
     */
    public $startTimeLessThan;

    /**
     * @var string
     */
    public $startTimeLessThanOrEqualTo;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int[]
     */
    public $statusList;
    protected $_name = [
        'appId'                         => 'AppId',
        'deployCategory'                => 'DeployCategory',
        'deployType'                    => 'DeployType',
        'endTimeGreaterThan'            => 'EndTimeGreaterThan',
        'endTimeGreaterThanOrEqualTo'   => 'EndTimeGreaterThanOrEqualTo',
        'endTimeLessThan'               => 'EndTimeLessThan',
        'endTimeLessThanOrEqualTo'      => 'EndTimeLessThanOrEqualTo',
        'envId'                         => 'EnvId',
        'envType'                       => 'EnvType',
        'pageNumber'                    => 'PageNumber',
        'pageSize'                      => 'PageSize',
        'partitionType'                 => 'PartitionType',
        'pauseType'                     => 'PauseType',
        'resultList'                    => 'ResultList',
        'startTimeGreaterThan'          => 'StartTimeGreaterThan',
        'startTimeGreaterThanOrEqualTo' => 'StartTimeGreaterThanOrEqualTo',
        'startTimeLessThan'             => 'StartTimeLessThan',
        'startTimeLessThanOrEqualTo'    => 'StartTimeLessThanOrEqualTo',
        'status'                        => 'Status',
        'statusList'                    => 'StatusList',
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
        if (null !== $this->deployCategory) {
            $res['DeployCategory'] = $this->deployCategory;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->endTimeGreaterThan) {
            $res['EndTimeGreaterThan'] = $this->endTimeGreaterThan;
        }
        if (null !== $this->endTimeGreaterThanOrEqualTo) {
            $res['EndTimeGreaterThanOrEqualTo'] = $this->endTimeGreaterThanOrEqualTo;
        }
        if (null !== $this->endTimeLessThan) {
            $res['EndTimeLessThan'] = $this->endTimeLessThan;
        }
        if (null !== $this->endTimeLessThanOrEqualTo) {
            $res['EndTimeLessThanOrEqualTo'] = $this->endTimeLessThanOrEqualTo;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->partitionType) {
            $res['PartitionType'] = $this->partitionType;
        }
        if (null !== $this->pauseType) {
            $res['PauseType'] = $this->pauseType;
        }
        if (null !== $this->resultList) {
            $res['ResultList'] = $this->resultList;
        }
        if (null !== $this->startTimeGreaterThan) {
            $res['StartTimeGreaterThan'] = $this->startTimeGreaterThan;
        }
        if (null !== $this->startTimeGreaterThanOrEqualTo) {
            $res['StartTimeGreaterThanOrEqualTo'] = $this->startTimeGreaterThanOrEqualTo;
        }
        if (null !== $this->startTimeLessThan) {
            $res['StartTimeLessThan'] = $this->startTimeLessThan;
        }
        if (null !== $this->startTimeLessThanOrEqualTo) {
            $res['StartTimeLessThanOrEqualTo'] = $this->startTimeLessThanOrEqualTo;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeployOrdersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DeployCategory'])) {
            $model->deployCategory = $map['DeployCategory'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['EndTimeGreaterThan'])) {
            $model->endTimeGreaterThan = $map['EndTimeGreaterThan'];
        }
        if (isset($map['EndTimeGreaterThanOrEqualTo'])) {
            $model->endTimeGreaterThanOrEqualTo = $map['EndTimeGreaterThanOrEqualTo'];
        }
        if (isset($map['EndTimeLessThan'])) {
            $model->endTimeLessThan = $map['EndTimeLessThan'];
        }
        if (isset($map['EndTimeLessThanOrEqualTo'])) {
            $model->endTimeLessThanOrEqualTo = $map['EndTimeLessThanOrEqualTo'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PartitionType'])) {
            $model->partitionType = $map['PartitionType'];
        }
        if (isset($map['PauseType'])) {
            $model->pauseType = $map['PauseType'];
        }
        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = $map['ResultList'];
            }
        }
        if (isset($map['StartTimeGreaterThan'])) {
            $model->startTimeGreaterThan = $map['StartTimeGreaterThan'];
        }
        if (isset($map['StartTimeGreaterThanOrEqualTo'])) {
            $model->startTimeGreaterThanOrEqualTo = $map['StartTimeGreaterThanOrEqualTo'];
        }
        if (isset($map['StartTimeLessThan'])) {
            $model->startTimeLessThan = $map['StartTimeLessThan'];
        }
        if (isset($map['StartTimeLessThanOrEqualTo'])) {
            $model->startTimeLessThanOrEqualTo = $map['StartTimeLessThanOrEqualTo'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }

        return $model;
    }
}
