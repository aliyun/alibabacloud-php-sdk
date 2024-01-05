<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeJobResourceUsageResponseBody\data;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeJobResourceUsageResponseBody\data\jobAcuUsage\acuUsageDetail;
use AlibabaCloud\Tea\Model;

class jobAcuUsage extends Model
{
    /**
     * @description The ACU usage.
     *
     * @var acuUsageDetail
     */
    public $acuUsageDetail;

    /**
     * @description The end time of the job. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-05-23T16:00:00Z
     *
     * @var string
     */
    public $jobEndTime;

    /**
     * @description The job ID.
     *
     * @example 1592
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The start time of the job. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-05-22T16:00:00Z
     *
     * @var string
     */
    public $jobStartTime;

    /**
     * @description The name of the job resource group.
     *
     * @example job_default
     *
     * @var string
     */
    public $resourceGroupName;
    protected $_name = [
        'acuUsageDetail'    => 'AcuUsageDetail',
        'jobEndTime'        => 'JobEndTime',
        'jobId'             => 'JobId',
        'jobStartTime'      => 'JobStartTime',
        'resourceGroupName' => 'ResourceGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acuUsageDetail) {
            $res['AcuUsageDetail'] = null !== $this->acuUsageDetail ? $this->acuUsageDetail->toMap() : null;
        }
        if (null !== $this->jobEndTime) {
            $res['JobEndTime'] = $this->jobEndTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobStartTime) {
            $res['JobStartTime'] = $this->jobStartTime;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobAcuUsage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcuUsageDetail'])) {
            $model->acuUsageDetail = acuUsageDetail::fromMap($map['AcuUsageDetail']);
        }
        if (isset($map['JobEndTime'])) {
            $model->jobEndTime = $map['JobEndTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobStartTime'])) {
            $model->jobStartTime = $map['JobStartTime'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        return $model;
    }
}
