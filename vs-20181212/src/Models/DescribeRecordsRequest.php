<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2021-11-24T00:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example true
     *
     * @var bool
     */
    public $privateBucket;

    /**
     * @example Id
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example asc
     *
     * @var string
     */
    public $sortDirection;

    /**
     * @description This parameter is required.
     *
     * @example 2021-11-22T00:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description This parameter is required.
     *
     * @example 323*****997-cn-qingdao
     *
     * @var string
     */
    public $streamId;

    /**
     * @description This parameter is required.
     *
     * @example record
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endTime'       => 'EndTime',
        'ownerId'       => 'OwnerId',
        'pageNum'       => 'PageNum',
        'pageSize'      => 'PageSize',
        'privateBucket' => 'PrivateBucket',
        'sortBy'        => 'SortBy',
        'sortDirection' => 'SortDirection',
        'startTime'     => 'StartTime',
        'streamId'      => 'StreamId',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->privateBucket) {
            $res['PrivateBucket'] = $this->privateBucket;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->sortDirection) {
            $res['SortDirection'] = $this->sortDirection;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PrivateBucket'])) {
            $model->privateBucket = $map['PrivateBucket'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SortDirection'])) {
            $model->sortDirection = $map['SortDirection'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
