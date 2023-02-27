<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20230117\Models\QueryAsyncJobListResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1850343078585779
     *
     * @var string
     */
    public $callerParentId;

    /**
     * @example 2023-01-04 17:18:44
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2023-01-04 17:18:44
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 49E2CC28-ED1D-4CC5-854D-7D0AE2B20976
     *
     * @var string
     */
    public $jobId;

    /**
     * @example DetectVideoShot
     *
     * @var string
     */
    public $popApiName;

    /**
     * @example videorecog
     *
     * @var string
     */
    public $popProduct;

    /**
     * @example 2023-01-04 17:18:44
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
        'callerParentId' => 'CallerParentId',
        'endTime'        => 'EndTime',
        'gmtCreate'      => 'GmtCreate',
        'jobId'          => 'JobId',
        'popApiName'     => 'PopApiName',
        'popProduct'     => 'PopProduct',
        'startTime'      => 'StartTime',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callerParentId) {
            $res['CallerParentId'] = $this->callerParentId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallerParentId'])) {
            $model->callerParentId = $map['CallerParentId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
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
