<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20230117\Models;

use AlibabaCloud\Tea\Model;

class QueryAsyncJobListRequest extends Model
{
    /**
     * @example 2023-01-04 23:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example E75FE679-0303-4DD1-8252-1143B4FA8A27
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNum;

    /**
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example RecognizeIdentityCard
     *
     * @var string
     */
    public $popApiName;

    /**
     * @example ocr
     *
     * @var string
     */
    public $popProduct;

    /**
     * @example 2023-01-04 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example PROCESS_SUCCESS
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime'    => 'EndTime',
        'jobId'      => 'JobId',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'popApiName' => 'PopApiName',
        'popProduct' => 'PopProduct',
        'startTime'  => 'StartTime',
        'status'     => 'Status',
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->popApiName) {
            $res['PopApiName'] = $this->popApiName;
        }
        if (null !== $this->popProduct) {
            $res['PopProduct'] = $this->popProduct;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAsyncJobListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PopApiName'])) {
            $model->popApiName = $map['PopApiName'];
        }
        if (isset($map['PopProduct'])) {
            $model->popProduct = $map['PopProduct'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
