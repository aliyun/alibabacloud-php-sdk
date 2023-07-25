<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListServerlessJobsRequest extends Model
{
    /**
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var string[]
     */
    public $jobIds;

    /**
     * @var string[]
     */
    public $jobNames;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $startOrder;

    /**
     * @var string
     */
    public $state;

    /**
     * @example asc
     *
     * @var string
     */
    public $submitOrder;

    /**
     * @var string
     */
    public $submitTimeEnd;

    /**
     * @var string
     */
    public $submitTimeStart;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'jobIds'          => 'JobIds',
        'jobNames'        => 'JobNames',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'startOrder'      => 'StartOrder',
        'state'           => 'State',
        'submitOrder'     => 'SubmitOrder',
        'submitTimeEnd'   => 'SubmitTimeEnd',
        'submitTimeStart' => 'SubmitTimeStart',
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
        if (null !== $this->jobIds) {
            $res['JobIds'] = $this->jobIds;
        }
        if (null !== $this->jobNames) {
            $res['JobNames'] = $this->jobNames;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startOrder) {
            $res['StartOrder'] = $this->startOrder;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->submitOrder) {
            $res['SubmitOrder'] = $this->submitOrder;
        }
        if (null !== $this->submitTimeEnd) {
            $res['SubmitTimeEnd'] = $this->submitTimeEnd;
        }
        if (null !== $this->submitTimeStart) {
            $res['SubmitTimeStart'] = $this->submitTimeStart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServerlessJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['JobIds'])) {
            if (!empty($map['JobIds'])) {
                $model->jobIds = $map['JobIds'];
            }
        }
        if (isset($map['JobNames'])) {
            if (!empty($map['JobNames'])) {
                $model->jobNames = $map['JobNames'];
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartOrder'])) {
            $model->startOrder = $map['StartOrder'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['SubmitOrder'])) {
            $model->submitOrder = $map['SubmitOrder'];
        }
        if (isset($map['SubmitTimeEnd'])) {
            $model->submitTimeEnd = $map['SubmitTimeEnd'];
        }
        if (isset($map['SubmitTimeStart'])) {
            $model->submitTimeStart = $map['SubmitTimeStart'];
        }

        return $model;
    }
}
