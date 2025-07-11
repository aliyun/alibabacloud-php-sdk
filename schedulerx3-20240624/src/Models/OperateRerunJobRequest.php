<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Tea\Model;

class OperateRerunJobRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description This parameter is required.
     *
     * @example xxljob-b6ec1xxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example 14:11:10
     *
     * @var string
     */
    public $dataTime;

    /**
     * @description This parameter is required.
     *
     * @example 1698458024000
     *
     * @var int
     */
    public $endDate;

    /**
     * @description This parameter is required.
     *
     * @example 74
     *
     * @var int
     */
    public $jobId;

    /**
     * @description This parameter is required.
     *
     * @example 1698458024000
     *
     * @var int
     */
    public $startDate;
    protected $_name = [
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'dataTime' => 'DataTime',
        'endDate' => 'EndDate',
        'jobId' => 'JobId',
        'startDate' => 'StartDate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dataTime) {
            $res['DataTime'] = $this->dataTime;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateRerunJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DataTime'])) {
            $model->dataTime = $map['DataTime'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
